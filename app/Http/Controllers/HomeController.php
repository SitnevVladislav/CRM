<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *@param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $application = Transaction::where('statement','=','Application')->get();
        $negotiation = Transaction::where('statement','=','Negotiation')->get();
        $completed = Transaction::where('statement','=','Completed')->get();
        return view('home',compact('application','negotiation','completed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        Transaction::create($request->all());

        return Redirect::to('home');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $tr=Transaction::find($id);
        return view('home.edit',compact('tr'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {


        $transaction = Transaction::find($id);

        $transaction->statement = $request->get('statement');
        $transaction->transaction_name = $request->get('transaction_name');
        $transaction->transaction_amount = $request->get('transaction_amount');
        $transaction->terms = $request->get('terms');
        $transaction->open_date = $request->get('open_date');
        $transaction->save();

        return Redirect::to('home');
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();

        return redirect()->route('home.index');
    }

}
