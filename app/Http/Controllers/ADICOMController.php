<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Award;
use App\Models\AwardGalery;
use App\Models\Galery;
use App\Models\Good;
use App\Repositories\ForumRepository;
use App\Repositories\PodcastRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ADICOMController extends Controller
{
    /**
     * @var PodcastRepository
     */
    private PodcastRepository $podcastRepository;

    /**
     * @var ForumRepository
     */
    private ForumRepository $forumRepository;

    public function __construct(PodcastRepository $podcastRepository, ForumRepository $forumRepository)
    {
        $this->podcastRepository = $podcastRepository;
        $this->forumRepository = $forumRepository;
    }

    public function academie()
    {
        $academies = Academy::all();
        return view('adicom.academy',compact('academies'));
    }

    public function awards(Request $request)
    {
        $award = Award::all();
        $awardGaleries = AwardGalery::all();
        // Récupérer l'ID de la dernière catégorie
        $lastCategoryId = $awardGaleries->last()->category->id;

        // Récupérer l'ID de catégorie sélectionné (s'il existe)
        $selectedCategoryId = $request->input('categoryId', $lastCategoryId);


        return view('adicom.awards',compact('award','awardGaleries','selectedCategoryId'));
    }

    public function showCategory($categoryId)
    {
        $categoryImages = AwardGalery::where('category_id', $categoryId)->first();

        return view('adicom.awards',compact('categoryImages'));
    }
    public function forum()
    {
        $forums = $this->forumRepository->getLatest(8);
        return view('adicom.forum',compact('forums'));
    }

    public function good()
    {
        $goods = Good::all();
        return view('adicom.goog',compact('goods'));
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

    public function vote(Request $request)
    {
        // Vérifiez si l'utilisateur est connecté
        if (auth()->guest()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour voter.');
        }

        // Validez les données entrantes
        $request->validate([
            'candidate_id' => 'required|exists:awards,id',
        ]);

        // Récupérez l'utilisateur actuellement connecté
        $user = Auth::user();

        // Vérifiez si l'utilisateur a déjà voté dans les 30 dernières minutes
        $lastVotedAt = $user->last_voted_at;
        if ($lastVotedAt && now()->diffInMinutes($lastVotedAt) < 30) {
            return redirect()->back()->with('error', 'Vous avez déjà voté. Veuillez revenir dans 30 minutes.');
        }

        $candidate = Award::findOrFail($request->candidate_id);

        // Incrémentez le nombre de votes pour le candidat
        $candidate->increment('votes');

        // Mettez à jour la date et l'heure du dernier vote de l'utilisateur
        $user->update(['last_voted_at' => now()]);

        return redirect()->back()->with('message', 'Vote enregistré avec succès.');
    }

    public function show(string $slug)
    {
        $forums = $this->forumRepository->getForum($slug);
        $latest_events = $this->forumRepository->getLatest(3);
        return view('adicom.forum-show', compact('forums','latest_events'));
    }

}
