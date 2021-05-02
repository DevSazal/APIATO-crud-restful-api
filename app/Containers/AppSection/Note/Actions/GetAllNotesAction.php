<?php

namespace App\Containers\AppSection\Note\Actions;

use App\Containers\AppSection\Note\Tasks\GetAllNotesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllNotesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllNotesTask::class)->addRequestCriteria()->run();
    }
}
