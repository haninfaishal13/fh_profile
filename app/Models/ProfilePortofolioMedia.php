<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePortofolioMedia extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function portofolio()
    {
        return $this->belongsTo(ProfilePortofolio::class);
    }
}
