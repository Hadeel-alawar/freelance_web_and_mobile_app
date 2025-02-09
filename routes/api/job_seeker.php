<?php

use App\Http\Controllers\JobSeekerController;
use App\Models\Job_seeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post("register", [JobSeekerController::class, "register"]);
Route::post("login", [JobSeekerController::class, "login_api"]);

Route::group(["middleware" => "check:api-job_seeker"], function () {

    route::get("logout", [JobSeekerController::class, "logout_api"]);

    route::post("verify", [JobSeekerController::class, "apiVerify"]);

    Route::post("apply", [JobSeekerController::class, "applyApi"]);

    Route::post("post", [JobSeekerController::class, "postApi"]);

    Route::get("getCategory", [JobSeekerController::class, "getCategory"]);

    Route::post("add-comment/{post_id}", [JobSeekerController::class, "addComment_api"]);

    Route::post("updateComment/{comment_id}", [JobSeekerController::class, "updateComment"]);

    Route::get("deleteComment/{comment_id}", [JobSeekerController::class, "deleteComment"]);

    Route::post("addLikeToPost", [JobSeekerController::class, "addLikeToPost_api"]);

    Route::post("unlikePost", [JobSeekerController::class, "unlikePost_api"]);

    Route::post("addLikeToComment", [JobSeekerController::class, "addLikeToComment_api"]);

    Route::post("unlikeComment", [JobSeekerController::class, "unlikeComment_api"]);
});
