import Utils from '../utils/Utils';

export default class Modal {
  constructor(element) {
    this.element = element;
    this.modalId = this.element.dataset.modalId;
    this.init();
  }

  init() {
    this.element.addEventListener('click', this.open.bind(this));
    this.close = this.close.bind(this);
  }

  // On met à jour le contenu de la modale en récupérant l'attribut data-modal-title
  updateContent() {
    if (this.modalId == 'tpl-modal-photos') {
      this.modalElement.innerHTML = Utils.parseTemplate(
        this.modalElement.innerHTML,
        {
          title: this.element.dataset.modalTitle,
        }
      );
    }

    // On met à jour l'image en récupérant l'attribut source de l'élément cliqué
    const imgModal = this.modalElement.querySelector('.modal__img');
    const source = this.element.getAttribute('src');
    if (imgModal) {
      imgModal.setAttribute('src', source);
    }
  }

  // Appelle la méthode pour ouvrir la modale
  open(event) {
    event.preventDefault();
    this.appendModal();
  }

  // Ferme la modale après un certain temps pour voir l'animation
  close(event) {
    document.documentElement.classList.remove('modal-is-active');
    this.closeButton.removeEventListener('click', this.close);

    setTimeout(this.destroy.bind(this), 1000);
  }

  // Permet de fermer la modale avec le bouton escape
  closeEscape(event) {
    if (event.key == 'Escape') {
      document.documentElement.classList.remove('modal-is-active');
      this.closeButton.removeEventListener('click', this.close);
      document.removeEventListener('keydown', this.closeEscape.bind(this));

      setTimeout(this.destroy.bind(this), 1000);
    }
  }

  // Détruit la modale
  destroy() {
    this.modalElement.parentElement.removeChild(this.modalElement);
  }

  appendModal() {
    // Sélectionne la modale correspondant au data-modal-id
    const template = document.querySelector(`#${this.modalId}`);

    // S'il y en a une, on clone le template
    if (template) {
      this.modalElement = template.content.firstElementChild.cloneNode(true);

      this.updateContent();

      document.body.appendChild(this.modalElement);
      this.element.getBoundingClientRect();
      document.documentElement.classList.add('modal-is-active');

      this.closeButton = this.modalElement.querySelector('.js-close');
      this.closeButton.addEventListener('click', this.close);
      document.addEventListener('keydown', this.closeEscape.bind(this));
      this.modalElement
        .querySelector('.modal__scrim')
        .addEventListener('click', this.close);
    } else {
      console.log(`Le template avec le id ${this.modalId} n'existe pas`);
    }
  }
}
