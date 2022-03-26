<?php
use Marek\Filmy\Models\Filmy;

Route::get('filmy', function() {
    return Filmy::all();
});