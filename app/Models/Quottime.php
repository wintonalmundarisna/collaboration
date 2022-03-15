<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quottime extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['nama'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
