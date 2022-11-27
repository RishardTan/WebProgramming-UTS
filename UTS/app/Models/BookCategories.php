<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategories extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class, 'book_id', 'id');
    }
    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
