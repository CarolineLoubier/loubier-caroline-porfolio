import Swiper from 'swiper/bundle';

/** Composante Carousel de Timtools */
export default class Carousel {
  /**
   * Méthode constructeur
   * @param {HTMLElement} element - Élément HTML sur lequel la composante est instanciée
   */
  constructor(element) {
    this.element = element;

    // Options par défaut pour la librairie Swiper
    this.defaultOptions = {
      slidesPerView: 1.2,
      spaceBetween: 20,
      centeredSlides: true,
      loop: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 5,
          allowTouchMove: false,
          centeredSlides: false,
        },
      },
    };

    this.init();
  }

  /**
   * Méthode d'initialisation
   */
  init() {
    let options = this.defaultOptions;

    // Gestion des paramètres différents lorsqu'on veut avoir
    // 2 slides visibles sur grand écran et une seule sur petit écran
    if (this.element.dataset.carousel == 'split') {
      options = {
        ...this.defaultOptions,
        ...{
          slidesPerView: 1,
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
          },
        },
      };
    }

    // Gestion des paramètres différents lorsqu'on veut avoir
    // 2 slides visibles sur grand écran et une seule sur petit écran
    if (this.element.dataset.carousel == 'scroll') {
      options = {
        ...this.defaultOptions,
        ...{
          // slidesPerView: 1,
          scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
          },
          navigation: false,
          pagination: false,
        },
      };
    }

    if (this.element.dataset.carousel == 'petit') {
      options = {
        ...this.defaultOptions,
        ...{
          slidesPerView: 2.5,

          navigation: false,
          pagination: false,
          centeredSlides: true,
          loop: false,
          spaceBetween: 150,
          breakpoints: {
            768: {
              slidesPerView: 4,
            },
            1024: {
              slidesPerView: 6,
              allowTouchMove: false,
              centeredSlides: false,
            },
          },
        },
      };
    }

    // Instanciation d'un nouveau Swiper avec les options
    new Swiper(this.element, options);
  }
}
