<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository
{
    /**
     * @param User $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}