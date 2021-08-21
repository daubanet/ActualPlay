<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('game.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.game.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="game.name">
        <div class="validation-message">
            {{ $errors->first('game.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.start') ? 'invalid' : '' }}">
        <label class="form-label required" for="start">{{ trans('cruds.game.fields.start') }}</label>
        <x-date-picker class="form-control" required wire:model="game.start" id="start" name="start" />
        <div class="validation-message">
            {{ $errors->first('game.start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.start_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>