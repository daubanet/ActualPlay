@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.campaign.title_singular') }}:
                    {{ trans('cruds.campaign.fields.id') }}
                    {{ $campaign->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.id') }}
                            </th>
                            <td>
                                {{ $campaign->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.name') }}
                            </th>
                            <td>
                                {{ $campaign->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.description') }}
                            </th>
                            <td>
                                {{ $campaign->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.photo') }}
                            </th>
                            <td>
                                @foreach($campaign->photo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.start') }}
                            </th>
                            <td>
                                {{ $campaign->start }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.end') }}
                            </th>
                            <td>
                                {{ $campaign->end }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.campaign.fields.game') }}
                            </th>
                            <td>
                                @foreach($campaign->game as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('campaign_edit')
                    <a href="{{ route('admin.campaigns.edit', $campaign) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection