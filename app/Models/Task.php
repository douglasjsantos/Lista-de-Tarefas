<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Define os campos que podem ser preenchidos em massa (atribuição em massa)
    protected $fillable = [
        'title',
        'status',
        'user_id',  // Se a task pertence a um usuário, por exemplo
    ];

    // Relacionamento: Definindo que uma tarefa pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
