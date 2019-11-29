$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.modal').modal();
    $(".dropdown-trigger").dropdown();
    $('.tooltipped').tooltip();

    // $('#refresh').on('click', function() {
    //     location.reload();
    // });
// Fonction permettant de faire une liste deroulante lié et dynamique
    $('select[name="projets_id"]').on('change', function() {
        var projetID = $(this).val();
        if(projetID) {
            $.ajax({
                url:'/ListeTechnogiesAjax/'+projetID,
                type:'GET',
                dataType:'json',
                success:function(reponse){
                    $('select[name="technologies_id"]').empty();
                    $('select[name="technologies_id"]').append('<option value="" selected disabled>Sélectionner la technologie </option>');
                    $.each(reponse, function(key, value) {
                        console.log(value.libelle);
                        $('select[name="technologies_id"]').append('<option value="'+ value.id +'">'+ value.libelle +'</option>');
                    });
                    $('select').formSelect();
                }
            })
        }else{
            $('select[name="technologies_id"]').empty();
        }
    });

});

function toggle(ele) {
    var cont = document.getElementById('cont');
    if (cont.style.display == 'block') {
        cont.style.display = 'none';

        document.getElementById(ele.id).value = 'Show DIV';
    }
    else {
        cont.style.display = 'block';
        document.getElementById(ele.id).value = 'Hide DIV';
    }
}
 // On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler').click(function()
  {
      jQuery('#toggle').toggle(400);
      return false;
   });
});
 // On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#fichie').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#fichier').click(function()
  {
      jQuery('#fichie').toggle(400);
      return false;
   });
});
 // On attend que la page soit chargée 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#commentaire').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#commentair').click(function()
  {
      jQuery('#commentaire').toggle(400);
      return false;
   });
});

// supprimer affiche/cache boutton
$("#deletItem").click(function(){$("#deleteLii").addClass("hide"); $("#deletok").removeClass("hide");});
$("#cancel").click(function(){$("#deleteLii").removeClass("hide"); $("#deletok").addClass("hide"); })

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#file_upload')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

  