<?php

namespace App\Containers\AppSection\Note\Actions;

use App\Containers\AppSection\Note\Models\Note;
use App\Containers\AppSection\Note\Tasks\FindNoteByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindNoteByIdAction extends Action
{
    public function run(Request $request): Note
    {
        return app(FindNoteByIdTask::class)->run($request->id);
    }
}
