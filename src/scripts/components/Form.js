/** Composante Form de TimTools */
export default class Form {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;

    // Les éléments du formulaire
    this.formElements = this.element.elements;

    this.init();
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    // Empêche la validation par défaut du navigateur.
    this.element.setAttribute('novalidate', '');

    // Boucle sur tous les éléments du formulaire, s'il sont requis, la méthode validateInput est appelée.
    for (let i = 0; i < this.formElements.length; i++) {
      const input = this.formElements[i];

      if (input.required) {
        input.addEventListener('input', this.validateInput.bind(this));
      }
    }

    // Ajoute le clic sur le bouton valider
    this.element.addEventListener('submit', this.onSubmit.bind(this));
  }

  onSubmit(event) {
    // Appelle la méthode de confirmation si tout est valide
    if (this.validate()) {
      console.log('succes');
      // this.showConfirmation();
    } else {
      console.log('fail');
      event.preventDefault();
    }
  }
  /**
   * method description
   * @param {boolean} name - status de validation
   */
  validate() {
    let isValid = true;
    for (let i = 0; i < this.formElements.length; i++) {
      const input = this.formElements[i];

      if (input.required && !this.validateInput(input)) {
        isValid = false;
      }
    }

    return isValid;
  }

  //
  validateInput(event) {
    const input = event.currentTarget || event;
    if (input.validity.valid) {
      this.removeError(input);
    } else {
      this.addError(input);
    }

    return input.validity.valid;
  }

  // Ajoute la classe error pour changer les styles lors d'une erreur
  addError(input) {
    const container =
      input.closest('[data-input-container]') || input.closest('.input');
    container.classList.add('error');
  }

  // Enlève la classe d'erreur pour changer les styles lorsque le champs est valide
  removeError(input) {
    const container =
      input.closest('[data-input-container]') || input.closest('.input');
    container.classList.remove('error');
  }

  // Afficher le message de confirmation
  /* showConfirmation() {
    this.element.classList.add('is-sent');
  }*/
}
