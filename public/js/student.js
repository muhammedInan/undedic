function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target; // this correspond au boutton appuyer , dataset correspond a data-action=delete , target correspond au block id 
        $(target).remove();
    });
}

function updateCounter(){
    const count = +$('#annonce_images div.form-group').length;

    $('#widgets-counter').val(count);

}

updateCounter();
handleDeleteButtons();