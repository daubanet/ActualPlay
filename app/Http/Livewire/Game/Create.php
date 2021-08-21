<?php

namespace App\Http\Livewire\Game;

use App\Models\Game;
use Livewire\Component;

class Create extends Component
{
    public Game $game;

    public function mount(Game $game)
    {
        $this->game = $game;
    }

    public function render()
    {
        return view('livewire.game.create');
    }

    public function submit()
    {
        $this->validate();

        $this->game->save();

        return redirect()->route('admin.games.index');
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
