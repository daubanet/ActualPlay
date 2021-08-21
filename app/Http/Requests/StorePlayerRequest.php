<?php

namespace App\Http\Requests;

use App\Models\Player;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePlayerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('player_create');
    }

    protected function rules(): array
    {
        return [
            'player.name' => [
                'string',
                'required',
            ],
            'player.sex' => [
                'string',
                'nullable',
            ],
            'player.occupation' => [
                'string',
                'nullable',
            ],
            'player.age' => [
                'string',
                'nullable',
            ],
            'player.income' => [
                'string',
                'nullable',
            ],
            'player.savings' => [
                'string',
                'nullable',
            ],
            'player.nationality' => [
                'string',
                'nullable',
            ],
            'player.residence' => [
                'string',
                'nullable',
            ],
            'player.str' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.dex' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.int' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.idea' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.con' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.app' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.pow' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.luck' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.siz' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.san' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.edu' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.know' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'player.schools' => [
                'string',
                'nullable',
            ],
            'player.degrees' => [
                'string',
                'nullable',
            ],
            'player.damage' => [
                'string',
                'nullable',
            ],
            'skill' => [
                'array',
            ],
            'skill.*.id' => [
                'integer',
                'exists:skills,id',
            ],
        ];
    }
}
