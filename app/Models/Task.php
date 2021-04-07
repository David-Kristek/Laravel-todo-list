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
    public function remindedBy(User $user, $taskId){
        $varA =  $this->remind->contains('user_id', $user->id);
        $varB =  $this->remind->contains('task_id', $taskId);
        return $varA && $varB; 
    }
}
