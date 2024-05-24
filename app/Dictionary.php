<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Dictionary extends Model
{
    use Translatable;
    protected $translatable = ['title', 'text'];
}