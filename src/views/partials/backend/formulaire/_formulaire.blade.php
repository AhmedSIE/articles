@csrf
<div class="row margin">
    <div class="input-field col s12">
        <i class="material-icons prefix  pt-2">description</i>
        <label for="libelle">Libellé de l'Article:</label>
        <input type="text" class="validate" id="libelle" name="libelle" />
    </div>
</div>
<div class="row margin">
    <div class="input-field col s12">
        <i class="material-icons prefix  pt-2">subject</i>
        <textarea name="note" id="description" cols="30" rows="10" class="materialize-textarea validate"></textarea>
        <label for="description">Description:</label>
    </div>
</div>
<div class="row margin">
    <div class="input-field col s12">
        <h5>Catégories liées</h5>
        <hr>
        @if ($categories->count()>0)
            @foreach ($categories as $categorie)
                <div class="mescheck">
                    <input type="checkbox" name="categorie[]" value="{{$categorie->id}}"/>
                    <span>{{$categorie->libelle}}</span>
                </div>
            @endforeach     
        @else 
            <br>
            <h6 class="center!important">Aucune catégorie disponible</h6>
            <br>
        @endif
    </div>
</div>
<hr><br>
<div class="input-file">
    <img id="file_upload" src="http://placehold.it/70" alt="your image" class="upload-img" />
    <div class="input-file-upload">
        <span class="upload-label">Upload Image</span>
        <input type='file' name="image" onchange="readURL(this);" />
        {{-- <input type="text" name="titreimage"/> --}}
    </div>
</div>

<button type="submit" class="btn waves-light btnmodifier"><i class="material-icons left"> save</i>{{ $bnttext}}</button>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
