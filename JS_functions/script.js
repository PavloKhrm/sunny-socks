// Находим элементы на странице
const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const closeModalButton = document.getElementById('closeModalButton');
const contactForm = document.getElementById('contact-form'); // Add this line

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

// Добавьте обработчик события для отправки формы
contactForm.addEventListener('submit', (e) => {
    e.preventDefault(); // Prevent the default form submission

    // Place your form validation code here
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');

    // Add your form validation logic here
    if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
        alert('Please fill in all fields');
        return;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(emailInput.value)) {
        alert('Please enter a valid email address');
        return;
    }

    // If all validation checks pass, you can submit the form here
    // You may want to use AJAX to send the form data to your server for processing
});
