<?php

namespace App\Containers\AppSection\Note\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

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
