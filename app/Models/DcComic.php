<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DcComic extends Model
{
    use HasFactory;
    // protecting id change from mass update and mass save
    protected $guarded = ['id'];
}
