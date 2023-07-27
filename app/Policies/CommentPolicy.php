<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;

class CommentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Comment $comment)
    {
        return $comment->user()->is($user);
    }

    public function destroy(User $user, Comment $comment)
    {
        return $this->update($user, $comment);
    }
}