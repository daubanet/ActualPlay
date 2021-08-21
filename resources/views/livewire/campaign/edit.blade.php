<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('campaign.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.campaign.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="campaign.name">
        <div class="validation-message">
            {{ $errors->first('campaign.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('campaign.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.campaign.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model.defer="campaign.description">
        <div class="validation-message">
            {{ $errors->first('campaign.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.campaign_photo') ? 'invalid' : '' }}">
        <label class="form-label" for="photo">{{ trans('cruds.campaign.fields.photo') }}</label>
        <x-dropzone id="photo" name="photo" action="{{ route('admin.campaigns.storeMedia') }}" collection-name="campaign_photo" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.campaign_photo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.photo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('campaign.start') ? 'invalid' : '' }}">
        <label class="form-label required" for="start">{{ trans('cruds.campaign.fields.start') }}</label>
        <x-date-picker class="form-control" required wire:model="campaign.start" id="start" name="start" picker="date" />
        <div class="validation-message">
            {{ $errors->first('campaign.start') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.start_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('campaign.end') ? 'invalid' : '' }}">
        <label class="form-label" for="end">{{ trans('cruds.campaign.fields.end') }}</label>
        <x-date-picker class="form-control" wire:model="campaign.end" id="end" name="end" picker="date" />
        <div class="validation-message">
            {{ $errors->first('campaign.end') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.end_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game') ? 'invalid' : '' }}">
        <label class="form-label" for="game">{{ trans('cruds.campaign.fields.game') }}</label>
        <x-select-list class="form-control" id="game" name="game" wire:model="game" :options="$this->listsForFields['game']" multiple />
        <div class="validation-message">
            {{ $errors->first('game') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.campaign.fields.game_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.campaigns.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>