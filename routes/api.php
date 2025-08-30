<?php
use Illuminate\Support\Facades\Route;
use App\Models\Verse;

Route::get('/verses', function () {
    return Verse::all();
});
