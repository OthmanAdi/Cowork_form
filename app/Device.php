<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ["name", "file_path", "created_at", "updated_at"];
}
