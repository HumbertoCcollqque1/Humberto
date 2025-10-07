{{--
|--------------------------------------------------------------------------
| Vista del Nivel A2
|--------------------------------------------------------------------------
|
| Contiene todo el material de gramática para el nivel A2.
| Cada sección se basa en los conocimientos del A1 y los expande.
|
--}}

@extends('layout')

@section('title', 'Nivel A2 - Consolidación de la Gramática Inglesa')

@section('content')

    <div class="level-header">
        <h2>Nivel A2: Consolidación y Precisión</h2>
        <p>En este nivel, afianzarás tu conocimiento y aprenderás a expresarte con más matices, conectando ideas y describiendo experiencias pasadas y futuras.</p>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 1. Present Perfect vs. Past Simple
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>1. Present Perfect vs. Past Simple</h3>
        <p>Esta es una de las diferencias más importantes en el inglés. Distingue entre una acción terminada en un momento concreto y una experiencia pasada sin fecha específica.</p>

        <h4>Present Perfect (Simple)</h4>
        <p><strong>Uso:</strong> Para hablar de <strong>experiencias de vida</strong> (sin decir cuándo) o acciones pasadas que tienen una <strong>conexión con el presente</strong>.</p>
        <p><strong>Estructura:</strong> Sujeto + <strong>have/has</strong> + Participio Pasado (Past Participle).</p>
        <ul>
            <li>I <strong>have seen</strong> that movie. (La he visto, es una experiencia en mi vida).</li>
            <li>She <strong>has lost</strong> her keys. (Las ha perdido y, como resultado, ahora no puede entrar).</li>
        </ul>
        <p><strong>Marcadores comunes:</strong> `for` (durante), `since` (desde), `ever`, `never`, `already`, `just`, `yet`.</p>
        <ul>
            <li>He has lived here <strong>for</strong> ten years. (Indica duración hasta ahora).</li>
            <li>I haven't seen him <strong>since</strong> 2020. (Indica un punto de inicio en el pasado).</li>
        </ul>

        <h4>Past Simple</h4>
        <p><strong>Uso:</strong> Para acciones que ocurrieron y terminaron en un <strong>momento específico del pasado</strong>.</p>
        <p><strong>Estructura:</strong> Sujeto + Verbo en Pasado (-ed o irregular).</p>
        <ul>
            <li>I <strong>saw</strong> that movie <strong>last night</strong>. (Momento específico: anoche).</li>
            <li>She <strong>lost</strong> her keys <strong>yesterday</strong>. (Momento específico: ayer).</li>
        </ul>

        <div class="tip">
            <strong>Clave para diferenciarlos:</strong> Si puedes preguntar "¿Cuándo?" y la respuesta es un tiempo pasado específico (yesterday, last week, in 2010), usa <strong>Past Simple</strong>. Si no importa cuándo, o la acción continúa o tiene un resultado ahora, usa <strong>Present Perfect</strong>.
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 2. Past Continuous
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>2. Past Continuous</h3>
        <p>Se usa para describir una <strong>acción que estaba en progreso en un momento específico del pasado</strong>. Es como una "foto" de una acción a medio hacer.</p>
        <p><strong>Estructura:</strong> Sujeto + <strong>was/were</strong> + Verbo-<strong>ing</strong>.</p>
        <ul>
            <li>Yesterday at 8 PM, I <strong>was watching</strong> TV. (A esa hora exacta, la acción estaba ocurriendo).</li>
        </ul>

        <h4>Interrupciones con `when` y `while`</h4>
        <p>Es muy común usar el Past Continuous junto con el Past Simple para mostrar que una acción larga fue interrumpida por una corta.</p>
        <ul>
            <li><strong>Acción larga (Past Continuous):</strong> I <strong>was reading</strong> a book...</li>
            <li><strong>Acción corta que interrumpe (Past Simple):</strong> ...when the phone <strong>rang</strong>.</li>
        </ul>
        <p><strong>While (mientras):</strong> Se usa con acciones largas y simultáneas (dos Past Continuous).</p>
        <ul>
            <li>I <strong>was cooking</strong> dinner <strong>while</strong> my son <strong>was doing</strong> his homework.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 3. Formas de Futuro (Repaso y Expansión)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>3. Expresar el Futuro: `will` vs. `be going to` vs. `Present Continuous`</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Forma Verbal</th>
                        <th>Uso Principal</th>
                        <th>Ejemplo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>will / 'll</strong></td>
                        <td>Decisiones espontáneas, predicciones, promesas, ofrecimientos.</td>
                        <td>"It's cold in here." -> "I'<strong>ll close</strong> the window."</td>
                    </tr>
                    <tr>
                        <td><strong>be going to</strong></td>
                        <td>Planes e intenciones futuras (ya decididas).</td>
                        <td>We <strong>are going to buy</strong> a new car next month.</td>
                    </tr>
                    <tr>
                        <td><strong>Present Continuous</strong></td>
                        <td><strong>Arreglos</strong> o citas futuras (con fecha, hora o lugar definidos).</td>
                        <td>I'<strong>m meeting</strong> Sarah for lunch on Friday. (Ya lo hemos acordado).</td>
                    </tr>
                    <tr>
                        <td><strong>Present Simple</strong></td>
                        <td>Horarios fijos (trenes, aviones, clases, eventos públicos).</td>
                        <td>The train <strong>leaves</strong> at 9 AM tomorrow.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 4. Verbos Modales
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>4. Verbos Modales (Modal Verbs)</h3>
        <p>Los modales expresan certeza, posibilidad, obligación, etc. Siempre van seguidos de un verbo en infinitivo (sin 'to').</p>
        <ul>
            <li><strong>Obligación Fuerte:</strong>
                <ul>
                    <li><strong>must:</strong> Obligación personal o regla fuerte. (I <strong>must</strong> finish this today).</li>
                    <li><strong>have to:</strong> Obligación externa, una regla de fuera. (You <strong>have to</strong> wear a uniform at school).</li>
                </ul>
            </li>
            <li><strong>Consejo:</strong>
                <ul>
                    <li><strong>should:</strong> Es una buena idea. (You <strong>should</strong> see a doctor).</li>
                </ul>
            </li>
            <li><strong>Posibilidad:</strong>
                <ul>
                    <li><strong>may/might/could:</strong> Quizás, es posible. `May` es un poco más formal/probable que `might`. (It <strong>might</strong> rain later. / He <strong>could</strong> be at home).</li>
                </ul>
            </li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 5. Cuantificadores (Cantidad)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>5. Expresar Cantidad</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Cuantificador</th>
                        <th>Uso con Contables (friends, books)</th>
                        <th>Uso con Incontables (money, time)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>much / many</strong></td>
                        <td>How <strong>many</strong> friends do you have? (Preguntas/Negativas)</td>
                        <td>I don't have <strong>much</strong> time. (Preguntas/Negativas)</td>
                    </tr>
                    <tr>
                        <td><strong>a lot of / lots of</strong></td>
                        <td colspan="2">Se usa en <strong>afirmativas</strong> con ambos. (I have <strong>a lot of</strong> books. / There is <strong>a lot of</strong> sugar.)</td>
                    </tr>
                    <tr>
                        <td><strong>a few / a little</strong></td>
                        <td><strong>a few</strong> friends (unos pocos, cantidad pequeña pero positiva)</td>
                        <td><strong>a little</strong> money (un poco, cantidad pequeña pero positiva)</td>
                    </tr>
                    <tr>
                        <td><strong>few / little</strong></td>
                        <td><strong>few</strong> friends (pocos, casi ninguno, sentido negativo)</td>
                        <td><strong>little</strong> time (poco, casi nada, sentido negativo)</td>
                    </tr>
                    <tr>
                        <td><strong>some / any / no</strong></td>
                        <td colspan="2"><strong>some</strong> (afirmativas), <strong>any</strong> (preguntas/negativas), <strong>no/none</strong> (para indicar cero cantidad de forma afirmativa: I have <strong>no</strong> money.)</td>
                    </tr>
                    <tr>
                        <td><strong>too / enough</strong></td>
                        <td colspan="2"><strong>too</strong> much/many (demasiado), <strong>not enough</strong> (no suficiente). (This is <strong>too</strong> expensive. / I don't have <strong>enough</strong> money.)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 6. Gerundio vs. Infinitivo
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>6. Gerundio (-ing) vs. Infinitivo (to + verbo)</h3>
        <p>Algunos verbos van seguidos de gerundio, otros de infinitivo. ¡Es una cuestión de memorización!</p>
        <ul>
            <li><strong>Verbos seguidos de Gerundio (-ing):</strong> `enjoy`, `finish`, `mind`, `suggest`, `avoid`, `love`, `like`, `hate`.
                <ul>
                    <li>I <strong>enjoy reading</strong> books.</li>
                </ul>
            </li>
            <li><strong>Verbos seguidos de Infinitivo (to...):</strong> `want`, `need`, `decide`, `hope`, `plan`, `promise`, `learn`.
                <ul>
                    <li>She <strong>wants to learn</strong> Japanese.</li>
                </ul>
            </li>
            <li><strong>`like`, `love`, `hate` pueden usar ambos</strong> con poca diferencia de significado.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 7. Oraciones Relativas (Defining Relative Clauses)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>7. Oraciones Relativas: `who`, `which`, `that`, `where`, `when`</h3>
        <p>Se usan para dar información esencial sobre un sustantivo, para identificar de qué o quién estamos hablando.</p>
        <ul>
            <li><strong>who / that:</strong> para personas. -> A doctor is a person <strong>who helps</strong> sick people.</li>
            <li><strong>which / that:</strong> para cosas. -> This is the book <strong>which I bought</strong> yesterday.</li>
            <li><strong>where:</strong> para lugares. -> A library is a place <strong>where you can read</strong> books.</li>
            <li><strong>when:</strong> para tiempos. -> Summer is the season <strong>when it's hot</strong>.</li>
        </ul>
        <div class="tip">
            <strong>Consejo:</strong> `that` es muy flexible y puede reemplazar a `who` y `which` en la mayoría de los casos en el habla informal.
        </div>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 8. Comparaciones Avanzadas
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>8. Comparaciones Avanzadas</h3>
        <ul>
            <li><strong>as...as (tan...como):</strong> para indicar igualdad. -> She is <strong>as tall as</strong> her brother.</li>
            <li><strong>not as...as (no tan...como):</strong> para indicar desigualdad. -> This car is <strong>not as expensive as</strong> that one.</li>
            <li><strong>the same as (lo mismo que):</strong> -> Your phone is <strong>the same as</strong> mine.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 9. Voz Pasiva Básica
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>9. La Voz Pasiva (Básica)</h3>
        <p>Se usa cuando el objeto de la acción es más importante que el sujeto, o cuando no sabemos quién hizo la acción. Es común en noticias, recetas y anuncios.</p>
        <p><strong>Estructura:</strong> Objeto + <strong>verbo "to be" (is/are/was/were)</strong> + Participio Pasado.</p>
        <ul>
            <li><strong>Activa:</strong> Shakespeare <strong>wrote</strong> Hamlet. (El foco está en Shakespeare).</li>
            <li><strong>Pasiva:</strong> Hamlet <strong>was written</strong> by Shakespeare. (El foco está en Hamlet).</li>
        </ul>
        <ul>
            <li>(Presente) English <strong>is spoken</strong> here.</li>
            <li>(Pasado) My car <strong>was stolen</strong> last night.</li>
        </ul>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 10. Reported Speech (Básico)
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>10. Estilo Indirecto (Reported Speech)</h3>
        <p>Se usa para contar lo que otra persona dijo, pero sin usar sus palabras exactas. Implica cambios en los tiempos verbales, pronombres y expresiones de tiempo.</p>
        <p><strong>Cambio clave:</strong> El tiempo verbal "da un paso atrás" hacia el pasado.</p>
        <ul>
            <li><strong>Directo (Present Simple):</strong> "I <strong>am</strong> happy," she said.</li>
            <li><strong>Indirecto (Past Simple):</strong> She said that she <strong>was</strong> happy.</li>
        </ul>
        <ul>
            <li><strong>Directo (Past Simple):</strong> "I <strong>saw</strong> the movie," he told me.</li>
            <li><strong>Indirecto (Past Perfect):</strong> He told me that he <strong>had seen</strong> the movie.</li>
        </ul>
        <p><strong>say vs. tell:</strong> `say` no necesita un objeto (`she said...`). `tell` necesita un objeto (`she told <strong>me</strong>...`).</p>
        <p><strong>Cambios de tiempo:</strong> `today` -> `that day`, `tomorrow` -> `the next day`, `yesterday` -> `the day before`.</p>
    </div>

    {{--
    |--------------------------------------------------------------------------
    | 11. Condicionales 0 y 1
    |--------------------------------------------------------------------------
    --}}
    <div class="grammar-section">
        <h3>11. Condicionales: Cero y Primero</h3>
        <h4>Zero Conditional (Condicional Cero)</h4>
        <p><strong>Uso:</strong> Verdades universales, hechos científicos, cosas que siempre son verdad.</p>
        <p><strong>Estructura:</strong> If + Present Simple, ... Present Simple.</p>
        <ul>
            <li>If you <strong>heat</strong> water to 100 degrees, it <strong>boils</strong>.</li>
        </ul>

        <h4>First Conditional (Primer Condicional)</h4>
        <p><strong>Uso:</strong> Situaciones futuras reales o probables.</p>
        <p><strong>Estructura:</strong> If + Present Simple, ... will + Infinitivo.</p>
        <ul>
            <li>If it <strong>rains</strong> tomorrow, I <strong>will stay</strong> at home.</li>
        </ul>
    </div>

@endsection