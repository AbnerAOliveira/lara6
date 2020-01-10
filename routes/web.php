<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Models\Client;
use  App\Models\Address;

Route::get('/clients', function () {
    $clients = Client::all();
    foreach ($clients as $client) {
        echo "<p> ID: " . $client->id . "</p>";
        echo "<p> Name: " . $client->name . "</p>";
        echo "<p> Telephone: " . $client->telephone . "</p>";
        echo "<p>Address:</p>";
        $address = Address::where('client_id', $client->id)->first();
        echo "<p> ID: " . $address->client_id . "</p>";
        echo "<p> City: " . $address->city . "</p>";
        echo "<p> State: " . $address->state . "</p>";
        echo "<p> Number: " . $address->number . "</p>";
        echo "<hr>";
    }
});

Route::get('/addresses', function () {
    $addresses = Address::all();
    foreach ($addresses as $address) {
        echo "<p> ID: " . $address->client_id . "</p>";
        echo "<p> City: " . $address->city . "</p>";
        echo "<p> State: " . $address->state . "</p>";
        echo "<p> Number: " . $address->number . "</p>";
        echo "<hr>";
    }
});
