/** Composante Cursor de TimTools */
export default class Cursor {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;
    this.init();
    this.innerCursor = element.querySelector('.inner-cursor');
    this.outerCursor = element.querySelector('.outer-cursor');
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    console.log('Nouvelle instance de la composante -> Cursor');

    let links = document.querySelectorAll('a, button, input, textarea');
    for (let i = 0; i < links.length; i++) {
      const link = links[i];
      link.addEventListener('mouseover', this.growCursor.bind(this));
      link.addEventListener('mouseout', this.shrinkCursor.bind(this));
    }

    document.addEventListener('mousemove', this.moveCursor.bind(this));
  }

  moveCursor(e) {
    let posX = e.clientX;
    let posY = e.clientY;

    this.innerCursor.style.left = `${posX}px`;
    this.innerCursor.style.top = `${posY}px`;

    this.outerCursor.style.left = `${posX}px`;
    this.outerCursor.style.top = `${posY}px`;
  }

  growCursor() {
    this.innerCursor.classList.add('grow');
  }

  shrinkCursor() {
    this.innerCursor.classList.remove('grow');
  }
}
