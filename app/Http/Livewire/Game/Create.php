<?php

namespace App\Http\Livewire\Game;

use App\Models\Campaign;
use App\Models\Game;
use Livewire\Component;

class Create extends Component
{
    public Game $game;

    public array $listsForFields = [];

    public function mount(Game $game)
    {
        $this->game = $game;
        $this->initListsForFields();
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
            'game.campaign_id' => [
                'integer',
                'exists:campaigns,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['campaign'] = Campaign::pluck('name', 'id')->toArray();
    }
}
