<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngoingInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function logs()
    {
        return $this->hasMany(InvoiceLog::class);
    }
}
