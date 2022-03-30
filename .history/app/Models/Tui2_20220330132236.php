<?php

namespace App\Models;

use App\Models\Tui2;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tui2 extends Model

{
        use HasFactory;

    protected $fillable = ['content'];
    protected $table = 'tui2s';

    public static $rules = array(
        'name' => 'required|max:20',
        'content' => 'required|max:20',
    );
    
    public function user(){ 
        return $this->belongsTo('App\Models\user');
    }
}