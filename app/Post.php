<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // modcon
    public $timestamps = true;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id'];

    

}
