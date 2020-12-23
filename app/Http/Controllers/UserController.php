<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::whereNull('approved_at')->get();

    return view('users', compact('users'));
  }

  public function adminUsers()
  {
    $users = User::whereNotNull('approved_at')->get();

    return view('admin-users', compact('users'));
  }

  public function approve($user_id)
  {
    $user = User::findOrFail($user_id);
    $user->update(['approved_at' => now()]);

    return redirect()->route('admin.users.index')->withMessage('Aprobación realizada satisfactoriamente');
  }

  public function disapprove($user_id)
  {
    $user = User::findOrFail($user_id);
    $user->update(['approved_at' => null]);

    return redirect()->route('admin.users.index')->withMessage('Inhabilitación realizada satisfactoriamente]');
  }

  public function adminUser($user_id)
  {
    $user = User::findOrFail($user_id);

    return view('profile-user/show', compact('user'));
  }
}
