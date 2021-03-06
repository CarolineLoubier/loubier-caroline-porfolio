/** Composante Header */
export default class Header {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;
    this.html = document.documentElement;
    this.initNavMobile();
    this.clickElementNav();
  }

  /**
   * Méthode d'initialisation du menu mobile
   */
  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');
    toggle.addEventListener('click', this.onToggleleNav.bind(this));
  }

  /**
   * Méthode qui permet d'alterner entre le menu mobile et desktop
   */
  onToggleleNav() {
    this.html.classList.toggle('nav-is-active');
  }

  clickElementNav() {
    let navElements = this.element.querySelectorAll('.nav__item');
    for (let i = 0; i < navElements.length; i++) {
      const navElement = navElements[i];
      navElement.addEventListener('click', this.onToggleleNav.bind(this));
    }
  }
}
