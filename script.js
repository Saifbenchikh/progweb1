document.addEventListener('DOMContentLoaded', () => {
    
    const quizForm = document.getElementById('quiz-form');
    const scoreDisplay = document.getElementById('score-display');
    const savedScore = localStorage.getItem('quizScore');
    
    if (savedScore !== null && scoreDisplay) {
        scoreDisplay.textContent = "Votre précédent score : " + savedScore + " / 3";
    }
    
    if (quizForm) {
        quizForm.addEventListener('submit', (event) => {
            event.preventDefault();
            
            let score = 0;
            
            const q1 = document.querySelector('input[name="q1"]:checked').value;
            const feedback1 = document.getElementById('feedback-q1');
            
            if (q1 === 'non') {
                score = score + 1;
                feedback1.textContent = "Bonne réponse !";
                feedback1.className = "feedback-msg correct";
            } else {
                feedback1.textContent = "Faux, le HTML est un langage de balisage.";
                feedback1.className = "feedback-msg incorrect";
            }
            
            const q2 = document.querySelector('input[name="q2"]:checked').value;
            const feedback2 = document.getElementById('feedback-q2');
            
            if (q2 === 'oui') {
                score = score + 1;
                feedback2.textContent = "Bonne réponse !";
                feedback2.className = "feedback-msg correct";
            } else {
                feedback2.textContent = "Faux, le CSS gère bien le style.";
                feedback2.className = "feedback-msg incorrect";
            }
            
            const q3 = document.querySelector('input[name="q3"]:checked').value;
            const feedback3 = document.getElementById('feedback-q3');
            
            if (q3 === 'non') {
                score = score + 1;
                feedback3.textContent = "Bonne réponse !";
                feedback3.className = "feedback-msg correct";
            } else {
                feedback3.textContent = "Faux, par défaut il s'exécute côté client.";
                feedback3.className = "feedback-msg incorrect";
            }
            
            scoreDisplay.textContent = "Votre score est de " + score + " / 3";
            localStorage.setItem('quizScore', score);
        });
    }

});