<?php

namespace App\Http\Requests;

use App\Models\Character;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCharacterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('character_create');
    }

    protected function rules(): array
    {
        return [
            'character.name' => [
                'string',
                'required',
            ],
        ];
    }
}
