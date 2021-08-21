<?php

namespace App\Http\Requests;

use App\Models\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateGameRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('game_edit');
    }

    protected function rules(): array
    {
        return [
            'game.name' => [
                'string',
                'required',
            ],
            'game.start' => [
                'required',
                'date_format:' . config('project.datetime_format'),
            ],
            'game.campaign_id' => [
                'integer',
                'exists:campaigns,id',
                'nullable',
            ],
        ];
    }
}
