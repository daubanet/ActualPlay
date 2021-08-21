<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Http\Resources\Admin\PlayerResource;
use App\Models\Player;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlayerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('player_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PlayerResource(Player::with(['skill'])->get());
    }

    public function store(StorePlayerRequest $request)
    {
        $player = Player::create($request->validated());
        $player->skill()->sync($request->input('skill', []));

        return (new PlayerResource($player))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Player $player)
    {
        abort_if(Gate::denies('player_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PlayerResource($player->load(['skill']));
    }

    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $player->update($request->validated());
        $player->skill()->sync($request->input('skill', []));

        return (new PlayerResource($player))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Player $player)
    {
        abort_if(Gate::denies('player_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $player->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
