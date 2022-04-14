<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewModel;
use Auth;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $commentInfo            = $request->all();
        //die(var_dump($commentInfo));
        $commentInfo['user_id'] = Auth::id();
        ReviewModel::create($commentInfo);

        echo json_encode($commentInfo);
    }
}
