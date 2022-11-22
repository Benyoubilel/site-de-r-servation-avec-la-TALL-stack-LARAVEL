<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $appends = ['display'];
    protected $fillable = ['user_id', 'home_id', 'start', 'rented', 'end', 'limit'];

    public function getDisplayAttribute() 
    {
        return 'background';
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
