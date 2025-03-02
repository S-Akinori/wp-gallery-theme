import $ from './jquery'
import { toggleMenu } from './modules/toggleMenu'
// import Swiper JS
import Swiper, {Navigation, Pagination, Autoplay, EffectFade, Thumbs} from 'swiper';
// import Swiper styles
import 'swiper/css';
import "swiper/css/effect-fade";
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/thumbs';
import { fadeIn } from './modules/fadeIn';
import { slideShow } from './modules/slideshow';
import { smoothScroll } from './modules/smoothScroll';

$(function() {
  fadeIn()
  toggleMenu()
  smoothScroll()
  // const fvSwiper = new Swiper('.fv-swiper', {
  //   effect: "fade",
  //   fadeEffect: {crossFade: true},
  //   modules: [EffectFade,Autoplay],
  //   loop: true,
  //   autoplay: {
  //     delay: 3000,
  //     disableOnInteraction: false,
  //   },
  // });
  const sliderThumbnail = new Swiper(".slider-thumbnail", {
    slidesPerView: 3, // サムネイルの枚数
  });
  const swiper = new Swiper('.slider', {
    modules: [Navigation, Pagination, Thumbs],
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: sliderThumbnail,
    },
  });
})