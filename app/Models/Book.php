<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $name
 * @property int $isbn
 */
class Book extends Model
{
    use HasFactory;
}
