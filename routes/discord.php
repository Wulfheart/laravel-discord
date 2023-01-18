<?php

use Illuminate\Support\Facades\Route;

Route::post('/discord', \Wulfheart\LaravelDiscord\Controllers\DiscordRequestController::class);
