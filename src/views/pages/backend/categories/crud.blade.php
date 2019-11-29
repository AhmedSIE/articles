@extends('articles::layouts.master')
@section('mycontent')

    <div class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 1-column register-bg  blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div id="register-page" class="row center">
                        <div class="col s12 m12 z-depth-0 card-panel border-radius-6 register-card bg-opacity-8">
                            <h5>Ajouter une catégories</h5>
                            <hr>
                            <form method="post" action="{{ route('savecategorie')}}" class="maform col s12 validate">
                                @method('POST')
                                @csrf
                                @include('articles::partials\backend\formulaire\_formulairecat', ['bnttext'=>'Ajouter'])
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
        
@endsection