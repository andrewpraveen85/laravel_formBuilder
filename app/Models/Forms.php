<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table = 'forms';
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'user_id',
        'form_code',
    ];
}
