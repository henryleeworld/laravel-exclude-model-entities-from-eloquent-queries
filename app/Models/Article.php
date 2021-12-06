<?php

namespace App\Models;

use HFarm\Excludable\Excludable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Excludable, HasFactory;
}
