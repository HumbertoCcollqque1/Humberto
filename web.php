<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrammarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas ellas
| serán asignadas al grupo de middleware "web".
|
| Este archivo define las URLs de la aplicación y las asocia con los
| métodos correspondientes en el GrammarController.
|
*/

// Ruta para la página de inicio
// URL: http://127.0.0.1:8000/
Route::get('/', [GrammarController::class, 'home'])->name('home');

// Ruta para la sección de gramática del nivel A1
// URL: http://127.0.0.1:8000/a1
Route::get('/a1', [GrammarController::class, 'levelA1'])->name('a1');

// Ruta para la sección de gramática del nivel A2
// URL: http://127.0.0.1:8000/a2
Route::get('/a2', [GrammarController::class, 'levelA2'])->name('a2');

// Consejo de Laravel:
// A medida que la aplicación crezca, podrías considerar agrupar rutas.
// Por ejemplo, todas las rutas de gramática podrían estar bajo un prefijo:
/*
Route::prefix('grammar')->group(function () {
    Route::get('/a1', [GrammarController::class, 'levelA1'])->name('grammar.a1');
    Route::get('/a2', [GrammarController::class, 'levelA2'])->name('grammar.a2');
});
*/

// Consejo de Interactividad:
// Podrías añadir rutas POST para manejar las respuestas de los ejercicios.
// Por ejemplo, una ruta para verificar las respuestas de un quiz de A1:
/*
Route::post('/a1/check-exercise', [GrammarController::class, 'checkA1Exercise'])->name('a1.check');
*/