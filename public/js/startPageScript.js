function refreshAtDateTime(dateTime) {
    let agora = new Date();
    let valor = new Date(dateTime);

    valor.setSeconds( valor.getSeconds() + 1 );

    if(valor.getTime() > agora.getTime()) {
        let timeout = valor.getTime() - agora.getTime();

        //Ajuste no caso de estouro de 32bits no tempo
        if(timeout > 2147483647) {
            timeout = 2147483647;
        }

        window.setTimeout(function () {
            window.location.reload(true);
        }, timeout);
    }
}