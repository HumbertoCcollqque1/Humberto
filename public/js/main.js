/*
|--------------------------------------------------------------------------
| Lógica Interactiva Principal (main.js)
|--------------------------------------------------------------------------
|
| Este archivo contiene el código JavaScript para añadir interactividad
| a los ejercicios de la plataforma de gramática.
|
| El evento DOMContentLoaded asegura que el script se ejecute solo después
| de que todo el HTML de la página se haya cargado completamente.
|
*/

document.addEventListener('DOMContentLoaded', () => {

    /**
     * Función para gestionar los ejercicios de rellenar huecos.
     *
     * Busca todos los contenedores de ejercicios con el atributo `data-exercise="fill-in-the-blanks"`.
     * Para cada uno, añade un event listener al botón de "Verificar" para comprobar
     * las respuestas del usuario.
     */
    function initializeFillInTheBlanks() {
        // Selecciona todos los contenedores de ejercicios de este tipo
        const exerciseContainers = document.querySelectorAll('[data-exercise="fill-in-the-blanks"]');

        exerciseContainers.forEach(container => {
            const checkButton = container.querySelector('.check-button');
            const inputs = container.querySelectorAll('.answer-input');
            const feedbackArea = container.querySelector('.feedback-area');

            if (!checkButton || !inputs.length) {
                return; // Si no hay botón o inputs, no hace nada.
            }

            checkButton.addEventListener('click', () => {
                let allCorrect = true;
                let correctCount = 0;

                inputs.forEach(input => {
                    const userAnswer = input.value.trim().toLowerCase();
                    const correctAnswer = input.dataset.correctAnswer.toLowerCase();

                    // Limpia el feedback anterior
                    input.classList.remove('correct', 'incorrect');

                    if (userAnswer === correctAnswer) {
                        input.classList.add('correct');
                        correctCount++;
                    } else {
                        input.classList.add('incorrect');
                        allCorrect = false;
                    }
                });

                // Muestra un mensaje de feedback general
                if (feedbackArea) {
                    if (allCorrect) {
                        feedbackArea.textContent = '¡Excelente! Todas tus respuestas son correctas.';
                        feedbackArea.className = 'feedback-area feedback-correct';
                    } else {
                        feedbackArea.textContent = `Has acertado ${correctCount} de ${inputs.length}. ¡Sigue intentándolo!`;
                        feedback-area.className = 'feedback-area feedback-incorrect';
                    }
                    feedbackArea.style.display = 'block';
                }
            });
        });
    }

    // --- Inicializar todos los módulos de ejercicios ---
    initializeFillInTheBlanks();

});

/*
|--------------------------------------------------------------------------
| Estilos CSS Adicionales para la Interactividad
|--------------------------------------------------------------------------
|
| Aunque la mayoría de los estilos están en `styles.css`, es útil tener
| estos estilos directamente relacionados con la funcionalidad de JS aquí
| o añadirlos al CSS principal.
|
| .answer-input.correct {
|     border-color: #28a745;
|     background-color: #e9f7ef;
| }
|
| .answer-input.incorrect {
|     border-color: #dc3545;
|     background-color: #f8d7da;
| }
|
| .feedback-area {
|      margin-top: 1rem;
|      padding: 1rem;
|      border-radius: 5px;
|      display: none; /* Oculto por defecto */
| }
|
| .feedback-correct {
|      background-color: #d4edda;
|      color: #155724;
|      border: 1px solid #c3e6cb;
| }
|
| .feedback-incorrect {
|      background-color: #f8d7da;
|      color: #721c24;
|      border: 1px solid #f5c6cb;
| }
|
*/