<?php

namespace App\Http\Controllers\Worksheet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainWorksheetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        return view('user.worksheet.index');
    }

    public function aboutEditForm()
    {
        return view('user.worksheet.about');
    }

    public function aboutEdit()
    {

    }
}
