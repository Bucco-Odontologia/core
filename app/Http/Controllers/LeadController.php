<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeadStoreRequest;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LeadController extends Controller
{
    public function store(LeadStoreRequest $request)
    {
        $lead = Lead::create($request->only('name', 'phone'));

        return view('site.scheduled', compact('lead'));       
    }

    public function index()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(24);

        return view('admin.lead.index', compact('leads'));
    }

    public function export()
    {
        $leads = Lead::orderBy('created_at', 'desc')->get();

        $callback = function () use ($leads) {
            $handle = fopen('php://output', 'w');

            fputs($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($handle, ['Nome', 'Telefone', 'Acessado em'], ';');

            foreach ($leads as $lead) {
                fputcsv($handle, [
                    $lead->name,
                    $lead->phone,
                    $lead->created_at->format('d/m/Y H:i'),
                ], ';');
            }

            fclose($handle);
        };

        return Response::stream($callback, 200, ["Content-type" => "text/csv", "charset" => "UTF-8"])->send();
    }
}
