@extends('admin.template')

@section('title', 'Leads')

@section('subtitle', 'Leads')

@section('subtitleItem2')
    <div class="bd-highlight">
        <a href="{{ route('admin.lead.export') }}" type="button" class="btn btn-success float-right">
            <i class="fas fa-download"></i>
            Exportar
        </a>
    </div>
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Acessado em</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($leads as $key => $lead)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $lead->name }}</td>
                    <td>{{ \JansenFelipe\Utils\Utils::mask($lead->phone, \JansenFelipe\Utils\Mask::TELEFONE) }}</td>
                    <td>{{ $lead->created_at->format('d/m/Y') }}</td>
                </tr>
            @empty
                <p>Nenhum lead foi registrado ainda 😢</p>
            @endforelse
        </tbody>
    </table>

    <div class="">
        {!! $leads->links() !!}
    </div>
@endsection