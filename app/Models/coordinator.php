<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coordinator extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'coordinatorId',
        'userId',
    ];
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}
