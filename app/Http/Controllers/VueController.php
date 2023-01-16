<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Log;

use Illuminate\View\View;

use function Psy\debug;

class VueController extends Controller
{
    public function index(): string
    {
        return view('vue.index');
    }
}
