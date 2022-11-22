<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'text1', 'text2', 'text3', 'image'];
    
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
