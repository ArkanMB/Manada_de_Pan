<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'service_id', 'quantity'];
    protected $hidden = ['created_at', 'updated_at'];


    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
