<?php

namespace App\Repositories;

use \App\Models\Idea;
use \App\Models\User;


class IdeaRepository
{

    public function all()
    {
        // https://stackoverflow.com/questions/19852927/get-specific-columns-using-with-function-in-laravel-eloquent
        // $ideas = Idea::orderBy('goal')
        //     ->where('idea_owner', 1)
        //     ->with('user')
        //     ->join('users', 'users.id' , '=' , 'ideas.idea_owner')

        // https://medium.com/backenders-club/using-pluck-and-wherein-in-laravel-2dce9fb5033b
        $ideaOwnerIds = User::all()->pluck('id');
        $ideas = Idea::whereIn("idea_owner", $ideaOwnerIds)
            ->get()
            ->map(function ($idea) {
                return [
                    'id' => $idea->id,
                    'name' => $idea->name,
                    'description' => $idea->description,
                    'goal' => $idea->goal,
                    'idea_owner' => $idea->idea_owner,
                    'full' => $idea
                ];
            });

        return $ideas;
    }
}
