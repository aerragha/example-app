<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;

class LogoutController extends BaseController
{
    /**
     * Logout api
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if (auth()->user()) {
            auth()->user()->tokens()->delete();
            return $this->sendResponse(null, 'You are logged out.');
        } else return $this->sendError('You are not logged in');
    }
}
