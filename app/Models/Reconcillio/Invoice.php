<?php

namespace App\Models\Reconcillio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'due_date',
        'send_date',
    ];

    protected $casts = [
        'due_date' => 'date',
        'send_date' => 'date',
    ];
}
