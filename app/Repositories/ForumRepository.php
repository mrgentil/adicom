<?php

namespace App\Repositories;

use App\Models\Forum;

class ForumRepository
{
    public function getLatest(?int $limit = 10): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Forum::query()
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getForum(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Forum::query()
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getRelatedForums(string $slug, ?int $limit = 4): \Illuminate\Database\Eloquent\Collection|array
    {
        $id = $this->getForumIdFromSlug($slug);

        return Forum::query()
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getForumIdFromSlug(string $slug): string
    {
        return $id = explode('-', $slug)[0];
    }
}
