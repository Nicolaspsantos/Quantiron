document.addEventListener('DOMContentLoaded', function() {
    const formMessage = document.getElementById('form-message');
    
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const formSection = document.getElementById('contato');

    if (status) {
        if (formSection) {
             formSection.scrollIntoView({ behavior: 'smooth' });
        }

        formMessage.classList.remove('hidden');

        if (status === 'sucesso') {
            formMessage.textContent = 'Sua solicitação foi enviada com sucesso! Em breve entraremos em contato.';
            formMessage.classList.add('success');
            formMessage.classList.remove('error');
            
        } else if (status === 'erro') {
            const msg = urlParams.get('msg') || 'Ocorreu um erro desconhecido ao processar sua solicitação.';
            formMessage.textContent = 'Erro: ' + decodeURIComponent(msg.replace(/\+/g, ' '));
            formMessage.classList.add('error');
            formMessage.classList.remove('success');
        }
        
        history.replaceState({}, document.title, window.location.pathname); 

        setTimeout(() => {
            formMessage.classList.add('hidden');
        }, 8000);
    }
});
