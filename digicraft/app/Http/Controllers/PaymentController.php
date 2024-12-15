<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\OrderDetails;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function payment($id_layanan, $no_pesanan){
        $layanan = Layanan::findOrFail($id_layanan);
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        $orderdetails = OrderDetails::find($no_pesanan);
        return view('paymentpage', compact('layanan', 'orderdetails'));
    }
    
    public function tampilUploadPayment($id_layanan, $no_pesanan){
        $layanan = Layanan::find($id_layanan);
        $payment = Payment::where('no_pesanan', $no_pesanan)->first();
        return view('uploadpayment', compact('layanan', 'payment'));


    }

   
    

}
