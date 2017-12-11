<?php

/**
 * All route names are prefixed with 'admin.auth'.
 */
Route::group([
    'prefix'     => 'ctdb',
    'as'         => 'ctdb.',
    'namespace'  => 'Ctdb',
], function () {
    Route::group([
        'middleware' => 'role:administrator',
    ], function () {
        /*
         * Company Management
         */
        Route::group(['namespace' => 'Company'], function () {
            Route::resource('company', 'CompanyController', ['except' => ['show']]);
        });


        /*
         * Venue Management
         */
        Route::group(['namespace' => 'Venue'], function () {
            Route::resource('venue', 'VenueController', ['except' => ['show']]);
        });

        /*
         * Company Type Management
         */
        Route::group(['namespace' => 'Type'], function () {
            Route::resource('type', 'TypeController', ['except' => ['show']]);
        });

        /*
         * Genre Management
         */
        Route::group(['namespace' => 'Genre'], function () {
            Route::resource('genre', 'GenreController', ['except' => ['show']]);
        });

        /*
         * Licensor Management
         */
        Route::group(['namespace' => 'Licensor'], function () {
            Route::resource('licensor', 'LicensorController', ['except' => ['show']]);
        });

    });
});
