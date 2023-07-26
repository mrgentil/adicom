<?php

namespace App\Http\Controllers;

use App\Repositories\EditionRepository;
use App\Repositories\SpeakerRepository;
use Illuminate\Http\Request;

class EditionController extends Controller
{


    /**
     * @var EditionRepository
     */
    private EditionRepository $editionRepository;

    /**
     * @var SpeakerRepository
     */
    private SpeakerRepository $speakerRepository;

    public function __construct(EditionRepository $editionRepository,SpeakerRepository $speakerRepository)
    {
        $this->editionRepository = $editionRepository;
        $this->speakerRepository = $speakerRepository;
    }

    public function index()
    {
        $editions = $this->editionRepository->getLatest(6);
        $speakers = $this->speakerRepository->getLatest(10);
        return view('editions.index',compact('editions','speakers'));
    }

    public function show(string $slug)
    {
        $editions = $this->editionRepository->getEdition($slug);
        $latest_events = $this->editionRepository->getLatest(3);
        return view('editions.show', compact('editions','latest_events'));
    }
}
