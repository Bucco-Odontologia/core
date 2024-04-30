<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadStoreRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(LeadStoreRequest $request)
    {
        $lead = Lead::create($request->only('name', 'phone'));

        return view('site.scheduled', compact('lead'));       
    }
}
