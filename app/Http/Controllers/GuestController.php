<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Book;
use Laratrust\LaratrustFacade as Laratrust;

class GuestController extends Controller
{
    //
    public function index(Request $request,Builder $htmlBuilder)
    {
    	if ($request->ajax()) {
    		# code...
    		$books=Book::with('author');
    		return Datatables::
    	}
    }
}
