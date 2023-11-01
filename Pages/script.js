// Находим элементы на странице
const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const closeModalButton = document.getElementById('closeModalButton');

// Закрыть модальное окно при загрузке страницы
modal.style.display = 'none';

// Открыть модальное окно
openModalButton.addEventListener('click', () => {
    modal.style.display = 'block';
});

// Закрыть модальное окно
closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Закрыть модальное окно при клике на фон
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});
