<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ProjectCreator extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'project_creator_name',
        'number_of_projects',
        'number_of_completed_projects',
        'number_of_non_completed_projects',
        'number_of_deployed_projects',
        'number_of_current_projects_in_production',
        'number_of_current_projects_in_development',
    ];

    protected $hidden = [
        'laravel_through_key',
        'created_at',
        'updated_at'
    ];
}
