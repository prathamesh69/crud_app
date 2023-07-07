<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryRequest;
use App\Models\Entry;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('operations.entries');
    }

    public function create(){
        return view('operations.add_entries');
    }

    public function save_entries(Request $request){
        $entry = new Entry;
        $entry->user_id = 1;
        $entry->account_type = $request->acc_type;
        $entry->narration = $request->narration;
        $entry->currency = $request->user_currency;
        $entry->transaction_type = $request->txn_type;
        $entry->save();

        return redirect('/entries/create');
    }

}
