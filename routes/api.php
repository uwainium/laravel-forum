<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResources([
    'categories' => 'CategoryController',
    'emoji' => 'EmojiController',
    'follows' => 'FollowController',
    'genders' => 'GenderController',
    'heads' => 'HeadController',
    'legs' => 'LegsController',
    'messages' => 'MessageController',
    'moderation-statuses' => 'ModerationStatusController',
    'posts' => 'PostController',
    'reactions' => 'ReactionController',
    'reaction-posts' => 'ReactionPostController',
    'role-accesses' => 'RoleAccessController',
    'roles' => 'RoleController',
    'role-users' => 'RoleUserController',
    'rooms' => 'RoomController',
    'room-members' => 'RoomMemberController',
    'threads' => 'ThreadController',
    'torsos' => 'TorsoController',
    'users' => 'UserController'
]);
