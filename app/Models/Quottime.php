<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quottime extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    // public function scopeFilter($data) {
    //     if (request('cari')) {
    //         return $data->where('isi', 'like', '%' . request('cari') . '%');
    //     }
    // }
}
