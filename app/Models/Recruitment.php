<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class,'faculty_id');
    }
}
