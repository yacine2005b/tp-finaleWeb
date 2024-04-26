<?php

namespace App\Http\Controllers;

use App\Models\Affichage;
use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Affichage $affichage){

$comment = new comment();
$comment->affichage_id = $affichage->id;
$comment->user_id=auth()->id();
$comment->content =request()->get('comment');
$comment->save();

return redirect()->route('affichages.show',$affichage->id)->with('success','comment posted succefully');
    }
}
