<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishers extends Model
{
    use HasFactory;
    protected $table="publishers";
    protected $guarded=[];

    public function books() {
        return $this->hasMany(books::class);
        return $this->belongsTo(books::class);
    }
}
