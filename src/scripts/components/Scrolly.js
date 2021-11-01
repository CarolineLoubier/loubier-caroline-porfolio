/** Composante Scrolly de Tomate */
export default class Scrolly {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;
    this.options = {
      rootMargin: '0px 0px 0px 0px',
    };
    this.init();
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    // On instancie un nouvel observer
    this.observer = new IntersectionObserver(
      this.watch.bind(this),
      this.options
    );

    // L'observer observe tous les éléments avec l'attribut data-scrolly
    const items = this.element.querySelectorAll('[data-scrolly]');
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      this.observer.observe(item);
    }
  }

  /*
   * Méthode qui active la classe d'état is-active si l'élément intercepte la zone et déclenche l'animation
   */
  watch(entries) {
    for (let i = 0; i < entries.length; i++) {
      const entry = entries[i];
      const target = entry.target;

      if (entry.isIntersecting) {
        target.classList.add('is-active');
        this.observer.unobserve(target);
      } else {
        target.classList.remove('is-active');
      }
    }
  }
}
