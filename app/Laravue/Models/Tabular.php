<?php

namespace App\Laravue\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabular extends Model
{
    use HasFactory;
    protected $fillable = ['author','importants', 'created_at', 'updated_at', 'status', 'title'];
}