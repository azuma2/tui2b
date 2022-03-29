<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class come2 extends Model
{
    use HasFactory;

        protected $fillable = ['content2'];

    public static $rules = array(
        'name2' => 'required|max:20',
        'content2' => 'required|max:20',
    );

    
}
