<?php

namespace App\Http\Controllers;

use App\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function search(){

    }

    public function store(Request $request)
    {
        $playlist = new Playlist();

        $playlist->name=$request->get('nombre');
        $playlist->description=$request->get('descripcion');

        if($request->get('visibilidad')=='Privada')
            $playlist->visibility='0';
        else
            $playlist->visibility='1';

        $playlist->visibility=$request->get('visibilidad');
        $playlist->save();

        if($request->hasFile('imagen-0')){
            $file = $request->file('imagen-0');
            $image = $playlist->id . '_img.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/playlists/';
            $file->move($path, $image);
            $playlist->image = $image;
            $playlist->save();
        }

    }

}
