<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Repositories\PodcastRepository;
use Illuminate\Http\Request;

class ADICOMController extends Controller
{
    /**
     * @var PodcastRepository
     */
    private PodcastRepository $podcastRepository;

    public function __construct(PodcastRepository $podcastRepository)
    {
        $this->podcastRepository = $podcastRepository;
    }

    public function academie()
    {
        $academies = Academy::all();
        return view('adicom.academy',compact('academies'));
    }

    public function awards()
    {
        return view('adicom.awards');
    }

    public function forum()
    {
        return view('adicom.forum');
    }

    public function good()
    {
        return view('adicom.goog');
    }

    public function watch()
    {
        return view('adicom.watch');
    }

    public function podcast()
    {
        $podcasts = $this->podcastRepository->getLatest(6);
        //$page = $this->getPageInfo('nos-news');
        $latest_podcasts = $this->podcastRepository->getLatest(2);
        $categories = $this->podcastRepository->getCategories();
        return view('adicom.podcast',compact('latest_podcasts','categories','podcasts'));
    }
}
