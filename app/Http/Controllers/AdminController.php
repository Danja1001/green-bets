<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proofs;
use App\Comments;
use App\Bets;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }


    public function storeProofs(Request $request)
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
                return back()->with('status','Proofs added!');
            }
            return back()->with('status','ERROR!');
        }
    }


    public function showComments() {
        $comments = Comments::select('id','name','email','comment','type')->get();
        if(!empty($comments)) {
            return view('admin.comments',compact('comments'))->with('status','Отображены комментарии - ');
        }
        return view('admin.comments')->with('status','Empty comments table.');
    }


    public function publishComment($id) {
        $comment = Comments::find($id);
        if(!empty($comment)) {
            $comment->type=true;
            $comment->update();
            return back()->with('status','Отображен комментарий - '.$id.' ,пользователя - '.$comment->name);
        }
        return back()->with('status','Error!');
    }


    public function UnPublishComment($id) {
        $comment = Comments::find($id);
        if(!empty($comment)) {
            $comment->type=false;
            $comment->update();
            return back()->with('status','Отключен комментарий - '.$id.' ,пользователя - '.$comment->name);
        }
        return back()->with('status','Error!');
    }


    public function showProofs() {
        $proofs = Proofs::select('id','img','type')->get();
        if(!empty($proofs))
            return view('admin.proofs',compact('proofs'));
        return view('404');
    }


    public function publishProofs($id) {
        $proofs = Proofs::find($id);
        if(!empty($proofs)) {
            $proofs->type = true;
            $proofs->update();
            return back()->with('status','Отображен пруф - '.$id);
        }
        return back()->with('status','Error!');
    }


    public function UnPublishProofs($id) {
        $proofs = Proofs::find($id);
        if(!empty($proofs)) {
            $proofs->type = false;
            $proofs->update();
            return back()->with('status','Скрыт пруф - '.$id);
        }
        return back()->with('status','Error!');
    }


    public function addBet() {
        return view('admin.addbet');
    }


    public function storeBet(Request $request) {
        $data = $request->all();
        if(!empty($data)) {
            $bet = new Bets;
            $bet->title = $data['title'];
            $bet->price = $data['price'];
            $bet->description = $data['description'];
            $bet->save();
            return back()->with('status','Ставка '.$data['title'].' успешно добавлена!');
        }
        return back()->with('status','Error!');
    }


    public function bets() {
        $bets = Bets::select('id','title','price','description')->get();
        if(!empty($bets))
            return view('admin.bets',compact('bets'));
        return view('404');
    }


    public function delBet($id) {
        $bet = Bets::find($id);
       // dd($bet);
        return back()->with('status','Ставка - '.$bet->title.' удалена!');
    }


    public function updateBet(Request $request,$id) {
        $bet = Bets::find($id);
        $data = $request->all();
        if(!empty($bet) && !empty($data)) {
            $bet->title = $data['title'];
            $bet->price = $data['price'];
            $bet->description = $data['description'];
            $bet->save();
            return back()->with('status','Ставка '.$bet->title.' обновлена!');
        }
        return back()->with('status','Error!');
    }

}
