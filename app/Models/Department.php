<?php

namespace App\Models;

use App\Models\User;
use App\Models\Recruitment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class,'department_id');
    }

    public function recruitment()
    {
        return $this->hasMany(Recruitment::class,'faculty_id');
    }
}
