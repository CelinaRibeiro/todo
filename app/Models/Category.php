<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    Task,
    User
};

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'color', 'user_id'];


    //Uma categoria SEMPRE vai pertencer a um usuário 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Uma categoria pode TER várias tarefas
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
