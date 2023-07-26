<?php

namespace App\Repositories;

use App\Models\Post;
use TCG\Voyager\Models\Category;

class MediaRepository
{
    public function getLatest(?int $limit = 10): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Post::query()
            ->with(['category', 'user'])
            ->orderBy('id', 'desc')
            ->where('status', 'published')
            ->paginate($limit);
    }

    public function getMedia(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Post::query()
            ->with('category')
            ->where('status', 'published')
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getCategories(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Category::query()->where('order', 1)->get();
    }

    public function getRelatedMedias(string $slug, string $category_id, ?int $limit = 4): \Illuminate\Database\Eloquent\Collection|array
    {
        $id = $this->getMediaIdFromSlug($slug);

        return Post::query()
            ->where('status', 'PUBLISHED')
            ->where('category_id', $category_id)
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getMediaIdFromSlug(string $slug): string
    {
        return $id = explode('-', $slug)[0];
    }

}
