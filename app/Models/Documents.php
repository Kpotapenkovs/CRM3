<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'case_id',
        'filename',
        'mime_type',
        'category',
        'pages',
        'uploaded_by'
    ];
}
