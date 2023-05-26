<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_name',
        'book_image',
        'book_author',
        'book_type',        
        'book_source',
        'book_status',
        'book_description',
        'book_view',
        'book_version',
    ];
    public function Section()
    {
        return $this->hasMany(Section::class);
    }
    public function userReadHistories()
    {
        return $this->hasMany(UserReadHistory::class, 'book_id');
    }
}
