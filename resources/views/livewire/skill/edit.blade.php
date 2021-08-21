<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('skill.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.skill.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="skill.name">
        <div class="validation-message">
            {{ $errors->first('skill.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.skill.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skill.value') ? 'invalid' : '' }}">
        <label class="form-label required" for="value">{{ trans('cruds.skill.fields.value') }}</label>
        <input class="form-control" type="number" name="value" id="value" required wire:model.defer="skill.value" step="1">
        <div class="validation-message">
            {{ $errors->first('skill.value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.skill.fields.value_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skill.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.skill.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model.defer="skill.description">
        <div class="validation-message">
            {{ $errors->first('skill.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.skill.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skill.start') ? 'invalid' : '' }}">
        <label class="form-label" for="start">{{ trans('cruds.skill.fields.start') }}</label>
        <input class="form-control" type="number" name="start" id="start" wire:model.defer="skill.start" step="1">
        <div class="validation-message">
            {{ $errors->first('skill.start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.skill.fields.start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skill.is_checked') ? 'invalid' : '' }}">
        <label class="form-label" for="is_checked">{{ trans('cruds.skill.fields.is_checked') }}</label>
        <input class="form-control" type="checkbox" name="is_checked" id="is_checked" wire:model.defer="skill.is_checked">
        <div class="validation-message">
            {{ $errors->first('skill.is_checked') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.skill.fields.is_checked_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>