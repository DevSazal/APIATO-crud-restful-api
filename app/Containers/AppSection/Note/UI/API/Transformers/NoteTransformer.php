<?php

namespace App\Containers\AppSection\Note\UI\API\Transformers;

use App\Containers\AppSection\Note\Models\Note;
use App\Ship\Parents\Transformers\Transformer;

class NoteTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Note $note): array
    {
        $response = [
            'object' => $note->getResourceKey(),
            'id' => $note->getHashedKey(),
            'task' => $note->task,
            'time' => $note->time,
            'user' => $note->user_id,
            'created_at' => $note->created_at,
            'updated_at' => $note->updated_at,
            'readable_created_at' => $note->created_at->diffForHumans(),
            'readable_updated_at' => $note->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $note->id,
            // 'deleted_at' => $note->deleted_at,
        ], $response);

        return $response;
    }
}
