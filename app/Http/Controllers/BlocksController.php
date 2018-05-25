<?php

namespace App\Http\Controllers;

use App\Block;
use App\MusicianProfile;
use Illuminate\Http\Request;

class BlocksController extends Controller
{
    public function update(Request $request) {


        //Create new empty instance of content
        $content = new Block;

        //Request the input data and save/update it
        $content->text = $request->contents;
        $content->tab_id = $request->tabid;
        $content->type = $request->type;
        $content->save([$content]);

        return redirect($request->server('HTTP_REFERER'));
    }
}
