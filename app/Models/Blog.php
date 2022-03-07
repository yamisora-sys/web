<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_title', 
        'description',
        'post_slug'
    ];
 
    public function getRouteKeyName()
    {
        return 'post_slug';
    }    
}