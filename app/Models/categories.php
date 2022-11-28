<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $guarded=[];

    public function books() {
        return $this->belongsToMany(books::class, 'book_category');
    }
}
