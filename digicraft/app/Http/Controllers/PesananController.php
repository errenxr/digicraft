<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\OrderDetails;
use App\Models\OrderHeader;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function riwayatPesanan(){
        $order_headers = OrderHeader::where('konfirmasi', 1)
        ->select('no_pesanan', 'id_customer', 'created_at')->get();
        return view('riwayatpesanan', compact('order_headers'));
    }

    public function tampilPesananMasuk(){
        $order_headers = OrderHeader::all();
        return view('pesananmasuk', compact('order_headers'));
    }

    public function konfirmasiPesananMasuk(Request $request){
        if ($request->has('konfirmasi')) {
            foreach ($request->konfirmasi as $id => $value) {
                // Update kolom konfirmasi di tabel order_headers
                $order_headers = OrderHeader::find($id);
                if ($order_headers) {
                    $order_headers->update(['konfirmasi' => true]); // Tandai sebagai dikonfirmasi
                }
            }
        }
        return redirect()->back()->with('success', 'Pesanan berhasil dikonfirmasi.');
    }

    public function riwayatPesananCustomer(){
        $order_headers = OrderHeader::all();
        return view('riwayatpesanancust', compact('order_headers'));
    }

    public function konfirmasiPesananSelesai(Request $request){
        if ($request->has('selesai')) {
            foreach ($request->selesai as $id => $value) {
                // Update kolom konfirmasi di tabel order_headers
                $order_headers = OrderHeader::find($id);
                if ($order_headers) {
                    $order_headers->update(['selesai' => true]); // Tandai sebagai dikonfirmasi
                }
            }
        }
        return redirect()->back()->with('success', 'Pesanan berhasil dikonfirmasi.');
    }

    public function detailPesanan($id_layanan, $no_pesanan){
        $layanan = Layanan::findOrFail($id_layanan);
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        $order_details = OrderDetails::findOrFail($no_pesanan);
        return view('detailpesanancust', compact('layanan', 'order_details'));
    }

    public function infoPesanan($no_pesanan){
        $order_details = OrderDetails::where('no_pesanan', $no_pesanan)->first();
        $layanan = $order_details->layanan;
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        $payment = Payment::where('no_pesanan', $no_pesanan)->first();

        return view('infopesanan', compact( 'order_details', 'layanan', 'payment'));

    }

    public function detailPesananSelesai($no_pesanan){
        $order_details = OrderDetails::where('no_pesanan', $no_pesanan)->first();
        $layanan = $order_details->layanan;
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        $payment = Payment::where('no_pesanan', $no_pesanan)->first();

        return view('detailpesananselesai', compact( 'order_details', 'layanan', 'payment'));

    }

    public function createPesanan($id_layanan){
        $layanan = Layanan::find($id_layanan);
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        return view('formcheckout', compact('layanan'));
    }

    public function submitPesanan(Request $request){

        $id_customer = Auth::id();
        $orderdetails = OrderDetails::create([
            'no_pesanan'=>$request->no_pesanan,
            'id_layanan'=>$request->id_layanan,
            'deskripsi_pesanan'=>$request->deskripsi_pesanan,
            'email_kirim'=>$request->email_kirim,
            'id_customer'=>$id_customer,
            'tanggal_pesan'=>now()
        ]);
        $orderdetails->refresh();
        $layanan = Layanan::find($request->id_layanan);
        

        OrderHeader::create([
            'no_pesanan'=>$orderdetails->no_pesanan,
            'id_customer'=>$id_customer,
            'konfirmasi'=>false,
            'selesai'=>false  
        ]);


        return redirect()->route('detailpesanan.tampil', ['id_layanan' => $layanan->id_layanan, 'no_pesanan'=>$orderdetails->no_pesanan]);

    }
    
    public function displayPembayaranBerhasil(){
        return view('pembayaranberhasil');
    }
    

    public function submitBuktiPayment(Request $request)
    {
        $request->validate([
            'bukti' => 'required|mimes:png,jpg,jpeg',
        ]);
    
        // Simpan file
        $filePath = null;
        if ($request->hasFile('bukti')) {
            $filePath = $request->file('bukti')->store('uploads', 'public');
        }
    
        // Ambil data pesanan
        $id_customer = Auth::id();
        $no_pesanan = $request->input('no_pesanan');
        $orderdetails = OrderDetails::find($no_pesanan);
    
        // Pastikan pesanan ditemukan
        if (!$orderdetails) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan!');
        }
    
        // Simpan data ke tabel payment
        Payment::create([
            'no_pesanan' => $no_pesanan,
            'id_customer' => $id_customer,
            'bukti' => $filePath,
        ]);
    
        return redirect()->route('pembayaranberhasil')->with('success', 'Bukti pembayaran berhasil diunggah!');
    }
    

   
}
