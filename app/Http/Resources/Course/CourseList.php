<?php

namespace App\Http\Resources\Course;

use Illuminate\Http\Resources\Json\Resource;

class CourseList extends Resource
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
            'href' => [
                'contents' => route('courses.show', $this->id)
            ]
        ];
    }
}
