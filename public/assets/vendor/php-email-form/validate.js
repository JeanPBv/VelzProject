(function () {
  "use strict";

  const routeContactsStore = document.getElementById('contact-form').getAttribute('data-url');

  document.querySelector('.php-email-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name-field').value;
    const email = document.getElementById('email-field').value;
    const subject = document.getElementById('subject-field').value;
    const message = document.getElementById('message-field').value;

    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('subject', subject);
    formData.append('message', message);

    fetch(routeContactsStore, {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.message) {
        alert(data.message);
        document.querySelector('.php-email-form').reset(); 
      }
    })
    .catch(error => {
      console.error("Error al enviar el mensaje:", error);
      alert("Hubo un error al enviar el mensaje.");
    });
  });

})();
