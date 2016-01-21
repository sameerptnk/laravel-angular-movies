<?php

/**
 * The entry point for the Laravel Angular Movies App
 * Here we've all the routes for the application.
 */

Route::resource('movies', 'MoviesController');