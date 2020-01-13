<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 */
class Address extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
