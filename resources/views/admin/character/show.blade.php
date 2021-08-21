@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.character.title_singular') }}:
                    {{ trans('cruds.character.fields.id') }}
                    {{ $character->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.character.fields.id') }}
                            </th>
                            <td>
                                {{ $character->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.character.fields.name') }}
                            </th>
                            <td>
                                {{ $character->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('character_edit')
                    <a href="{{ route('admin.characters.edit', $character) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.characters.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection