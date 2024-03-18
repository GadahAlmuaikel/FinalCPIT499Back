<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    protected $fillable = [
        'title',
        'field',
        'date',
        'pdfPath',
        'studentId',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class, 'studentId', 'id');
    }
}
