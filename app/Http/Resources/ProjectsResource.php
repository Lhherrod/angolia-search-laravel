<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Projects',
            'attributes' => [
                'project_name' => $this->project_name,
                'project_creator' => $this->project_creator,
                'project_start_date' => $this->project_start_date,
                'project_end_date' => $this->project_end_date,
                'project_status' => $this->project_status,
                'project_env_status' => $this->project_env_status,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
