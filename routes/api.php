<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Posts
    Route::post('posts/media', 'PostApiController@storeMedia')->name('posts.storeMedia');
    Route::apiResource('posts', 'PostApiController');

    // Pages
    Route::post('pages/media', 'PageApiController@storeMedia')->name('pages.storeMedia');
    Route::apiResource('pages', 'PageApiController');

    // Categories
    Route::apiResource('categories', 'CategoryApiController');
});
