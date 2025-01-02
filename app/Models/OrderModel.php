<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    protected $fillable = ['burger_id', 'quantity', 'customer_name', 'customer_email'];

    public function burger()
    {
        return $this->belongsTo(Burger::class);
    }
}
