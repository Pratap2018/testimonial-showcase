<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    
    use HasFactory;
    protected $fillable=['name','imagepath','surname','rating','position','experience_title','experience_details'];
    protected $casts = [
        'rating' => 'integer',
    ];
    
}
