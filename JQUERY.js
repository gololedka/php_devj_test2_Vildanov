$(document).ready(function() {
    $(document).keyup(function(e){
        switch(e.key) {
            case (37 || 'ArrowLeft'):
                alert('ArrowLeft');
                alert('ArrowLeft');
                break;
            case (38 || 'ArrowUp'):
                alert('ArrowUp');
                alert('ArrowUp');
                break;
            case (39 || 'ArrowRight'):
                alert('ArrowRight');
                alert('ArrowRight');
                break;
            case (40 || 'ArrowDown'):
                alert('ArrowDown');
                alert('ArrowDown');
                break;
        }
    })
}