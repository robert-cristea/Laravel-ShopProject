<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    public function orders()
    {
        return $this->hasMany('App\Model\Order', 'project_id', 'id');
    }
}
