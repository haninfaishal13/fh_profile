<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skill()
    {
        return $this->hasMany(ProfileSkill::class);
    }

    public function portofolio()
    {
        return $this->hasMany(ProfilePortofolio::class);
    }

    public function link()
    {
        return $this->hasMany(ProfileUrl::class);
    }
}
