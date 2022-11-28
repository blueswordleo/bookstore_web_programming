<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table="books";
    protected $guarded=[];
    

    public function publishers() {
        return $this->belongsTo(publishers::class);
        return$this->hasOne(publishers::class);
    }

    public function categories() {
        return $this->belongsToMany(categories::class, 'book_category');
    }
}
