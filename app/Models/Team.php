<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Rider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rider()
    {
        return $this->hasMany(Rider::class);
    }
}
