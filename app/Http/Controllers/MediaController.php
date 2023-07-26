<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\YoutubeService;
use Illuminate\Http\Request;
use BeyondCode\Comments\Comment;

use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{

    /**
     * @var MediaRepository
     */
    private MediaRepository $mediaRepository;
    protected YoutubeService $youtubeService;


    public function __construct(MediaRepository $mediaRepository, YoutubeService $youtubeService)
    {
        $this->mediaRepository = $mediaRepository;
        $this->youtubeService = $youtubeService;
    }

    public function index()
    {
        $medias = $this->mediaRepository->getLatest(6);
        //$page = $this->getPageInfo('nos-news');
        $latest_medias = $this->mediaRepository->getLatest(2);
        $categories = $this->mediaRepository->getCategories();
        return view('medias.index', compact('medias', 'latest_medias', 'categories'));
    }

    public function show(string $slug)
    {
        $medias = $this->mediaRepository->getMedia($slug);
        $medias->url = 'https://adicom.mastagate.com/' . $medias->id;
        $latest_medias = $this->mediaRepository->getLatest(3);
        $categories = $this->mediaRepository->getCategories();
        $comments = Comment::where('commentable_type', Post::class)
            ->where('commentable_id', $medias->id)
            ->get();

        $category_id = $medias->category_id ?? null;
        //dd($category_id);
        $related_medias = $this->mediaRepository->getRelatedMedias($slug, $category_id);

        return view('medias.show', compact('medias', 'latest_medias', 'categories', 'comments', 'related_medias'));
    }



    public function storeComment(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $article = Post::find($id);

        $comment = new Comment();
        $comment->commentable_type = Post::class;
        $comment->commentable_id = $article->id;
        $comment->user_id = auth()->user()->id; // Ou utilisez l'ID de l'utilisateur authentifié
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->back();
    }
}
