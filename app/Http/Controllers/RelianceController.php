<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class RelianceController extends Controller

{


public function index()
{
    return view('welcome');
}



public function features()
{

    return view('features');
}

public function integrations()

{

    return view ('integrations');

}

public function support()

{

    return view ('support');

}


public function employee()

{

    return view ('login');

}


public function HR()

{

    return view ('login');

}

public function Admin()

{

    return view ('login');

}

public function register ()

{

    return view ('register');

}


}

