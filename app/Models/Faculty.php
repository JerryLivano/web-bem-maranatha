<?php

namespace App\Models;

use App\Models\User;
use App\Models\Recruitment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany(User::class,'faculty_id');
    }

    public function recruitment()
    {
        return $this->hasMany(Recruitment::class,'faculty_id');
    }
}
