@extends('articles::layouts/master')

@section('mycontent')
<div class="container card-panel z-depth-0 montableau">
    <a href="{{ route('articlecreate')}}" class="btn blue z-depth-0 right"><i class="material-icons">add</i></a>
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
        <table class="highlight tabl">
            <tr>
                <th>N°</th>
                <th>Nom Catégories</th>
                <th colspan="2">Description</th>
                <th colspan="2">Image</th>
            </tr>
            <div style="display:none;">{{$n=0}}</div>
            @foreach ($articles as $article)
                <div style="display:none;">{{$n++}}</div>
                <tr>
                    <td>{{$n}}</td>
                    <td>{{$article->libelle}}</td>
                    <td>{{$article->note}}</td>
                    <td>{{$article->image}}</td>
                <td><img src="{{asset('storage/'.$article->lienimage)}}" alt=""></td>
                    <td>
                        {{-- <a class="btn-flat white waves-effect" href="{{ route('editcategorie',$categorie->id)}}"><i class="material-icons">edit</i></a></li> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <br>
        <p class="center">Aucun artilce disponible !</p>    
        <br>
    @endif
        
</div>


@endsection
