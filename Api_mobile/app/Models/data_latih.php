<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_latih extends Model
{
    use HasFactory;
    protected $table = 'data_latih';
    protected $fillabel = ['No', 'ukuran_akar', 'warna_akar', 'tekstur_akar', 'ukuran_batang', 'warna_batang', 'tekstur_batang', 'ukuran_daun', 'warna_daun', 'kesimpulan'];
}
