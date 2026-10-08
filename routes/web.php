<?php

use App\Livewire\Ambiete\AmbienteCreate;
use App\Livewire\Ambiete\AmbienteEdit;
use App\Livewire\Ambiete\AmbienteIndex;

use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ambiente', AmbienteIndex::class)->name('ambiente.index');
Route::get('/ambientes/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/edit{id}', AmbienteEdit::class)->name('ambiente.edit');

Route::get('/sensor', SensorIndex::class)->name('sensor.index');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit{id}', SensorEdit::class)->name('sensor.edit');


