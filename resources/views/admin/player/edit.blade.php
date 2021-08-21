@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.player.title_singular') }}:
                    {{ trans('cruds.player.fields.id') }}
                    {{ $player->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('player.edit', [$player])
        </div>
    </div>
</div>
@endsection