<?php

namespace App\Http\Requests;

use App\Models\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGameRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('game_create');
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
        ];
    }
}
