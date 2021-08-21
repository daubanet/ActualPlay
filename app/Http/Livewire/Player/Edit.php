<?php

namespace App\Http\Livewire\Player;

use App\Models\Player;
use App\Models\Skill;
use Livewire\Component;

class Edit extends Component
{
    public Player $player;

    public array $skill = [];

    public array $listsForFields = [];

    public function mount(Player $player)
    {
        $this->player = $player;
        $this->skill  = $this->player->skill()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.player.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->player->save();
        $this->player->skill()->sync($this->skill);

        return redirect()->route('admin.players.index');
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

    protected function initListsForFields(): void
    {
        $this->listsForFields['skill'] = Skill::pluck('name', 'id')->toArray();
    }
}
