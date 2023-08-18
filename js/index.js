async function consutlar_resultados_por_sorteo(id_sorteo) {

    let fecha = $('#fecha').val();

    let url = 'https://www.tecnoriente.com.ve/Master_Web/ResultadosDeLosSorteos/Api_Resultados_Por_Sorteo.php';
    try {
        result = await $.ajax({
            url: url,
            type: 'GET',
            data: {
                "id_sorteo": id_sorteo,
                "fecha": fecha
            }
        });

        return result;
    } catch (error) {
        console.error(error);
    }
}
/*
async function consutlar_resultados_por_sorteo(id_sorteo) {

    let fecha = $('#fecha').val();

    let url = '../Resultados_De_Los_Sorteos/Consultar_Resultados_Por_Sorteo.php';
    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {
                "id_sorteo": id_sorteo,
                "fecha": fecha
            }
        });

        return result;
    } catch (error) {
        console.error(error);
    }
}
*/

