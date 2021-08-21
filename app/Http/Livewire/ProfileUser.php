<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class ProfileUser extends Component
{
  public $users, $name, $email, $user_id, $password, $identification,$address,
  $phone,$social_network_1, $social_network_2, $social_network_3,
  $social_network_4, $hashtag;
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
    $this->identification = '';
    $this->address = '';
    $this->phone = '';
    $this->social_network_1 = '';
    $this->social_network_2 = '';
    $this->social_network_3 = '';
    $this->social_network_4 = '';
    $this->hashtag = '';
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
      'social_network_1'=>'nullable',
    ]);

    User::updateOrCreate(['id' => $this->user_id], [
      'name' => $this->name,
      'email' => $this->email,
      'address' => $this->address,
      'identification' => $this->identification,
      'phone' => $this->phone,
      'social_network_1' => $this->social_network_1,
      'social_network_2' => $this->social_network_2,
      'social_network_3' => $this->social_network_3,
      'social_network_4' => $this->social_network_4,
      'history' => $this->history,
      'hashtag' => $this->hashtag,
    ]);

    session()->flash('message',
    $this->user_id ? 'Usuario actualizado satisfactoriamente.' : 'Usuario creado satisfactoriamente.');

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
    $this->identification = $user->identification;
    $this->address = $user->address;
    $this->phone = $user->phone;
    $this->social_network_1 = $user->social_network_1;
    $this->social_network_2 = $user->social_network_2;
    $this->social_network_3 = $user->social_network_3;
    $this->social_network_4 = $user->social_network_4;
    $this->history = $user->history;
    $this->hashtag = $user->hashtag;

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
    session()->flash('message', 'Usuario eliminado satisfactoriamente.');
  }
}
