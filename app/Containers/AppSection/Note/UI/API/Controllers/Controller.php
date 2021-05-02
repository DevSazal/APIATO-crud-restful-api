<?php

namespace App\Containers\AppSection\Note\UI\API\Controllers;

use App\Containers\AppSection\Note\UI\API\Requests\CreateNoteRequest;
use App\Containers\AppSection\Note\UI\API\Requests\DeleteNoteRequest;
use App\Containers\AppSection\Note\UI\API\Requests\GetAllNotesRequest;
use App\Containers\AppSection\Note\UI\API\Requests\FindNoteByIdRequest;
use App\Containers\AppSection\Note\UI\API\Requests\UpdateNoteRequest;
use App\Containers\AppSection\Note\UI\API\Transformers\NoteTransformer;
use App\Containers\AppSection\Note\Actions\CreateNoteAction;
use App\Containers\AppSection\Note\Actions\FindNoteByIdAction;
use App\Containers\AppSection\Note\Actions\GetAllNotesAction;
use App\Containers\AppSection\Note\Actions\UpdateNoteAction;
use App\Containers\AppSection\Note\Actions\DeleteNoteAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createNote(CreateNoteRequest $request): JsonResponse
    {
        $note = app(CreateNoteAction::class)->run($request);
        return $this->created($this->transform($note, NoteTransformer::class));
    }

    public function findNoteById(FindNoteByIdRequest $request): array
    {
        $note = app(FindNoteByIdAction::class)->run($request);
        return $this->transform($note, NoteTransformer::class);
    }

    public function getAllNotes(GetAllNotesRequest $request): array
    {
        $notes = app(GetAllNotesAction::class)->run($request);
        return $this->transform($notes, NoteTransformer::class);
    }

    public function updateNote(UpdateNoteRequest $request): array
    {
        $note = app(UpdateNoteAction::class)->run($request);
        return $this->transform($note, NoteTransformer::class);
    }

    public function deleteNote(DeleteNoteRequest $request): JsonResponse
    {
        app(DeleteNoteAction::class)->run($request);
        return $this->noContent();
    }
}
