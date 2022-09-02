<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends BaseController
{
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        // check the email
        $user = User::where('email', $request->email)->first();

        // check password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendError('Login failed: Bad credentials!', [], 401);
        }
     
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['user'] = $user;
        return $this->sendResponse($success, 'User login successfully.');
    }
}
