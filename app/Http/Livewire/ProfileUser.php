<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class ProfileUser extends Component
{
  public $users, $name, $email, $user_id;
  public $isOpen = 0;

  public function render()
  {
    $this->users = User::all();
    return view('livewire.profile-user');
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function create()
  {
    $this->resetInputFields();
    $this->openModal();
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function openModal()
  {
    $this->isOpen = true;
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function closeModal()
  {
    $this->isOpen = false;
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  private function resetInputFields(){
    $this->name = '';
    $this->email = '';
    $this->user_id = '';
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function store()
  {
    $this->validate([
      'name' => 'required',
      'email' => 'required',
    ]);

    User::updateOrCreate(['id' => $this->user_id], [
      'name' => $this->name,
      'email' => $this->email
    ]);

    session()->flash('message',
    $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');

    $this->closeModal();
    $this->resetInputFields();
  }
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function edit($id)
  {
    $user = User::findOrFail($id);
    $this->user_id = $id;
    $this->name = $user->name;
    $this->email = $user->email;

    $this->openModal();
  }

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  public function delete($id)
  {
    User::find($id)->delete();
    session()->flash('message', 'User Deleted Successfully.');
  }
}
