<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proofs;
use App\Comments;
use App\Bets;

class HomeController extends Controller
{

    public function index()
    {
        $comments = Comments::where('type',true)->get();
        $proofs = Proofs::where('type',true)->get();
        $bets = Bets::select('title','price','description')->get();

        return view('welcome',compact('proofs','comments','bets'));
    }


    public function commentAdd(Request $request)
    {
        $data = $request->all();

        if ($request->isMethod('post')) {
            if ($request->hasFile('image')) {
                $fileImage = $request->file('image');
                $filenameImage = $fileImage->getClientOriginalName();
                $fileImage->move(public_path() . '/images', $filenameImage);
                $proofs = new Proofs;
                $proofs->img = $filenameImage;
                $proofs->save();
            }
        }
// mail("joecool@example.com", "My Subject", "Line 1\nLine 2\nLine 3");
        if(!empty($data)) {
            $comment = new Comments;
            $comment->name = $data['name'];
            $comment->email = $data['email'];
            $comment->comment = $data['comment'];
            $comment->save();
            $mailto = "support@green-bets.com";
            $subject = "New comment!";
            $comment = "<meta charset='utf-8'>".$data['comment'];
            mail($mailto,$subject,$comment);
            return back()->with('status','Комментарий успешно отправлен, и вскоре будет отображен!');
        }

    }

}
