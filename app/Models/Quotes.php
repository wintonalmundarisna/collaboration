<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // public function quottime() {
    //     return $this->belongsTo(User::class);
    // }

    // public function scopeFilter($data) {
    //     if (request('cari')) {
    //         return $data->where('nama', 'like', '%' . request('cari') . '%')
    //         ->orWhere('isi', 'like', '%' . request('cari') . '%');
    //     }
    // }
}
