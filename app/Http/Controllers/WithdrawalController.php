<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Info;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WithdrawalController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $deposits=Deposit::all();
        $withdrawals=Withdrawal::all();*/
     $userAccountActivities=User::with(['deposits','withdrawals'])->where('id', Auth::user()->id)->first();

     $allWithdrawals=$allDeposits=0;

     foreach($userAccountActivities->deposits as $deposit){

         $allDeposits += $deposit->amount;

     }

     foreach($userAccountActivities->withdrawals as $withdrawal){
         $allWithdrawals += $withdrawal->amount;
     }

     $availableBalance= $allDeposits - $allWithdrawals;
     dd($availableBalance);


     return view('withdrawals', compact('deposits', 'withdrawals'));
    /* $amount=Withdrawal::all('amount');
     $X=$amount->sum('amount');
     dd($X);*/


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beneficiaries=Beneficiary::orderby('created_at', 'desc')->pluck('account_name', 'id')->all();
    /*   $beneficiaries=Beneficiary::pluck('account_name', 'id')->all();*/

       /*$beneficiaries = Beneficiary::all(['beneficiary_id', 'account_name'])->pluck('account_name', 'beneficiary_id');*/

        return view('/', compact('beneficiaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator=Validator::make($request->all(), [

            /*'amount'=>'required|integer|max:'.(int)Info::latest()->first()->total_balance,*/
            'beneficiary_id'=>'required',
            'description'=>'required|string|max:25'



        ]);
       /*  $info=info:: first();*/

        /*$withdrawal=WithdrawalController::where('id', $id)->first();
        $info=Info::where('id',$id)->first();
        $withdrawal->new_balance = $info->total_balance - $request->input('amount');*/

        /*$X=$withdrawals->info['total_balance'];*/

        $user=Auth::User();
        $withdrawals=[

//            'info_id'=> Info::latest()->first()->id,
            'description'=> $request->input('description'),
            'beneficiary_id'=> $request->input('beneficiary_id'),
            'amount'=> $request->input('amount'),
        ];









        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user->Withdrawals()->create($withdrawals) ;
            return redirect('/')->with('Success_Message', 'Transfer Successful');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       return view('withdrawal.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
