<?php

namespace App\Models;

use App\Models\Tui2;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tui2 extends Model

{
        use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required|max:20',
    );
    





}