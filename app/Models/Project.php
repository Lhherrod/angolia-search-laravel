<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'project_name',
        'project_start_date',
        'project_end_date',
        'project_status',
        'project_env_status'
    ];

    public function project_creator()
    {
        return $this->hasManyThrough(
            '\App\Models\ProjectCreator',
            '\App\Models\ProjectCreatorModel',
            'project_id',
            'id',
            'id',
            'project_creator_id'
        );
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['project_creator'] = $this->project_creator->map(function ($data) {
            return $data['project_creator_name'];
        })->toArray();

        return $array;
    }
}
