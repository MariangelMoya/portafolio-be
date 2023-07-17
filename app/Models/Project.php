<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'description'];
}
