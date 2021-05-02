<?php

/**
 * @apiGroup           Note
 * @apiName            getAllNotes
 *
 * @api                {GET} /v1/note-data Endpoint title here..
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

Route::get('note-data', [Controller::class, 'getAllNotes'])
    ->name('api_note_get_all_notes')
    ->middleware(['auth:api']);

