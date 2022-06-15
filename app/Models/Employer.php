<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $with = ['occupation'];

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }
}
