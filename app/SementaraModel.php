<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SementaraModel extends Model
{
    protected $table = "sementara";

    protected $fillable = [
        'jawaban', 'poin'
    ];

    public $timestamps = false;
}
