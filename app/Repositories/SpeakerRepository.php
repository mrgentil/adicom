<?php

namespace App\Repositories;

use App\Models\Speaker;

class SpeakerRepository
{
    public function getLatest(?int $limit = 10): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Speaker::query()
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }

    public function getSpeaker(string $slug): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Speaker::query()
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getRelatedSpeakers(string $slug, ?int $limit = 4): \Illuminate\Database\Eloquent\Collection|array
    {
        $id = $this->getSpeakerIdFromSlug($slug);

        return Speaker::query()
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getSpeakerIdFromSlug(string $slug): string
    {
        return $id = explode('-', $slug)[0];
    }
}
