document.addEventListener('DOMContentLoaded', () => {
    
    const quizForm = document.getElementById('quiz-form');
    const scoreDisplay = document.getElementById('score-display');
    
    if (quizForm) {
        quizForm.addEventListener('submit', (event) => {
            event.preventDefault();
            
            let score = 0;
            
            const q1 = document.querySelector('input[name="q1"]:checked').value;
            const q2 = document.querySelector('input[name="q2"]:checked').value;
            const q3 = document.querySelector('input[name="q3"]:checked').value;
            
            if (q1 === 'non') {
                score = score + 1;
            }
            
            if (q2 === 'oui') {
                score = score + 1;
            }
            
            if (q3 === 'non') {
                score = score + 1;
            }
            
            scoreDisplay.textContent = "Votre score est de " + score + " / 3";
        });
    }

});