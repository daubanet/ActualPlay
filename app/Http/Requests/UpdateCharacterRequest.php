<?php

namespace App\Http\Requests;

use App\Models\Character;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCharacterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('character_edit');
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
