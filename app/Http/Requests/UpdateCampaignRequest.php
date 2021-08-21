<?php

namespace App\Http\Requests;

use App\Models\Campaign;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCampaignRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('campaign_edit');
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
            'game' => [
                'array',
            ],
            'game.*.id' => [
                'integer',
                'exists:games,id',
            ],
        ];
    }
}
