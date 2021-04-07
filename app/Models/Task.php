<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $id = "id";
    protected $timestamp = true;
    protected $fillable = ['name', 'body'];
    
    public function remind()
    {
        return $this->hasMany(remindTask::class); 
    }
}
