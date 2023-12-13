<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function create()
    {

        return view('auth.login');
    }

    // LoginController.php

    // LoginController.php

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ])->withInput();
        } else {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('hirer.landingpage'); // Redirect to the landing page
            }
        }
    }



    public function destroy()
    {

        auth()->logout();

        return redirect()->to('/');
    }
}
