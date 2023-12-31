<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'keterangan',
        'nominal',
        'id'
    ];

    protected $primaryKey = 'id';

    public $incrementing = false;
}
