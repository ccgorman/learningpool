<?php

namespace App\Http\Resources\Course;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'sections' => $this->coursecontents->count(),
            'users' => $this->usercourses->count(),
            'href' => [
                'contents' => route('contents.index', $this->id)
            ]
        ];
    }
}
