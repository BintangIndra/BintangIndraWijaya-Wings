<?php

namespace App\Http\Controllers;

use App\Models\transaction_detail;
use App\Http\Requests\Storetransaction_detailRequest;
use App\Http\Requests\Updatetransaction_detailRequest;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetransaction_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetransaction_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction_detail  $transaction_detail
     * @return \Illuminate\Http\Response
     */
    public function show(transaction_detail $transaction_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction_detail  $transaction_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction_detail $transaction_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetransaction_detailRequest  $request
     * @param  \App\Models\transaction_detail  $transaction_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetransaction_detailRequest $request, transaction_detail $transaction_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction_detail  $transaction_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction_detail $transaction_detail)
    {
        //
    }
}
