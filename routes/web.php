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

        echo "<p> ID: " . $client->address->client_id . "</p>";
        echo "<p> City: " . $client->address->city . "</p>";
        echo "<p> State: " . $client->address->state . "</p>";
        echo "<p> Number: " . $client->address->number . "</p>";
        echo "<hr>";
    }
});

Route::get('/addresses', function () {
    $addresses = Address::all();
    foreach ($addresses as $address) {
        echo "<p> ID: " . $address->client_id . "</p>";

        echo "<p> Name: " . $address->client->name . "</p>";
        echo "<p> Telephone: " . $address->client->telephone . "</p>";

        echo "<p> City: " . $address->city . "</p>";
        echo "<p> State: " . $address->state . "</p>";
        echo "<p> Number: " . $address->number . "</p>";
        echo "<hr>";
    }
});

Route::get('/insert', function () {
    $c = new Client();
    $c->name = 'Poli';
    $c->telephone = '50 30303030';
    $c->save();

    $e = new Address();
    $e->city = 'Recife';
    $e->state = 'Pernambuco';
    $e->number = '109';
    $c->address()
        ->save($e);

});
