<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model ;

class FlowModel extends Model
{
    protected $collection = "Flow";
    protected $connection = 'mongodb';
}
