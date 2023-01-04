<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Log;

use function Psy\debug;

class UserController extends Controller
{
    public function index(string $name = null): string
    {
        $users = User::all();

        if ($name) {
            $users = $users->filter(fn(User $user) => $user->name === $name);
        }

        Log::debug('Name: ' . $name);

        return view('users.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create(
            $request->name,
            $request->email,
            Hash::make($request->password)
        );

        return redirect()->route('users.index');
    }
}
