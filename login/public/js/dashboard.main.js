// JavaScript Document


new Vue({
  el: '#app',
  data: {
    position: 0,

    slides: [
      {
        id: 1,
        src: 'images/reactr_bck.png',
        title: 'Reactr',
        desc:
          'Internal, student and project information',
        icon: 'images/reactr_icon.png'
      },
      {
        id: 2,
        src: 'images/research_bck.png',
        title: 'Research',
        desc:
          'Documentation, reports and contracts',
        icon: 'images/research_icon.png'
      },
      {
        id: 3,
        src: 'images/payroll_bck.png',
        title: 'Payroll',
        desc:
          'Student and project information',
        icon: 'images/payroll_icon.png'
      },
      {
        id: 4,
        src: 'images/assets_bck.png',
        title: 'Assets',
        desc:
          'Design, images and other assets',
        icon: 'images/assets_icon.png'
      },
      {
        id: 5,
        src: 'images/doc_bck.png',
        title: 'Documents',
        desc:
          'College-wide documentation',
        icon: 'images/doc_icon.png'
      },
      {
        id: 6,
        src: 'assets/reactr_animation_test.mp4',
        title: 'Accounts',
        desc:
          'User and information settings',
          icon: 'images/account_icon.png'
      }
    ],

    sliderStyles: {
      width: '',
      transform: ''
    }
  },

  mounted() {
  	var slides = document.querySelectorAll('.slide');
    this.sliderStyles.width = `calc(100vw * ${this.slides.length})`;
    // this.sliderStyles.transform = 'translateX(0)';
    slides[0].classList.add("active");
    document
      .querySelector('.slide-number:nth-child(1)')
      .classList.add('js-active');
  },

  methods: {
    pickSlide(slideId) {
      document
        .querySelectorAll('.slide-number')
        .forEach(x => x.classList.remove('js-active'));
      document
        .querySelector(`.slide-number:nth-child(${slideId})`)
        .classList.add('js-active'),
        window.location.href = 'dashboardReactr';


        console.log(slideId);

        // var studentsPage = location.href;

        // studentsPage(function(){
        //   window.location.href = 'test_page.html';
        // });

      if (slideId - 1 === this.position) {
        return false;
      } else {
        this.position = slideId - 1;
      }

      var slides = document.querySelectorAll('.slide');

      // setting the initial value of i to 0.
      // if i is less than the amount of items in the slides array than the function runs once
      // after the function runs once i incriments by 1
      // in summary: the loop continues until i is no longer less than the amount of items in the slides array, then it stops.
      for (i = 0; i < slides.length; i++) {
	    slides[i].classList.remove("active");
		}

	slides[this.position].classList.add("active");

      // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
    },

    prevSlide() {
      if (this.position !== 0) {
        document
          .querySelectorAll('.slide-number')
          .forEach(x => x.classList.remove('js-active'));
        document
          .querySelector(`.slide-number:nth-child(${this.position})`)
          .classList.add('js-active');
      } else {
        document
          .querySelectorAll('.slide-number')
          .forEach(x => x.classList.remove('js-active'));
        document
          .querySelector(`.slide-number:nth-child(${this.slides.length})`)
          .classList.add('js-active');
      }

      if (this.position === 0) {
        this.position = this.slides.length - 1;
      } else if (this.position > 0) {
        this.position -= 1;
      }
      // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
    },

    nextSlide() {
      if (this.position !== this.slides.length - 1) {
        document
          .querySelectorAll('.slide-number')
          .forEach(x => x.classList.remove('js-active'));
        document
          .querySelector(`.slide-number:nth-child(${this.position + 2})`)
          .classList.add('js-active');
      } else {
        document
          .querySelectorAll('.slide-number')
          .forEach(x => x.classList.remove('js-active'));
        document
          .querySelector(`.slide-number:nth-child(1)`)
          .classList.add('js-active');
      }

      if (this.position === this.slides.length - 1) {
        this.position = 0;
      } else if (this.position < this.slides.length - 1) {
        this.position += 1;
      }
      // this.sliderStyles.transform = `translateX(-${100 * this.position}vw)`;
    }
  }
});
