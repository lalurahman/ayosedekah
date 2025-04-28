<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['id'];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
