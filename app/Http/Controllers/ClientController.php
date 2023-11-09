<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Session;
use App\User;
use App\Client;
use App\Nurse;
use App\Service;
use App\Appointment;
use App\Invoice;
use App\Refer;
use Carbon\Carbon;
use Hash;

class ClientController extends Controller
{
    public function clients()
    {

        return view('clients');
    }
}
