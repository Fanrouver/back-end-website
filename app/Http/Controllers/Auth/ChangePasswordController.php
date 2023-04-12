<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePasswordForm()
    {
        $title = __('changePassword.changePassword');
        return view('auth.changePasswordForm')->with(compact([
            'title'
        ]));
    }

    public function changePassword(Request $request)
    {
        $request->validate(array(
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed|different:current_password',
        ));

        $user = Auth::user();

        // check if current_password is not same with data in database
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('status-danger', __('changePassword.invalidCurrentPassword'));
        }

        // if success change password in users collections, go change password in users collection
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::logout();
        return redirect()->route('login')->with('status-success', __('changePassword.changePasswordSuccess'));
    }
}
