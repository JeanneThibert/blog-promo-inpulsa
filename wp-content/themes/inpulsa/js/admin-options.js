jQuery(document).ready(function($){

//*************AJOUT IMAGE DANS PAGE */
    var frame = wp.media({
        title: 'Sélectionner une image',
        button:{
            text:'Utiliser ce média'
        },
        multiple: false
    });
    $("#form-inpulsa-options #btn_img_01").click(function(e){
        e.preventDefault();

        frame.open();
        

    });

    frame.on('select', function(){
        var objImg = frame.state().get('selection').first().toJSON();
        
        console.log(objImg);
    });

});