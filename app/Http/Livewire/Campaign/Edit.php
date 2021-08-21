<?php

namespace App\Http\Livewire\Campaign;

use App\Models\Campaign;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Campaign $campaign;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];

    public function mount(Campaign $campaign)
    {
        $this->campaign         = $campaign;
        $this->mediaCollections = [
            'campaign_photo' => $campaign->photo,
        ];
    }

    public function render()
    {
        return view('livewire.campaign.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->campaign->save();
        $this->syncMedia();

        return redirect()->route('admin.campaigns.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'campaign.name' => [
                'string',
                'required',
            ],
            'campaign.description' => [
                'string',
                'nullable',
            ],
            'mediaCollections.campaign_photo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.campaign_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'campaign.start' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'campaign.end' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->campaign->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
