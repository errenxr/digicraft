<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'no_pesanan';
    protected $table = 'order_details';
    protected $fillable =[
        'no_pesanan',
        'id_layanan',
        'deskripsi_pesanan',
        'email_kirim',
        'id_customer',
        'tanggal_pesan'
    ];

    public function layanan(){
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id_layanan');
    }
    public function customer(){
        return $this->belongsTo(User::class, 'id_customer', 'id');
    }
    public function headers(){
        return $this->hasOne(OrderHeader::class, 'no_pesanan', 'no_pesanan');
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'no_pesanan', 'no_pesanan');
    }
}
