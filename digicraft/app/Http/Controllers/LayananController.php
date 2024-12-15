<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    
    public function tampilLayanan(){
        $layanan = Layanan::all();
        if(Auth::user()->role === 'admin'){
            return view('adminlayanan', compact('layanan'));
        }elseif (Auth::user()->role === 'customer'){
            return view('dashboardcust', compact('layanan'));
        }
        
    }
    
    public function createLayanan(){
        return view('updatelayanan');
    }

    public function submitLayanan(Request $request){
        Layanan::create([
            'nama_layanan'=>$request->nama_layanan,
            'deskripsi'=>$request->deskripsi,
            'biaya'=>$request->biaya,
        ]);
       return redirect()->route('adminlayanan.tampil');

    }

    public function detailLayanan($id_layanan){
        $layanan = Layanan::find($id_layanan);
        $layanan->formatted_price = number_format($layanan->biaya, 0, ',', '.');
        if(Auth::user()->role === 'admin'){
            return view('admlayanandetail', compact('layanan'));
        }elseif (Auth::user()->role === 'customer'){
            return view('checkoutcustomer', compact('layanan'));
        }
    }

    public function editLayanan($id_layanan){
        $layanan = Layanan::findOrFail($id_layanan);
        return view('editlayanan', compact('layanan'));
    }

    public function update(Request $request, $id_layanan){
        $validated = $request->validate([
            'nama_layanan' => 'required|string',
            'deskripsi' => 'required|string',
            'biaya' => 'required|integer',
        ]);
        $layanan = Layanan::findOrFail($id_layanan);
        $layanan->update($validated);

        return redirect()->route('adminlayanan.tampil');
    }

    public function hapus($id_layanan){
        $layanan = Layanan::findOrFail($id_layanan);
        $layanan->delete();

        return redirect()->route('adminlayanan.tampil');

    }
}
