//VARIABLES
var input_search_user = document.getElementById('search-user');
var btn_search_user = document.getElementById('btn-search-user');

btn_search_user.addEventListener('click', function(){
    var btn_limpiar_busqueda = document.getElementById('clear-search');
    var resultados_alertas = document.getElementById('alerta-resultado');
    var contenedor_resultados = document.getElementById('contenedor-resultados');
    var container_results_user = document.getElementById('container-results-user');
    if(input_search_user.value != ''){
        axios({
            method: 'GET',
            url: 'models/searching_users.php?search=' + input_search_user.value
        }).then(res => {
            if(res.data != 'No'){
                contenedor_resultados.style.display = 'block';
                resultados_alertas.style.display = 'none';
                container_results_user.innerHTML = res.data;
            } else {
                contenedor_resultados.style.display = 'none';
                container_results_user.innerHTML = '';
                resultados_alertas.style.display = 'block';
            }
        }).catch(err => {
            console.log('Hay un error con los proyectos!', err);
        });
    }
    btn_limpiar_busqueda.addEventListener('click', function(){
        resultados_alertas.style.display = 'none';
        contenedor_resultados.style.display = 'none';
        input_search_user.value = '';
    });
});


