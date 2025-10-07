<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * GrammarController
 *
 * Este controlador maneja toda la lógica para mostrar las páginas de contenido
 * de gramática inglesa. Cada método corresponde a una página específica
 * (inicio, nivel A1, nivel A2).
 */
class GrammarController extends Controller
{
    /**
     * Muestra la página de inicio.
     *
     * Carga la vista 'home' que actúa como portal de bienvenida
     * y punto de entrada a los diferentes niveles de gramática.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        // La vista 'home' es un archivo blade: resources/views/home.blade.php
        return view('home');
    }

    /**
     * Muestra la página con todo el contenido del nivel A1.
     *
     * Carga la vista 'a1', que contiene las explicaciones detalladas
     * de todos los temas gramaticales correspondientes al nivel A1.
     *
     * @return \Illuminate\View\View
     */
    public function levelA1()
    {
        // La vista 'a1' es un archivo blade: resources/views/a1.blade.php
        // Podrías pasar datos a la vista si fuera necesario, por ejemplo:
        // $topics = ['Verbo to be', 'Present Simple', ...];
        // return view('a1', ['topics' => $topics]);
        return view('a1');
    }

    /**
     * Muestra la página con todo el contenido del nivel A2.
     *
     * Carga la vista 'a2', que contiene las explicaciones detalladas
     * de todos los temas gramaticales correspondientes al nivel A2.
     *
     * @return \Illuminate\View\View
     */
    public function levelA2()
    {
        // La vista 'a2' es un archivo blade: resources/views/a2.blade.php
        return view('a2');
    }

    // --- Consejos para Expansión ---

    /**
     * Ejemplo de cómo podría ser un método para verificar ejercicios.
     *
     * Este método recibiría datos de un formulario (vía POST) y
     * devolvería una respuesta, por ejemplo, en formato JSON, para
     * dar feedback al usuario de forma interactiva.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /*
    public function checkA1Exercise(Request $request)
    {
        // Valida los datos recibidos del formulario
        $validated = $request->validate([
            'exercise_id' => 'required|string',
            'answers' => 'required|array'
        ]);

        $exerciseId = $validated['exercise_id'];
        $userAnswers = $validated['answers'];
        $correctAnswers = []; // Las respuestas correctas se obtendrían de la BD o de un archivo de configuración

        // Lógica para comparar las respuestas del usuario con las correctas
        // ...

        $results = [
            'is_correct' => true, // o false
            'feedback' => '¡Buen trabajo! Todas tus respuestas son correctas.'
        ];

        return response()->json($results);
    }
    */
}