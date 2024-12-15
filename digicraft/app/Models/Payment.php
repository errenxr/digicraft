<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';

    protected $fillable =[
        'no_pesanan',
        'id_customer',
        'bukti'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Cari ID terakhir
            $lastId = self::orderBy('id_bukti', 'desc')->first();
            $lastNumber = $lastId ? intval(substr($lastId->id_bukti, 1)) : 0;

            // Format ID baru
            $model->id_bukti = 'B' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        });
    }

    public function customer(){
        return $this->belongsTo(User::class, 'id_customer', 'id');
    }

    public function orderdetail(){
        return $this->belongsTo(OrderDetails::class, 'no_pesanan', 'no_pesanan');
    }


}
