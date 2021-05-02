<?php

/**
 * @apiGroup           Note
 * @apiName            findNoteById
 *
 * @api                {GET} /v1/note-data/:id Endpoint title here..
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

Route::get('note-data/{id}', [Controller::class, 'findNoteById'])
    ->name('api_note_find_note_by_id')
    ->middleware(['auth:api']);

