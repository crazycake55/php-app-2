<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantKpop extends Model
{
    use HasFactory;

    protected $fillable = ['votes',];
}
