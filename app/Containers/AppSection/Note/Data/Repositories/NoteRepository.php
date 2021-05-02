<?php

namespace App\Containers\AppSection\Note\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

use App\Containers\AppSection\Note\Models\Note; // Add Model For Note

class NoteRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
