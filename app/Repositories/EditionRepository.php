<?php

namespace App\Repositories;

use App\Models\Edition;

class EditionRepository
{
    public function getLatest(?int $limit = 10): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Edition::query()
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getEdition(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Edition::query()
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getRelatedEditions(string $slug, ?int $limit = 4): \Illuminate\Database\Eloquent\Collection|array
    {
        $id = $this->getEditionIdFromSlug($slug);

        return Edition::query()
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getEditionIdFromSlug(string $slug): string
    {
        return $id = explode('-', $slug)[0];
    }
}
