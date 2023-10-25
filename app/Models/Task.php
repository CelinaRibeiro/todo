<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    Category,
    User
};

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'due_date', 'category_id', 'user_id'];

    //Uma tarefa SEMPRE vai pertencer a um único usuário 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Uma tarefa SEMPRE vai pertencer a uma categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

