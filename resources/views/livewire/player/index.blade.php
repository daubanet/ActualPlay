<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('player_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Player" format="csv" />
                <livewire:excel-export model="Player" format="xlsx" />
                <livewire:excel-export model="Player" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.player.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.sex') }}
                            @include('components.table.sort', ['field' => 'sex'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.occupation') }}
                            @include('components.table.sort', ['field' => 'occupation'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.age') }}
                            @include('components.table.sort', ['field' => 'age'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.income') }}
                            @include('components.table.sort', ['field' => 'income'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.savings') }}
                            @include('components.table.sort', ['field' => 'savings'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.nationality') }}
                            @include('components.table.sort', ['field' => 'nationality'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.residence') }}
                            @include('components.table.sort', ['field' => 'residence'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.str') }}
                            @include('components.table.sort', ['field' => 'str'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.dex') }}
                            @include('components.table.sort', ['field' => 'dex'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.int') }}
                            @include('components.table.sort', ['field' => 'int'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.idea') }}
                            @include('components.table.sort', ['field' => 'idea'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.con') }}
                            @include('components.table.sort', ['field' => 'con'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.app') }}
                            @include('components.table.sort', ['field' => 'app'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.pow') }}
                            @include('components.table.sort', ['field' => 'pow'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.luck') }}
                            @include('components.table.sort', ['field' => 'luck'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.siz') }}
                            @include('components.table.sort', ['field' => 'siz'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.san') }}
                            @include('components.table.sort', ['field' => 'san'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.edu') }}
                            @include('components.table.sort', ['field' => 'edu'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.know') }}
                            @include('components.table.sort', ['field' => 'know'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.schools') }}
                            @include('components.table.sort', ['field' => 'schools'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.degrees') }}
                            @include('components.table.sort', ['field' => 'degrees'])
                        </th>
                        <th>
                            {{ trans('cruds.player.fields.damage') }}
                            @include('components.table.sort', ['field' => 'damage'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($players as $player)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $player->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $player->id }}
                            </td>
                            <td>
                                {{ $player->name }}
                            </td>
                            <td>
                                {{ $player->sex }}
                            </td>
                            <td>
                                {{ $player->occupation }}
                            </td>
                            <td>
                                {{ $player->age }}
                            </td>
                            <td>
                                {{ $player->income }}
                            </td>
                            <td>
                                {{ $player->savings }}
                            </td>
                            <td>
                                {{ $player->nationality }}
                            </td>
                            <td>
                                {{ $player->residence }}
                            </td>
                            <td>
                                {{ $player->str }}
                            </td>
                            <td>
                                {{ $player->dex }}
                            </td>
                            <td>
                                {{ $player->int }}
                            </td>
                            <td>
                                {{ $player->idea }}
                            </td>
                            <td>
                                {{ $player->con }}
                            </td>
                            <td>
                                {{ $player->app }}
                            </td>
                            <td>
                                {{ $player->pow }}
                            </td>
                            <td>
                                {{ $player->luck }}
                            </td>
                            <td>
                                {{ $player->siz }}
                            </td>
                            <td>
                                {{ $player->san }}
                            </td>
                            <td>
                                {{ $player->edu }}
                            </td>
                            <td>
                                {{ $player->know }}
                            </td>
                            <td>
                                {{ $player->schools }}
                            </td>
                            <td>
                                {{ $player->degrees }}
                            </td>
                            <td>
                                {{ $player->damage }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('player_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.players.show', $player) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('player_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.players.edit', $player) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('player_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $player->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $players->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush