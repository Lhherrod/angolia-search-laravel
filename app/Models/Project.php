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

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */

    public function project_creator()
    {
        return $this->hasManyThrough(
            ProjectCreator::class,
            ProjectCreatorModel::class,
            'project_id',
            'id',
            'id',
            'project_creator_id'
        );
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array = $this->transform($array);

        $array['project_creator'] = $this->project_creator->map(function ($data) {
            return $data['project_creator_name'];
        })->toArray();

        return $array;
    }


}
