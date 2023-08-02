<?php

namespace App\Repositories;

use App\Models\Podcast;
use TCG\Voyager\Models\Category;

class PodcastRepository
{
    public function getLatest(?int $limit = 10): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Podcast::query()
            ->with(['category'])
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getPodcast(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Podcast::query()
            ->with('category')
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getCategories(): \Illuminate\Database\Eloquent\Collection|array
    {
        return Category::query()->where('order', 1)->get();
    }

    public function getRelatedPodcasts(string $slug, string $category_id, ?int $limit = 4): \Illuminate\Database\Eloquent\Collection|array
    {
        $id = $this->getPodcastIdFromSlug($slug);

        return Podcast::query()
            ->where('category_id', $category_id)
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getPodcastIdFromSlug(string $slug): string
    {
        return $id = explode('-', $slug)[0];
    }
}
