<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('player.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.player.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="player.name">
        <div class="validation-message">
            {{ $errors->first('player.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.sex') ? 'invalid' : '' }}">
        <label class="form-label" for="sex">{{ trans('cruds.player.fields.sex') }}</label>
        <input class="form-control" type="text" name="sex" id="sex" wire:model.defer="player.sex">
        <div class="validation-message">
            {{ $errors->first('player.sex') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.sex_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.occupation') ? 'invalid' : '' }}">
        <label class="form-label" for="occupation">{{ trans('cruds.player.fields.occupation') }}</label>
        <input class="form-control" type="text" name="occupation" id="occupation" wire:model.defer="player.occupation">
        <div class="validation-message">
            {{ $errors->first('player.occupation') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.occupation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.age') ? 'invalid' : '' }}">
        <label class="form-label" for="age">{{ trans('cruds.player.fields.age') }}</label>
        <input class="form-control" type="text" name="age" id="age" wire:model.defer="player.age">
        <div class="validation-message">
            {{ $errors->first('player.age') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.age_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.income') ? 'invalid' : '' }}">
        <label class="form-label" for="income">{{ trans('cruds.player.fields.income') }}</label>
        <input class="form-control" type="text" name="income" id="income" wire:model.defer="player.income">
        <div class="validation-message">
            {{ $errors->first('player.income') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.income_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.savings') ? 'invalid' : '' }}">
        <label class="form-label" for="savings">{{ trans('cruds.player.fields.savings') }}</label>
        <input class="form-control" type="text" name="savings" id="savings" wire:model.defer="player.savings">
        <div class="validation-message">
            {{ $errors->first('player.savings') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.savings_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.nationality') ? 'invalid' : '' }}">
        <label class="form-label" for="nationality">{{ trans('cruds.player.fields.nationality') }}</label>
        <input class="form-control" type="text" name="nationality" id="nationality" wire:model.defer="player.nationality">
        <div class="validation-message">
            {{ $errors->first('player.nationality') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.nationality_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.residence') ? 'invalid' : '' }}">
        <label class="form-label" for="residence">{{ trans('cruds.player.fields.residence') }}</label>
        <input class="form-control" type="text" name="residence" id="residence" wire:model.defer="player.residence">
        <div class="validation-message">
            {{ $errors->first('player.residence') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.residence_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.str') ? 'invalid' : '' }}">
        <label class="form-label" for="str">{{ trans('cruds.player.fields.str') }}</label>
        <input class="form-control" type="number" name="str" id="str" wire:model.defer="player.str" step="1">
        <div class="validation-message">
            {{ $errors->first('player.str') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.str_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.dex') ? 'invalid' : '' }}">
        <label class="form-label" for="dex">{{ trans('cruds.player.fields.dex') }}</label>
        <input class="form-control" type="number" name="dex" id="dex" wire:model.defer="player.dex" step="1">
        <div class="validation-message">
            {{ $errors->first('player.dex') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.dex_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.int') ? 'invalid' : '' }}">
        <label class="form-label" for="int">{{ trans('cruds.player.fields.int') }}</label>
        <input class="form-control" type="number" name="int" id="int" wire:model.defer="player.int" step="1">
        <div class="validation-message">
            {{ $errors->first('player.int') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.int_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.idea') ? 'invalid' : '' }}">
        <label class="form-label" for="idea">{{ trans('cruds.player.fields.idea') }}</label>
        <input class="form-control" type="number" name="idea" id="idea" wire:model.defer="player.idea" step="1">
        <div class="validation-message">
            {{ $errors->first('player.idea') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.idea_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.con') ? 'invalid' : '' }}">
        <label class="form-label" for="con">{{ trans('cruds.player.fields.con') }}</label>
        <input class="form-control" type="number" name="con" id="con" wire:model.defer="player.con" step="1">
        <div class="validation-message">
            {{ $errors->first('player.con') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.con_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.app') ? 'invalid' : '' }}">
        <label class="form-label" for="app">{{ trans('cruds.player.fields.app') }}</label>
        <input class="form-control" type="number" name="app" id="app" wire:model.defer="player.app" step="1">
        <div class="validation-message">
            {{ $errors->first('player.app') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.app_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.pow') ? 'invalid' : '' }}">
        <label class="form-label" for="pow">{{ trans('cruds.player.fields.pow') }}</label>
        <input class="form-control" type="number" name="pow" id="pow" wire:model.defer="player.pow" step="1">
        <div class="validation-message">
            {{ $errors->first('player.pow') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.pow_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.luck') ? 'invalid' : '' }}">
        <label class="form-label" for="luck">{{ trans('cruds.player.fields.luck') }}</label>
        <input class="form-control" type="number" name="luck" id="luck" wire:model.defer="player.luck" step="1">
        <div class="validation-message">
            {{ $errors->first('player.luck') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.luck_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.siz') ? 'invalid' : '' }}">
        <label class="form-label" for="siz">{{ trans('cruds.player.fields.siz') }}</label>
        <input class="form-control" type="number" name="siz" id="siz" wire:model.defer="player.siz" step="1">
        <div class="validation-message">
            {{ $errors->first('player.siz') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.siz_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.san') ? 'invalid' : '' }}">
        <label class="form-label" for="san">{{ trans('cruds.player.fields.san') }}</label>
        <input class="form-control" type="number" name="san" id="san" wire:model.defer="player.san" step="1">
        <div class="validation-message">
            {{ $errors->first('player.san') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.san_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.edu') ? 'invalid' : '' }}">
        <label class="form-label" for="edu">{{ trans('cruds.player.fields.edu') }}</label>
        <input class="form-control" type="number" name="edu" id="edu" wire:model.defer="player.edu" step="1">
        <div class="validation-message">
            {{ $errors->first('player.edu') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.edu_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.know') ? 'invalid' : '' }}">
        <label class="form-label" for="know">{{ trans('cruds.player.fields.know') }}</label>
        <input class="form-control" type="number" name="know" id="know" wire:model.defer="player.know" step="1">
        <div class="validation-message">
            {{ $errors->first('player.know') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.know_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.schools') ? 'invalid' : '' }}">
        <label class="form-label" for="schools">{{ trans('cruds.player.fields.schools') }}</label>
        <input class="form-control" type="text" name="schools" id="schools" wire:model.defer="player.schools">
        <div class="validation-message">
            {{ $errors->first('player.schools') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.schools_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.degrees') ? 'invalid' : '' }}">
        <label class="form-label" for="degrees">{{ trans('cruds.player.fields.degrees') }}</label>
        <input class="form-control" type="text" name="degrees" id="degrees" wire:model.defer="player.degrees">
        <div class="validation-message">
            {{ $errors->first('player.degrees') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.degrees_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('player.damage') ? 'invalid' : '' }}">
        <label class="form-label" for="damage">{{ trans('cruds.player.fields.damage') }}</label>
        <input class="form-control" type="text" name="damage" id="damage" wire:model.defer="player.damage">
        <div class="validation-message">
            {{ $errors->first('player.damage') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.damage_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('skill') ? 'invalid' : '' }}">
        <label class="form-label" for="skill">{{ trans('cruds.player.fields.skill') }}</label>
        <x-select-list class="form-control" id="skill" name="skill" wire:model="skill" :options="$this->listsForFields['skill']" multiple />
        <div class="validation-message">
            {{ $errors->first('skill') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.player.fields.skill_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.players.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>