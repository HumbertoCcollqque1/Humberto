{{--
|--------------------------------------------------------------------------
| Vista del Nivel A1
|--------------------------------------------------------------------------
|
| Contiene todo el material de gramática para el nivel A1.
| Cada sección está diseñada para ser un recurso completo sobre el tema.
|
--}}

@extends('layout')

@section('title', 'Nivel A1 - Fundamentos de la Gramática Inglesa')

@section('content')

    <div class="level-header">
        <h2>Nivel A1: Fundamentos Esenciales</h2>
        <p>Aquí comenzarás tu viaje. Estos son los pilares de la gramática inglesa que necesitas para comunicarte en situaciones cotidianas.</p>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 1. Verbo "to be" (ser/estar)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>1. Verbo "to be" (Ser o Estar)</h3>
        <p>El verbo más fundamental del inglés. Lo usamos para describir quién es alguien, qué es algo, dónde está algo, o cómo está alguien.</p>

        <h4>Estructura (Afirmativo, Negativo, Interrogativo)</h4>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Pronombre</th>
                        <th>Afirmativo</th>
                        <th>Contracción (Af.)</th>
                        <th>Negativo</th>
                        <th>Contracción (Neg.)</th>
                        <th>Interrogativo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>I</td>
                        <td>I <strong>am</strong></td>
                        <td>I<strong>'m</strong></td>
                        <td>I am <strong>not</strong></td>
                        <td>I<strong>'m not</strong></td>
                        <td><strong>Am</strong> I...?</td>
                    </tr>
                    <tr>
                        <td>You</td>
                        <td>You <strong>are</strong></td>
                        <td>You<strong>'re</strong></td>
                        <td>You are <strong>not</strong></td>
                        <td>You <strong>aren't</strong></td>
                        <td><strong>Are</strong> you...?</td>
                    </tr>
                    <tr>
                        <td>He/She/It</td>
                        <td>He/She/It <strong>is</strong></td>
                        <td>He/She/It<strong>'s</strong></td>
                        <td>He/She/It is <strong>not</strong></td>
                        <td>He/She/It <strong>isn't</strong></td>
                        <td><strong>Is</strong> he/she/it...?</td>
                    </tr>
                    <tr>
                        <td>We</td>
                        <td>We <strong>are</strong></td>
                        <td>We<strong>'re</strong></td>
                        <td>We are <strong>not</strong></td>
                        <td>We <strong>aren't</strong></td>
                        <td><strong>Are</strong> we...?</td>
                    </tr>
                    <tr>
                        <td>They</td>
                        <td>They <strong>are</strong></td>
                        <td>They<strong>'re</strong></td>
                        <td>They are <strong>not</strong></td>
                        <td>They <strong>aren't</strong></td>
                        <td><strong>Are</strong> they...?</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Ejemplos:</h5>
        <ul>
            <li><strong>Afirmativo:</strong> She <strong>is</strong> a doctor. (Ella es doctora.) / They<strong>'re</strong> happy. (Ellos están felices.)</li>
            <li><strong>Negativo:</strong> He <strong>is not</strong> my brother. (Él no es mi hermano.) / We <strong>aren't</strong> tired. (No estamos cansados.)</li>
            <li><strong>Pregunta:</strong> <strong>Is</strong> it cold outside? (¿Hace frío afuera?) / <strong>Are</strong> you from Spain? (¿Eres de España?)</li>
        </ul>

        <div class="tip">
            <strong>Consejo:</strong> Las contracciones (`I'm`, `you're`, `isn't`) son extremadamente comunes en el inglés hablado y en la escritura informal. ¡Acostúmbrate a usarlas!
        </div>

        <!-- Ejercicio Interactivo: Rellenar huecos -->
        <div class="interactive-area" data-exercise="fill-in-the-blanks">
            <h4>¡A Practicar!</h4>
            <p>Completa las frases con la forma correcta del verbo "to be" (am, is, are).</p>

            <div class="exercise-item">
                <label for="q1">1. She</label>
                <input type="text" id="q1" class="answer-input" data-correct-answer="is">
                <label for="q1">a teacher.</label>
            </div>

            <div class="exercise-item">
                <label for="q2">2. We</label>
                <input type="text" id="q2" class="answer-input" data-correct-answer="are">
                <label for="q2">not from Canada.</label>
            </div>

            <div class="exercise-item">
                <input type="text" id="q3" class="answer-input" data-correct-answer="Are">
                <label for="q3">they ready?</label>
            </div>

            <button class="check-button">Verificar Respuestas</button>
            <div class="feedback-area"></div>
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 2. There is / There are & This/That/These/Those
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>2. Existencia y Demostrativos</h3>

        <h4>There is / There are (Hay)</h4>
        <p>Se usa para indicar la existencia de algo.</p>
        <ul>
            <li><strong>There is (There's):</strong> para sustantivos singulares. -> <strong>There is</strong> a book on the table.</li>
            <li><strong>There are:</strong> para sustantivos plurales. -> <strong>There are</strong> three books on the table.</li>
            <li><strong>Negativo:</strong> There <strong>isn't</strong> a cat. / There <strong>aren't</strong> any cats.</li>
            <li><strong>Pregunta:</strong> <strong>Is there</strong> a cat? / <strong>Are there</strong> any cats?</li>
        </ul>

        <h4>This / That / These / Those (Demostrativos)</h4>
        <p>Se usan para señalar o identificar personas o cosas.</p>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Cerca (Here)</th>
                        <th>Lejos (There)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Singular</strong></td>
                        <td><strong>This</strong> (este/esta/esto) -> <strong>This</strong> is my car.</td>
                        <td><strong>That</strong> (ese/esa/eso/aquel) -> <strong>That</strong> is our house.</td>
                    </tr>
                    <tr>
                        <td><strong>Plural</strong></td>
                        <td><strong>These</strong> (estos/estas) -> <strong>These</strong> are my keys.</td>
                        <td><strong>Those</strong> (esos/esas/aquellos) -> <strong>Those</strong> are your friends.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tip">
            <strong>Consejo:</strong> Recuerda la regla simple: si puedes tocarlo, probablemente sea `this` o `these`. Si tienes que señalarlo, es `that` o `those`.
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 3. Present Simple y Adverbios de Frecuencia
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>3. Present Simple</h3>
        <p>Lo usamos para hablar de <strong>hábitos, rutinas, hechos y verdades universales</strong>.</p>

        <h4>Estructura</h4>
        <ul>
            <li><strong>Afirmativo:</strong> Sujeto + verbo. Se añade <strong>-s</strong> o <strong>-es</strong> al verbo para he/she/it.
                <ul>
                    <li>I <strong>work</strong> in an office.</li>
                    <li>She <strong>works</strong> in a hospital.</li>
                </ul>
            </li>
            <li><strong>Negativo:</strong> Sujeto + <strong>do/does not (don't/doesn't)</strong> + verbo (en infinitivo).
                <ul>
                    <li>I <strong>don't work</strong> on weekends.</li>
                    <li>He <strong>doesn't work</strong> on Fridays.</li>
                </ul>
            </li>
            <li><strong>Interrogativo:</strong> <strong>Do/Does</strong> + sujeto + verbo (en infinitivo)?
                <ul>
                    <li><strong>Do</strong> you <strong>work</strong> here?</li>
                    <li><strong>Does</strong> she <strong>work</strong> with you?</li>
                </ul>
            </li>
        </ul>

        <h4>Adverbios de Frecuencia</h4>
        <p>Nos dicen con qué frecuencia ocurre una acción. Se colocan <strong>antes</strong> del verbo principal (pero <strong>después</strong> del verbo "to be").</p>
        <p><strong>(100%) Always</strong> > <strong>Usually</strong> > <strong>Often</strong> > <strong>Sometimes</strong> > <strong>Rarely/Seldom</strong> > <strong>(0%) Never</strong></p>
        <ul>
            <li>She <strong>always</strong> drinks coffee in the morning.</li>
            <li>They are <strong>often</strong> late.</li>
            <li>I <strong>never</strong> eat meat.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 4. Present Continuous y Verbos de Estado
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>4. Present Continuous</h3>
        <p>Lo usamos para describir <strong>acciones que están sucediendo en este preciso momento</strong> o acciones temporales.</p>
        <h4>Estructura: Sujeto + verbo "to be" (am/is/are) + verbo principal-<strong>ing</strong></h4>
        <ul>
            <li><strong>Afirmativo:</strong> You <strong>are learning</strong> English now.</li>
            <li><strong>Negativo:</strong> He <strong>is not sleeping</strong>.</li>
            <li><strong>Interrogativo:</strong> <strong>Are</strong> they <strong>watching</strong> TV?</li>
        </ul>

        <h4>Verbos de Estado (Stative Verbs)</h4>
        <p>Estos verbos describen estados, no acciones, y <strong>normalmente no se usan en Present Continuous</strong>. Expresan pensamientos, emociones, sentidos, posesión.</p>
        <ul>
            <li><strong>Comunes:</strong> like, love, hate, want, need, know, understand, believe, remember, see, hear, have (posesión).</li>
            <li>Incorrecto: <del>I am wanting a coffee.</del></li>
            <li><strong>Correcto:</strong> I <strong>want</strong> a coffee. (Present Simple)</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 5. Sustantivos y Artículos
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>5. Sustantivos y Artículos</h3>

        <h4>Artículos Indefinidos: a / an</h4>
        <p>Se usan con sustantivos contables singulares para hablar de algo no específico.</p>
        <ul>
            <li><strong>a:</strong> antes de un sonido de consonante. -> <strong>a</strong> car, <strong>a</strong> university (la 'u' suena como 'you').</li>
            <li><strong>an:</strong> antes de un sonido de vocal. -> <strong>an</strong> apple, <strong>an</strong> hour (la 'h' es muda).</li>
        </ul>

        <h4>Artículo Definido: the</h4>
        <p>Se usa para hablar de algo específico que tanto el hablante como el oyente conocen.</p>
        <ul>
            <li>I see <strong>a</strong> dog. <strong>The</strong> dog is black. (La primera vez es 'un perro', la segunda es 'el perro' específico que ya mencionamos).</li>
        </ul>

        <h4>Sustantivos Contables e Incontables</h4>
        <ul>
            <li><strong>Contables:</strong> Se pueden contar (one book, two books). Usan `a/an`, números y plurales.</li>
            <li><strong>Incontables:</strong> No se pueden contar (water, rice, information, money). No usan `a/an` ni plurales.</li>
        </ul>

        <h4>Some / Any</h4>
        <ul>
            <li><strong>Some:</strong> Se usa en frases <strong>afirmativas</strong> con incontables o plurales. -> I need <strong>some</strong> water. / I have <strong>some</strong> friends.</li>
            <li><strong>Any:</strong> Se usa en frases <strong>negativas e interrogativas</strong>. -> I don't have <strong>any</strong> money. / Do you have <strong>any</strong> questions?</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 6. Adjetivos y su Orden
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>6. Adjetivos: Descripción y Orden</h3>
        <p>Los adjetivos describen sustantivos y en inglés tienen un orden específico cuando se usan varios juntos.</p>
        <h4>Orden: Opinion - Size - Age - Color - Origin - Material + Noun</h4>
        <ul>
            <li>A <strong>beautiful</strong> (opinion) <strong>small</strong> (size) <strong>old</strong> (age) <strong>Italian</strong> (origin) <strong>sports</strong> (purpose) car.</li>
            <li>Un coche deportivo italiano viejo, pequeño y bonito.</li>
        </ul>
        <div class="tip">
            <strong>Consejo:</strong> Es muy raro usar más de tres adjetivos seguidos. El orden más común es Opinión -> Tamaño/Color -> Sustantivo.
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 7. Comparativos y Superlativos
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>7. Comparativos y Superlativos</h3>
        <p>Los usamos para comparar dos o más cosas.</p>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Tipo de Adjetivo</th>
                        <th>Comparativo (más... que)</th>
                        <th>Superlativo (el/la más...)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cortos (1 sílaba)</td>
                        <td>adj + <strong>-er</strong> (taller than)</td>
                        <td><strong>the</strong> + adj + <strong>-est</strong> (the tallest)</td>
                    </tr>
                    <tr>
                        <td>Largos (2+ sílabas)</td>
                        <td><strong>more</strong> + adj (more expensive than)</td>
                        <td><strong>the most</strong> + adj (the most expensive)</td>
                    </tr>
                    <tr>
                        <td>Terminados en -y</td>
                        <td>cambia 'y' por <strong>-ier</strong> (happier than)</td>
                        <td><strong>the</strong> + cambia 'y' por <strong>-iest</strong> (the happiest)</td>
                    </tr>
                    <tr>
                        <td><strong>Irregulares</strong></td>
                        <td>good -> <strong>better</strong> / bad -> <strong>worse</strong> / far -> <strong>further</strong></td>
                        <td>good -> <strong>the best</strong> / bad -> <strong>the worst</strong> / far -> <strong>the furthest</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 8. Preposiciones de Lugar y Tiempo
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>8. Preposiciones: In / On / At</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Preposición</th>
                        <th>Uso en TIEMPO</th>
                        <th>Uso en LUGAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>IN</strong></td>
                        <td>Periodos largos (<strong>in</strong> 2024, <strong>in</strong> May, <strong>in</strong> the morning)</td>
                        <td>Espacios cerrados o áreas grandes (<strong>in</strong> a room, <strong>in</strong> London)</td>
                    </tr>
                    <tr>
                        <td><strong>ON</strong></td>
                        <td>Días y fechas (<strong>on</strong> Monday, <strong>on</strong> June 5th)</td>
                        <td>Superficies (<strong>on</strong> the table, <strong>on</strong> the wall)</td>
                    </tr>
                    <tr>
                        <td><strong>AT</strong></td>
                        <td>Horas y momentos específicos (<strong>at</strong> 5 PM, <strong>at</strong> night, <strong>at</strong> the weekend)</td>
                        <td>Puntos específicos o direcciones (<strong>at</strong> the bus stop, <strong>at</strong> 123 Main St)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4>Otras preposiciones de lugar:</h4>
        <p><strong>Next to</strong> (al lado de), <strong>between</strong> (entre), <strong>under</strong> (debajo), <strong>in front of</strong> (delante de), <strong>behind</strong> (detrás).</p>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 9. Pasado Simple (Past Simple)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>9. Past Simple</h3>
        <p>Se usa para hablar de <strong>acciones y eventos terminados en el pasado</strong>. A menudo se usa con marcadores de tiempo como `yesterday`, `last week`, `in 1990`.</p>

        <h4>Verbos Regulares (-ed)</h4>
        <ul>
            <li><strong>Afirmativo:</strong> I <strong>worked</strong> yesterday.</li>
            <li><strong>Negativo:</strong> I <strong>did not (didn't) work</strong> yesterday.</li>
            <li><strong>Pregunta:</strong> <strong>Did</strong> you <strong>work</strong> yesterday?</li>
        </ul>

        <h4>Verbos Irregulares</h4>
        <p>No siguen una regla y hay que memorizarlos (go -> went, see -> saw, eat -> ate).</p>
        <ul>
            <li><strong>Afirmativo:</strong> We <strong>went</strong> to the cinema last night.</li>
            <li><strong>Negativo:</strong> We <strong>didn't go</strong> to the cinema.</li>
            <li><strong>Pregunta:</strong> <strong>Did</strong> you <strong>go</strong> to the cinema?</li>
        </ul>
        <div class="tip">
            <strong>¡Ojo!</strong> En negaciones y preguntas en pasado simple, el verbo principal <strong>siempre</strong> va en su forma base (infinitivo), porque el auxiliar `did` ya indica el pasado.
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 10. Futuro Básico y `can`
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>10. Futuro Básico y el verbo `can`</h3>

        <h4>Be going to</h4>
        <p>Para <strong>planes e intenciones futuras</strong> que ya hemos decidido.</p>
        <p>Estructura: Sujeto + am/is/are + <strong>going to</strong> + verbo.</p>
        <ul>
            <li>I <strong>am going to travel</strong> to Japan next year. (Es mi plan)</li>
        </ul>

        <h4>Will</h4>
        <p>Para <strong>decisiones espontáneas</strong> tomadas en el momento de hablar, predicciones u ofrecimientos.</p>
        <p>Estructura: Sujeto + <strong>will ('ll)</strong> + verbo.</p>
        <ul>
            <li>The phone is ringing. I<strong>'ll get</strong> it! (Decisión espontánea)</li>
        </ul>

        <h4>Can (habilidad o permiso)</h4>
        <p>Es un verbo modal. Siempre va seguido de un verbo en infinitivo (sin 'to').</p>
        <ul>
            <li><strong>Habilidad:</strong> She <strong>can speak</strong> three languages.</li>
            <li><strong>Permiso:</strong> <strong>Can</strong> I <strong>open</strong> the window?</li>
            <li><strong>Negativo:</strong> He <strong>cannot (can't)</strong> swim.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 11. Imperativos
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>11. Imperativos</h3>
        <p>Se usan para dar órdenes, instrucciones o consejos. Se forman con el verbo en infinitivo sin sujeto.</p>
        <ul>
            <li><strong>Afirmativo:</strong> <strong>Open</strong> the door.</li>
            <li><strong>Negativo:</strong> <strong>Don't open</strong> the door.</li>
            <li><strong>Para ser más educado:</strong> <strong>Please,</strong> open the door.</li>
        </ul>
    </div>

@endsection