<?php

namespace App\Containers\AppSection\Note\Tasks;

use App\Containers\AppSection\Note\Data\Repositories\NoteRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

use App\Containers\AppSection\Note\Models\Note; // Add Model For Note

class UpdateNoteTask extends Task
{
    protected NoteRepository $repository;

    public function __construct(NoteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data) : Note
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
