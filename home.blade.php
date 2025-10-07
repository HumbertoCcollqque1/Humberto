{{--
|--------------------------------------------------------------------------
| Vista de Inicio (Home)
|--------------------------------------------------------------------------
|
| Esta es la página de bienvenida de la aplicación.
| Extiende el layout principal para mantener la consistencia en el diseño
| y presenta una introducción a los contenidos disponibles.
|
--}}

@extends('layout')

{{-- Define el título específico para esta página --}}
@section('title', 'Bienvenido/a a la Plataforma de Gramática Inglesa')

{{-- Contenido principal de la página de inicio --}}
@section('content')

    <div class="welcome-banner">
        <h2>Aprende Gramática Inglesa de Forma Efectiva</h2>
        <p>Tu guía completa para dominar los niveles A1 y A2.</p>
    </div>

    <div class="intro-text">
        <h3>¿Qué encontrarás aquí?</h3>
        <p>
            Esta plataforma está diseñada para proporcionarte una base sólida en la gramática inglesa.
            Cada sección está cuidadosamente estructurada con explicaciones claras, ejemplos prácticos y consejos
            útiles para que aprendas a tu propio ritmo.
        </p>
        <p>
            Navega por los niveles A1 y A2 para empezar tu viaje de aprendizaje.
        </p>
    </div>

    <div class="navigation-cards">
        <div class="card">
            <h3>Nivel A1: Fundamentos</h3>
            <p>
                Empieza desde cero. Aprende el verbo "to be", el presente simple, los artículos,
                preposiciones básicas y todo lo esencial para construir tus primeras frases
                con confianza.
            </p>
            <a href="{{ route('a1') }}" class="button">Ir al Nivel A1</a>
        </div>

        <div class="card">
            <h3>Nivel A2: Consolidación</h3>
            <p>
                Avanza en tu conocimiento. Domina el presente perfecto, los tiempos continuos,
                los verbos modales, las oraciones condicionales y mucho más para comunicarte
                con mayor precisión.
            </p>
            <a href="{{ route('a2') }}" class="button">Ir al Nivel A2</a>
        </div>
    </div>

    <!--
    |--------------------------------------------------------------------------
    | Consejo de Expansión
    |--------------------------------------------------------------------------
    |
    | Este sería un buen lugar para añadir componentes más dinámicos, como:
    | - Un "Consejo del día" sobre gramática.
    | - Un enlace a un "Quiz de Nivelación" para que los usuarios sepan por dónde empezar.
    | - Una sección de "Progreso Reciente" si implementas un sistema de usuarios.
    |
    -->
    <div class="tip-section">
        <h4>Consejo Rápido</h4>
        <p>
            <strong>"Practice makes perfect!"</strong> No te limites a leer la teoría.
            Intenta crear tus propias frases con cada regla gramatical que aprendas.
            La repetición y el uso activo son la clave para la retención.
        </p>
    </div>

@endsection