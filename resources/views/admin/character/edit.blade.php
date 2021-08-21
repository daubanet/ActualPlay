@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.character.title_singular') }}:
                    {{ trans('cruds.character.fields.id') }}
                    {{ $character->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('character.edit', [$character])
        </div>
    </div>
</div>
@endsection