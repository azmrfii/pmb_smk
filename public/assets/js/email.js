/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById('contact-form'),
      contactMessage = document.getElementById('contact-message')

const sendEmail = (e) => {
    e.preventDefault()

    emailjs.sendForm('service_pmb', 'template_yivqxph', '#contact-form', 'Bf-tWl0txEwNoV1Sv')
        .then(() => {
            contactMessage.textContent = 'Message send successfully ^^'

            setTimeout(() =>{
                contactMessage.textContent = ''
            }, 5000)

            contactForm.reset()

        }, () => {
            contactMessage.textContent = 'Message not send (error)'
        })
} 

contactForm.addEventListener('submit', sendEmail)