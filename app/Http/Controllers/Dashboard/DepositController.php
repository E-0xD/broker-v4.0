<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Payment\PaymentProcessorController;
use App\Http\Requests\DepositRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DepositController extends Controller
{

    private $PaymentProcessor;

    public function __construct()
    {
        $this->PaymentProcessor = new PaymentProcessorController();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.deposit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepositRequest $request)
    {

        try {
            ['redirectUrl' => $redirectUrl] = $this->PaymentProcessor->create([
                'amount' => $request->amount,
                'details' => [
                    'user_id' => Auth::id(),
                    'status' => TransactionStatus::PENDING,
                    'type' => TransactionType::DEPOSIT,
                ],
                'cancel_url' => 'deposit.create',
                'success_url' => 'deposit.callback'
            ]);

            return redirect($redirectUrl);
        } catch (\Throwable $th) {
            return redirect()->route('deposit.create');
        }
    }


    public function callback(Request $request)
    {

        try {
            ['amount' => $amount] = $this->PaymentProcessor->validate($request);

            User::where('id', Auth::id())->increment('balance', $amount);

            Alert::success('Success', 'Deposit Successful');
            
            return redirect()->route('dashboard');

        } catch (\Throwable $th) {
            return redirect()->route('deposit.create');
        }
    }
}
