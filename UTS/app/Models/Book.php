<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function publishers()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
