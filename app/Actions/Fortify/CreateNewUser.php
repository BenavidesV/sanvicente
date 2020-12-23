<?php

namespace App\Actions\Fortify;

use App\Notifications\NewUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Notifications\Notification;

class CreateNewUser implements CreatesNewUsers
{
  use PasswordValidationRules;

  /**
  * Validate and create a newly registered user.
  *
  * @param  array  $input
  * @return \App\Models\User
  */
  public function create(array $input)
  {
    Validator::make($input, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'identification' => ['required'],
      'password' => $this->passwordRules(),
      ])->validate();
      
      $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'identification' => $input['identification'],
        'address' => $input['address'],
        'phone' => $input['phone'],
        'social_network_1' => $input['social_network_1'],
        'social_network_2' => $input['social_network_2'],
        'social_network_3' => $input['social_network_3'],
        'social_network_4' => $input['social_network_4'],
        'password' => Hash::make($input['password']),
      ]);

      $admin = User::where('admin', 1)->latest()->first();
      if ($admin) {
        $admin->notify(new NewUser($user));
      }

      return $user;


    }
  }
