
const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const closeModalButton = document.getElementById('closeModalButton');
const contactForm = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');
const emailError = document.getElementById('emailError'); 

modal.style.display = 'none';

openModalButton.addEventListener('click', () => {
   if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
       alert('Please fill in all fields before submitting the form');
   } else if (!emailPattern.test(emailInput.value)) {
       alert('Please enter a valid email address');
   } else {
       modal.style.display = 'block';
   }
});


closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

emailInput.addEventListener('input', () => {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(emailInput.value)) {
        emailError.textContent = 'Please enter a valid email address';
    } else {
        emailError.textContent = '';
    }
});

contactForm.addEventListener('submit', (e) => {
    e.preventDefault(); 

   
    if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
        alert('Please fill in all fields');
        return;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(emailInput.value)) {
        alert('Please enter a valid email address');
        return;
    }

    modal.style.display = 'block';

    nameInput.value = '';
    emailInput.value = '';
    messageInput.value = '';
});





