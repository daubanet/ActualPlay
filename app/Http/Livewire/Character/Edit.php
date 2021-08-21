<?php

namespace App\Http\Livewire\Character;

use App\Models\Character;
use Livewire\Component;

class Edit extends Component
{
    public Character $character;

    public function mount(Character $character)
    {
        $this->character = $character;
    }

    public function render()
    {
        return view('livewire.character.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->character->save();

        return redirect()->route('admin.characters.index');
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
