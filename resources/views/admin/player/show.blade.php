@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.player.title_singular') }}:
                    {{ trans('cruds.player.fields.id') }}
                    {{ $player->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.id') }}
                            </th>
                            <td>
                                {{ $player->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.name') }}
                            </th>
                            <td>
                                {{ $player->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.sex') }}
                            </th>
                            <td>
                                {{ $player->sex }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.occupation') }}
                            </th>
                            <td>
                                {{ $player->occupation }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.age') }}
                            </th>
                            <td>
                                {{ $player->age }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.income') }}
                            </th>
                            <td>
                                {{ $player->income }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.savings') }}
                            </th>
                            <td>
                                {{ $player->savings }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.nationality') }}
                            </th>
                            <td>
                                {{ $player->nationality }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.residence') }}
                            </th>
                            <td>
                                {{ $player->residence }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.str') }}
                            </th>
                            <td>
                                {{ $player->str }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.dex') }}
                            </th>
                            <td>
                                {{ $player->dex }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.int') }}
                            </th>
                            <td>
                                {{ $player->int }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.idea') }}
                            </th>
                            <td>
                                {{ $player->idea }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.con') }}
                            </th>
                            <td>
                                {{ $player->con }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.app') }}
                            </th>
                            <td>
                                {{ $player->app }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.pow') }}
                            </th>
                            <td>
                                {{ $player->pow }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.luck') }}
                            </th>
                            <td>
                                {{ $player->luck }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.siz') }}
                            </th>
                            <td>
                                {{ $player->siz }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.san') }}
                            </th>
                            <td>
                                {{ $player->san }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.edu') }}
                            </th>
                            <td>
                                {{ $player->edu }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.know') }}
                            </th>
                            <td>
                                {{ $player->know }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.schools') }}
                            </th>
                            <td>
                                {{ $player->schools }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.degrees') }}
                            </th>
                            <td>
                                {{ $player->degrees }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.player.fields.damage') }}
                            </th>
                            <td>
                                {{ $player->damage }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('player_edit')
                    <a href="{{ route('admin.players.edit', $player) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.players.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection