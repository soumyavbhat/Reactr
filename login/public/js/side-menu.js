
// new Vue({
//   el: 'app',
//   data: {
//     position: 0,

//     slides: [
//       {
//         menuId: 1,
//         menuIcon: 'images/home_icon.png'
//       },
//       {
//         menuId: 2,
//         title: 'Reactr',
//         src: 'images/doc_bck.png',
//         menuIcon: 'images/reactr_icon.png'
//       },
//       {
//         menuId: 3,
//         title: 'Research',
//         menuIcon: 'images/research_icon.png'
//       },
//       {
//         menuId: 4,
//         title: 'Payroll',
//         menuIcon: 'images/payroll_icon.png'
//       },
//       {
//         menuId: 5,
//         title: 'Assets',
//         menuIcon: 'images/assets_icon.png'
//       },
//       {
//         menuId: 6,
//         title: 'Documents',
//         menuIcon: 'images/doc_icon.png'
//       },
//       {
//         menuId: 7,
//         title: 'Settings',
//         menuIcon: 'images/settings_icon.png'
//       }
//     ],

//       sliderStyles: {
//       width: '',
//       transform: ''
//     }
//   },

// //   mounted() {
// //     document
// //       .querySelector('.menu-buttons:nth-child(2)')
// //       .classList.add('menu-active');
// //   },


// //     methods: {
// //     pickMenu(menuId) {
// //       document
// //         .querySelectorAll('.menu-buttons')
// //         .forEach(x => x.classList.remove('menu-active'));
// //       document
// //         .querySelector(`.menu-buttons:nth-child(${menuId})`)
// //         .classList.add('menu-active');

// //       if (menuId - 1 === this.position) {
// //         return false;
// //       } else {
// //         this.position = menuId - 1;
// //       }
// //   }

// // }

// // })

//  mounted() {
//     var slides = document.querySelectorAll('.slide');
//     this.sliderStyles.width = `calc(100vw * ${this.slides.length})`;
//     // this.sliderStyles.transform = 'translateX(0)';
//     slides[0].classList.add("active");
//     document
//       .querySelector('.slide-number:nth-child(1)')
//       .classList.add('js-active');
//   },

//   methods: {
//     pickSlide(slideId) {
//       document
//         .querySelectorAll('.slide-number')
//         .forEach(x => x.classList.remove('js-active'));
//       document
//         .querySelector(`.slide-number:nth-child(${slideId})`)
//         .classList.add('js-active');

//       if (slideId - 1 === this.position) {
//         return false;
//       } else {
//         this.position = slideId - 1;
//       }

//       var slides = document.querySelectorAll('.slide');

//       // setting the initial value of i to 0. 
//       // if i is less than the amount of items in the slides array than the function runs once
//       // after the function runs once i incriments by 1
//       // in summary: the loop continues until i is no longer less than the amount of items in the slides array, then it stops.
//       for (i = 0; i < slides.length; i++) { 
//       slides[i].classList.remove("active");
//     }
  
//   slides[this.position].classList.add("active");

//       // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
//     },

//     prevSlide() {
//       if (this.position !== 0) {
//         document
//           .querySelectorAll('.slide-number')
//           .forEach(x => x.classList.remove('js-active'));
//         document
//           .querySelector(`.slide-number:nth-child(${this.position})`)
//           .classList.add('js-active');
//       } else {
//         document
//           .querySelectorAll('.slide-number')
//           .forEach(x => x.classList.remove('js-active'));
//         document
//           .querySelector(`.slide-number:nth-child(${this.slides.length})`)
//           .classList.add('js-active');
//       }

//       if (this.position === 0) {
//         this.position = this.slides.length - 1;
//       } else if (this.position > 0) {
//         this.position -= 1;
//       }
//       // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
//     },

//     nextSlide() {
//       if (this.position !== this.slides.length - 1) {
//         document
//           .querySelectorAll('.slide-number')
//           .forEach(x => x.classList.remove('js-active'));
//         document
//           .querySelector(`.slide-number:nth-child(${this.position + 2})`)
//           .classList.add('js-active');
//       } else {
//         document
//           .querySelectorAll('.slide-number')
//           .forEach(x => x.classList.remove('js-active'));
//         document
//           .querySelector(`.slide-number:nth-child(1)`)
//           .classList.add('js-active');
//       }

//       if (this.position === this.slides.length - 1) {
//         this.position = 0;
//       } else if (this.position < this.slides.length - 1) {
//         this.position += 1;
//       }
//       // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
//     }
//   }
// });
