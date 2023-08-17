<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Galery;
use App\Models\Participation;
use App\Models\Partner;
use App\Models\Testimonal;
use App\Repositories\MediaRepository;
use App\Repositories\SpeakerRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * @var SpeakerRepository
     */
    private SpeakerRepository $speakerRepository;

    /**
     * @var MediaRepository
     */
    private MediaRepository $mediaRepository;

    public function __construct(SpeakerRepository $speakerRepository,MediaRepository $mediaRepository)
    {
        $this->speakerRepository = $speakerRepository;
        $this->mediaRepository = $mediaRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $banners = Banner::all();
        $partners = Partner::all();
        $galeries = Galery::all();
        $abouts = About::all();
        $testimonals = Testimonal::all();
        $participations = Participation::all();
        $speakers = $this->speakerRepository->getLatest(8);
        $medias = $this->mediaRepository->getLatest(6);
        return view('home',compact('banners','speakers','medias','partners','abouts','galeries','testimonals','participations'));
    }
}
