<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuotesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {	

        $filters = $request->all();
        //$evals = Evaluation::getEvaluationsFiltered($filters, $specialty);
        //cambiar de estado a las expiradas

        $quotes = [];

        $data = [
        	'quotes'    =>  $quotes,
        ];

        return view('pages.quotes.index', $data);

    }

    public function create(Request $request)
    {
        $filters = $request->all();

        $quotes = [];

        $data = [
            'quotes'    =>  $quotes,
        ];
        return view('pages.quotes.create', $data);
    }

}
