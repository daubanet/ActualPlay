<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CharacterController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('character_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.character.index');
    }

    public function create()
    {
        abort_if(Gate::denies('character_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.character.create');
    }

    public function edit(Character $character)
    {
        abort_if(Gate::denies('character_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.character.edit', compact('character'));
    }

    public function show(Character $character)
    {
        abort_if(Gate::denies('character_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.character.show', compact('character'));
    }
}
