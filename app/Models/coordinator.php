<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coordinator extends Model
{
    use HasFactory;
    protected $fillable = [
        'coordinatorId',
        'instructorId',
        'password',
    ];
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
