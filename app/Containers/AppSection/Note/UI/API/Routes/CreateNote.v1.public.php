<?php

/**
 * @apiGroup           Note
 * @apiName            createNote
 *
 * @api                {POST} /v1/note-data Endpoint title here..
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

Route::post('note-data', [Controller::class, 'createNote'])
    ->name('api_note_create_note')
    ->middleware(['auth:api']);

