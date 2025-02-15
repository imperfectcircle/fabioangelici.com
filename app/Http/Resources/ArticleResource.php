<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = null;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'image_url' => $this->image_url,
            'is_published' => $this->is_published,
            'author' => $this->author,
            'created_at' => Carbon::parse($this->created_at)
                ->locale('it')
                ->translatedFormat('d F Y'),
        ];
    }
}
