<?php

namespace App\Containers\AppSection\Note\Actions;

use App\Containers\AppSection\Note\Models\Note;
use App\Containers\AppSection\Note\Tasks\CreateNoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateNoteAction extends Action
{
    public function run(Request $request): Note
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateNoteTask::class)->run($data);
    }
}
