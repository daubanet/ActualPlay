<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Resources\Admin\CharacterResource;
use App\Models\Character;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CharacterApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('character_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CharacterResource(Character::all());
    }

    public function store(StoreCharacterRequest $request)
    {
        $character = Character::create($request->validated());

        return (new CharacterResource($character))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Character $character)
    {
        abort_if(Gate::denies('character_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CharacterResource($character);
    }

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $character->update($request->validated());

        return (new CharacterResource($character))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Character $character)
    {
        abort_if(Gate::denies('character_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $character->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
