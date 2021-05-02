<?php

/**
 * @apiGroup           Note
 * @apiName            deleteNote
 *
 * @api                {DELETE} /v1/note-data/:id Endpoint title here..
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

Route::delete('note-data/{id}', [Controller::class, 'deleteNote'])
    ->name('api_note_delete_note')
    ->middleware(['auth:api']);

