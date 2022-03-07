<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\HasFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    use HasFactory;
    
    protected $fillable = [
        'post_title', 
        'description'
    ];
 
    public function getRouteKeyName()
    {
        return 'post_slug';
    } 
}
