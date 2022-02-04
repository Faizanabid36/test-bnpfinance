<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function users()
    {
        $users =  User::whereHas('loans', function ($l) {
            return $l->whereHas('payments', function ($p) {
                return $p->whereDate('payment_date', Carbon::today());
            });
        })->with('loans')->get();

        sleep(10);

        return new UserCollection($users);
    }
}
