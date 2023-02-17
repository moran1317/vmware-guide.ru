<?php

namespace App\Http\Resources;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'views' => $this->views,
            'author' => Author::find($this->author_id)->full_name,
            'category' => Category::find($this->category_id)->name        ];
    }
}
