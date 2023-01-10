<?php

namespace App\Models;

use App\Models\Rider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }
}
