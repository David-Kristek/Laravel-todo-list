<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class remindTask extends Model
{
    use HasFactory;
    protected $table = "remind_tasks";
    protected $id = "id"; 
    protected $timestamp = true;
    protected $fillable = ['user_id', 'task_id'];
}
