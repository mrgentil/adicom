<?php

namespace App\Http\Controllers;

use App\Repositories\SpeakerRepository;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{


    /**
     * @var SpeakerRepository
     */
    private SpeakerRepository $speakerRepository;



    public function __construct(SpeakerRepository $speakerRepository)
    {
        $this->speakerRepository = $speakerRepository;
    }

    public function index()
    {
        $speakers = $this->speakerRepository->getLatest(8);
        return view('speaker',compact('speakers'));
    }

    public function show(string $slug)
    {
        $speakers = $this->speakerRepository->getSpeaker($slug);
        $latest_events = $this->speakerRepository->getLatest(3);
        return view('editions.speaker', compact('speakers','latest_events'));
    }
}
