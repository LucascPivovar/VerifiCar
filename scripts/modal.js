
// Função de clique para iniciar a exportação do PDF
document.getElementById('export-pdf').addEventListener('click', () => {
// Exibe o modal de carregamento
    document.getElementById('loading-modal').style.display = 'flex';

    // Simula o tempo de exportação (2 segundos)
    setTimeout(() => {
        // Oculta o modal de carregamento e exibe o modal de sucesso
        document.getElementById('loading-modal').style.display = 'none';
        document.getElementById('success-modal').style.display = 'flex';
    }, 2000); // 2 segundos para simulação
});

window.addEventListener('click', (event) => {
    const loadingModal = document.getElementById('loading-modal');
    const successModal = document.getElementById('success-modal');
    
    if (event.target === loadingModal) {
        loadingModal.style.display = 'none';
    }
    if (event.target === successModal) {
        successModal.style.display = 'none';
    }
});