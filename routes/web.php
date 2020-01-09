<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->middleware('auth')->name('main');
Route::get('/publico/registro', function () {
    return view('publico.registro');
});
Route::get('/publico/agendador', function () {
    return view('publico.agendador');
});

Route::group(['prefix'=>'registro-voluntarios'], function ()
{
    Route::get('/', 'VoluntarioController@home');
    Route::post('/crear','VoluntarioController@crear')->name('selectUbicacion.provincias');
});
Auth::routes();

/**
 * Controladores de Login
 */

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'persona'],function(){
    Route::group(['middleware' => 'role:admin'], function (){
        Route::get('/listar', 'PersonaController@listar')->name('personas.listar');
        Route::get('/listarDonantes', 'PersonaController@listarDonantes')->name('personas.listarDonantes');
        Route::get('/listarUsuarios', 'PersonaController@listarUsuarios')->name('personas.listarUsuarios');
        Route::post('/crear','PersonaController@crear')->name('persona.crear');
        Route::post('/editar','PersonaController@editar')->name('persona.editar');
        Route::post('/eliminarvarios','PersonaController@eliminarvarios')->name('persona.eliminarvarios');
        Route::post('/eliminarUsuario','PersonaController@eliminarUsuario')->name('persona.eliminarUsuario');
        Route::post('/mostrar', 'PersonaController@mostrar')->name('personas.mostrar');
        Route::get('/mostrarActividades', 'PersonaController@mostrarActividades')->name('personas.mostrarActividades');
    });
    Route::post('/mostrarPorDNI', 'PersonaController@mostrarPorDNI')->name('personas.mostrarPorDNI');
    Route::group(['middleware' => 'role:donito'], function (){
        Route::post('/eliminar','PersonaController@eliminar')->name('persona.eliminar');
    });
    Route::group(['middleware'=> 'auth'], function ()
    {
        Route::post('/importar','PersonaController@importar')->name('persona.importar');
        Route::get('getRoles', 'PersonaController@getRoles')->name('persona.getRoles');
    });
    Route::post('/crearPublico','PersonaController@crearPublico')->name('persona.crearPublico');
}); 

Route::group(['prefix'=>'ubicacion'], function ()
{
    Route::get('/departamentos','DepartamentoController@getDepartamentos')->name('selectUbicacion.departamentos');
    Route::post('/provincias','DepartamentoController@getProvincias')->name('selectUbicacion.provincias');
    Route::post('/distritos','ProvinciaController@getDistritos')->name('selectUbicacion.distritos');
});


Route::group(['prefix'  =>  'rol', 'middleware' => 'role:donito'], function ()
{
    Route::get('/listar', 'RolesController@listarRoles')->name('rol.listar');
    Route::post('/crear', 'RolesController@crearRol')->name('rol.crear');
    Route::post('/modificar', 'RolesController@modificarRol')->name('rol.modificar');
    Route::post('/eliminar', 'RolesController@eliminarRol')->name('rol.eliminar');
    Route::post('/eliminarvarios', 'RolesController@eliminarVariosRol')->name('rol.eliminarvarios');
});

Route::group(['prefix'  =>  'permiso', 'middleware' => 'role:donito'], function ()
{
    Route::get('/listar', 'RolesController@listarPermisos')->name('permiso.listar');
    Route::post('/crear', 'RolesController@crearPermiso')->name('permiso.crear');
    Route::post('/modificar', 'RolesController@modificarPermiso')->name('permiso.modificar');
    Route::post('/eliminar', 'RolesController@eliminarPermiso')->name('permiso.eliminar');
});

Route::group(['prefix' => 'tarea','middleware'=> 'auth'], function ()
{
    Route::get('/listar', 'TareaController@listar')->name('tarea.listar');
    Route::get('/mostrarPorPersona', 'TareaController@mostrarPorPersona')->name('tarea.mostrarPorPersona');
    Route::post('/mostrarPorCentroMedico', 'TareaController@mostrarPorCentroMedico')->name('tarea.mostrarPorCentroMedico');
    Route::post('/crear', 'TareaController@crear')->name('tarea.crear');
    Route::post('/editar', 'TareaController@editar')->name('tarea.editar');
    Route::post('/eliminar', 'TareaController@eliminar')->name('tarea.eliminar');
});

Route::group(['prefix' => 'dato','middleware'=> 'auth'], function ()
{
    Route::get('/listar', 'DatoController@listar')->name('dato.listar');
    Route::post('/crear', 'DatoController@crear')->name('dato.crear');
    Route::post('/editar', 'DatoController@editar')->name('dato.editar');
    Route::post('/eliminar', 'DatoController@eliminar')->name('dato.eliminar');
});

Route::group(['prefix' => 'campo','middleware'=> 'auth'], function ()
{
    Route::get('/listar', 'CampoContactoController@listar')->name('dato.listar');
    Route::post('/crear', 'CampoContactoController@crear')->name('dato.crear');
    Route::post('/editar', 'CampoContactoController@editar')->name('dato.editar');
    Route::post('/eliminar', 'CampoContactoController@eliminar')->name('dato.eliminar');
});

Route::group(['prefix' => 'nota','middleware'=> 'auth'], function ()
{
    Route::get('/listar', 'NotaController@listar')->name('nota.listar');
    Route::post('/mostrar', 'NotaController@mostrar')->name('nota.mostrar');
    Route::post('/crear', 'NotaController@crear')->name('nota.crear');
    Route::post('/editar', 'NotaController@editar')->name('nota.editar');
    Route::post('/eliminar', 'NotaController@eliminar')->name('nota.eliminar');
});

Route::group(['prefix' => 'llamada','middleware'=> 'auth'], function ()
{
    Route::get('/listar', 'LlamadaController@listar')->name('llamada.listar');
    Route::post('/mostrar', 'LlamadaController@mostrar')->name('llamada.mostrar');
    Route::post('/crear', 'LlamadaController@crear')->name('llamada.crear');
    Route::post('/editar', 'LlamadaController@editar')->name('llamada.editar');
    Route::post('/eliminar', 'LlamadaController@eliminar')->name('llamada.eliminar');
    Route::get('/resultados', 'LlamadaController@getResultados')->name('llamada.resultados');
});

Route::group(['prefix' => 'mail','middleware'=> 'auth'], function ()
{
    Route::post('/listar', 'MailController@listar')->name('mail.listar');
    Route::post('/enviar', 'MailController@enviar')->name('mail.enviar');
    Route::post('/eliminar', 'MailController@eliminar')->name('mail.eliminar');
});

Route::group(['prefix'  =>  'mensajeria', 'middleware' => 'role:admin'], function ()
{
    Route::get('/listar', 'MensajeriaController@listar')->name('mensajeria.listar');
    Route::post('/mostrar', 'MensajeriaController@mostrar')->name('mensajeria.mostrar');
    Route::post('/crear', 'MensajeriaController@crear')->name('mensajeria.crear');
    Route::post('/editar', 'MensajeriaController@editar')->name('mensajeria.editar');
    Route::post('/eliminar', 'MensajeriaController@eliminar')->name('mensajeria.eliminar');
});

Route::group(['prefix'  =>  'cita', 'middleware' => 'role:admin'], function ()
{
    Route::get('/listar', 'CitaController@listar')->name('cita.listar');
    Route::post('/editar', 'CitaController@editar')->name('cita.editar');
    Route::post('/eliminar', 'CitaController@eliminar')->name('cita.eliminar');
    Route::post('/mostrar', 'CitaController@mostrar')->name('cita.mostrar');
    Route::post('/mostrarPorFecha', 'CitaController@mostrarPorFecha')->name('cita.mostrarPorFecha');
});
Route::post('cita/crear', 'CitaController@crear')->name('cita.crear');
Route::group(['prefix'  =>  'inboundEstado', 'middleware' => 'role:admin'], function (){
    Route::get('/listar', 'InboundEstadoController@listar')->name('inboundEstado.listar');
});

Route::group(['prefix'  =>  'etapaDonacion', 'middleware' => 'role:admin'], function (){
    Route::post('/crear', 'EtapasDonacionController@crear')->name('etapaDonacion.crear');
    Route::post('/mostrarPorPersona', 'EtapasDonacionController@mostrarPorPersona')->name('etapaDonacion.mostrarPorPersona');
});

Route::group(['prefix'  =>  'registroBasico', 'middleware' => 'role:admin'], function (){
    Route::post('/registroBasico', 'RegistroBasicoController@crear')->name('registroBasico.crear');
});

Route::group(['prefix'  =>  'hemograma', 'middleware' => 'role:admin'], function (){
    Route::post('/hemograma', 'HemogramaController@crear')->name('hemograma.crear');
});

Route::group(['prefix'  =>  'entrevista', 'middleware' => 'role:admin'], function (){
    Route::post('/entrevista', 'EntrevistaController@crear')->name('entrevista.crear');
});

Route::group(['prefix'  =>  'donacion', 'middleware' => 'role:admin'], function (){
    Route::post('/donacion', 'DonacionController@crear')->name('donacion.crear');
});

Route::group(['prefix'  =>  'diferido', 'middleware' => 'role:admin'], function (){
    Route::post('/diferido', 'DiferidoController@crear')->name('diferido.crear');
});

Route::group(['prefix'  =>  'estadistica', 'middleware' => 'role:admin'], function (){
    Route::get('/donantes', 'EstadisticaController@donantes')->name('estadistica.donantes');
    Route::get('/donaciones', 'EstadisticaController@donaciones')->name('estadistica.donaciones');
    Route::get('/donacionesPorDia', 'EstadisticaController@donacionesPorDia')->name('estadistica.donacionesPorDia');
    Route::get('/donantesPorDia', 'EstadisticaController@donantesPorDia')->name('estadistica.donantesPorDia');
    Route::get('/donantesPorEtapaInbound', 'EstadisticaController@donantesPorEtapaInbound')->name('estadistica.donantesPorEtapaInbound');
    Route::get('/promedioTiempoParaDonacion', 'EstadisticaController@promedioTiempoParaDonacion')->name('estadistica.promedioTiempoParaDonacion');
    Route::get('/donantesPorTipoSangre', 'EstadisticaController@donantesPorTipoSangre')->name('estadistica.donantesPorTipoSangre');
    Route::get('/tareasPDF', 'EstadisticaController@tareasPDF')->name('estadistica.tareasPDF');
});

Route::get('/test', function () {
    return view('excel');
});