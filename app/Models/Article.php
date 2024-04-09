<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Excludable\Excludable;

class Article extends Model
{
    use Excludable, HasFactory;
}
