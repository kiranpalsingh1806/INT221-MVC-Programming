<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model{

protected $fillable = ['title', 'completed', 'user_id', 'description'];

}
