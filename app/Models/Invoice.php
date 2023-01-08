<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    // fillable fields
    protected $fillable =[
        'due_date',
        'payment_date',
        'user_id',
    ];
    public function items(){
        return $this->hasMany(InvoiceItem::class);
    }
}
