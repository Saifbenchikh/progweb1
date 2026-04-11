document.addEventListener('DOMContentLoaded', () => {
    
    const quizForm = document.getElementById('quiz-form');
    
    if (quizForm) {
        quizForm.addEventListener('submit', (event) => {
            event.preventDefault();
            alert("Le formulaire est intercepté ! On calculera le score à la prochaine étape.");
        });
    }

});