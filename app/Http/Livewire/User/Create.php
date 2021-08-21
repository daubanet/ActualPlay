<?php

namespace App\Http\Livewire\User;

use App\Models\Player;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    public array $roles = [];

    public array $player = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);
        $this->user->player()->sync($this->player);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'required',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'password' => [
                'string',
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'player' => [
                'array',
            ],
            'player.*.id' => [
                'integer',
                'exists:players,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles']  = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['player'] = Player::pluck('name', 'id')->toArray();
    }
}
