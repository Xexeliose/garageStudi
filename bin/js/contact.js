   const constraints = {
       nom: {
           presence: { allowEmpty: false }
       },
       prenom: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       telephone: {
           presence: { allowEmpty: false },
       },
       sujet: {
           presence: { allowEmpty: false },
       },
       message: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         nom: form.elements.nom.value,
         prenom: form.elements.prenom.value,
         email: form.elements.email.value,
         telephone: form.elements.telephone.value,
         sujet: form.elements.sujet.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
