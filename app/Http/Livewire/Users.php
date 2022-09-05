<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $name, $email;
    public $frmFlag = false;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.users');
    }

    private function resetfrm(){
        $this->name = '';
        $this->email = '';
    }

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        User::create($validatedData);

        session()->flash('message', 'Inserted Successfully.');

        $this->resetfrm();

    }

    public function edit($id)
    {
        $this->frmFlag = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }

    public function cancel()
    {
        $this->frmFlag = false;
        $this->resetfrm();


    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->frmFlag = false;
            session()->flash('message', 'Updated Successfully.');
            $this->resetfrm();

        }
    }

    public function delete($id)
    {
            User::find($id)->delete();
            session()->flash('message', 'Deleted Successfully.');        
    }
}
