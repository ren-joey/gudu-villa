$('[dialog]').on('click', function(){
    var thisClick = $(this),
        target = thisClick.find('dialog');

    if(thisClick.attr('dialog') == 'false'){
        thisClick.attr('dialog', true);
        target.attr('open', '');
    }else{
        thisClick.attr('dialog', false);
        target.removeAttr('open');
    }
});