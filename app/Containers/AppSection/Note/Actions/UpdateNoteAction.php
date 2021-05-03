<?php

namespace App\Containers\AppSection\Note\Actions;

use App\Containers\AppSection\Note\Models\Note;
use App\Containers\AppSection\Note\Tasks\UpdateNoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateNoteAction extends Action
{
    public function run(Request $request): Note
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'task',
            'time',
            'user_id'
        ]);

        return app(UpdateNoteTask::class)->run($request->id, $data);
    }
}
