<?php

/**
 * @apiGroup           Note
 * @apiName            updateNote
 *
 * @api                {PATCH} /v1/note-data/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Note\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('note-data/{id}', [Controller::class, 'updateNote'])
    ->name('api_note_update_note');

