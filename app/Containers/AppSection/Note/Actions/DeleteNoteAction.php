<?php

namespace App\Containers\AppSection\Note\Actions;

use App\Containers\AppSection\Note\Tasks\DeleteNoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteNoteAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteNoteTask::class)->run($request->id);
    }
}
