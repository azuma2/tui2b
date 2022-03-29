<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class come2 extends Model
{
    use HasFactory;

        protected $fillable = ['content'];

    public static $rules = array(
        'name2' => 'required|max:20',
        'content' => 'required|max:20',
    );
}
