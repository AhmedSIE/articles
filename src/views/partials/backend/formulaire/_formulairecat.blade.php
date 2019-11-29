@csrf
<div class="row margin">
    <div class="input-field col s12">
        <i class="material-icons prefix  pt-2">description</i>
        <label for="nomtechno">Nom Catégorie:</label>
        <input type="text" class="validate" id="nomtechno" name="libelle" required/>
    </div>
</div>
<div class="row margin">
    <div class="input-field col s12">
        <i class="material-icons prefix  pt-2">subject</i>
        <textarea name="description" id="description" cols="30" rows="10" class="materialize-textarea validate" required></textarea>
        <label for="description">Description:</label>
    </div>
</div>

<button type="submit" class="btn waves-light"><i class="material-icons left"> save</i>{{ $bnttext}}</button>
