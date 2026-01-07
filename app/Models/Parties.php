<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'type',
        'name',
        'reg_code',
        'vat',
        'country',
        'email',
        'phone'
    ];
}
