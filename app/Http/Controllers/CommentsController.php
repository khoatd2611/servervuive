<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    //
    function showAllComment($id)
    {
        $comment = DB::table('comments')
            ->where('article_id', '=', $id)
            ->get();

        return sizeof( $comment ) ? $comment : response(["Cant find any comments"], 404);
    }
    // function showCommentForPost ($id = null) {
    //     return $id ? comments::find($id) : comments::all();
    // }
    function addComment(Request $req)
    {
        $comment = new comments();
        $comment->article_id = $req->article_id;
        $comment->text = $req->text;
        $comment->author = $req->author;

        $result = $comment->save();

        if ($result) {
            return [
                "result" => "Post comment successfully",
                "comments" => $comment,
            ];
        }
    }
}
