<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected function appointment(): Attribute {

        return new Attribute(
            get: fn ($value) => $value = date("D M j Y"),
        );
    }
}
