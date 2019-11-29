@extends('articles::layouts/app')

@section('mycontent2')
<div class="container card-panel z-depth-0 montableau">
    {{-- @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            {!! session()->get('message') !!}
            </div>
            <script>
            $(".alert").alert();
            </script>
    @endif --}}

    
    @if ($articles->count() > 0)
       
    @else
        <br>
        <p class="center">Aucun artilce disponible !</p>    
        <br>
    @endif
        
</div>


@endsection
