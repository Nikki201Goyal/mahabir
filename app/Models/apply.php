<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apply extends Model
{
    use HasFactory;
    protected $fillable=['firstname','lastname','vacancy', 'country', 'street', 'town','phone','email'];
}
