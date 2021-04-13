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
                  
/**
Как пример бесконечного вызова? Не совсем понятно по заданию что нужно сделать.
Результат действия : вызов алерта. Соответственно, алерт будет вызван повторно с:

function repeat() {
    while (1) {
        alert('ArrowRight');
    }
}
**/
