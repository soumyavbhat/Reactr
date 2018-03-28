
// JavaScript Document

var navigation = new Vue({
  el: '#app',
  data: {
    position: 0,

    slides: [
      {
        id: 1,
        title: 'Students',
        src: 'images/reactr_bck.png',
        icon: 'images/students_icon.png',
        menuIcon: 'images/home_icon.png',
        color: 'red',
        url: 'dashboard'
      },

      {
        id: 2,
        title: 'Reactr',
        menuTitle: 'Reactr',
        src: 'images/reactr_bck.png',
        icon: 'images/clients_icon.png',
        menuIcon: 'images/reactr_icon.png',
        subSlideMenu: [
          'Students',
          'Clients',
          'Projects',
          'Surveys',
          'Interviews'
        ]
      },

      {
        id: 3,
        title: 'Research',
        menuTitle: 'Research',
        src: 'images/research_bck.png',
        icon: 'images/projects_icon.png',
        menuIcon: 'images/research_icon.png',
        subSlideMenu: [
          'menu item 1',
          'menu item 2',
          'menu-item 3',
          'menu-item 4',
          'menu-item 5'
        ]
      },

      {
        id: 4,
        title: 'Payroll',
        menuTitle: 'Payroll',
        src: 'images/payroll_bck.png',
        icon: 'images/surveys_icon.png',
        menuIcon: 'images/payroll_icon.png',
        subSlideMenu: [
          'menu item 6',
          'menu item 7',
          'menu-item 8',
          'menu-item 9',
          'menu-item 10'
        ]
      },

      {
        id: 5,
        title: 'Assets',
        menuTitle: 'Assets',
        src: 'images/assets_bck.png',
        icon: 'images/interviews_icon.png',
        menuIcon: 'images/assets_icon.png',
        subSlideMenu: [
          'menu item 11',
          'menu item 12',
          'menu-item 13',
          'menu-item 14',
          'menu-item 15'
        ]
      },

      {
        id: 6,
        title: 'Documents',
        menuTitle: 'Documents',
        menuIcon: 'images/doc_icon.png',
        src: 'images/doc_bck.png',
        subSlideMenu: [
          'menu item 16',
          'menu item 17',
          'menu-item 18',
          'menu-item 19',
          'menu-item 20'
        ]
      },

      {
        id: 7,
        title: 'Settings',
        menuTitle: 'Settings',
        menuIcon: 'images/settings_icon.png',
        src: 'images/research_bck.png',
        subSlideMenu: [
          'menu item 21',
          'menu item 22',
          'menu-item 23',
          'menu-item 24',
          'menu-item 25'
        ]
      },
    ],

    sliderStyles: {
      width: '',
      transform: ''
    }
  },


  // ===== Menus Are Mounted
  // =======================


  mounted() {

    // ===== This is selecting the active menu button when the page is opened

    document.querySelector('.menu-buttons:nth-child(2)').classList.add('menu-active');

    // ===== Add The active class to the first .slide element

    var slides = document.querySelectorAll('.slide');
    slides[0].classList.add("active");

    // ===== Add the .js-active class to the first sub menu item

    document.querySelector('.slide-number:nth-child(1)').classList.add('js-active');

  },


  // ===== Methods
  // =============


  methods: {


    // ===== Sidebar Menu Selection
    // ============================


    pickMenu(id) {


      // ===== For each sidebar menu item remove the menu active class

      document.querySelectorAll('.menu-buttons').forEach(x => x.classList.remove('menu-active'));

      // ===== For each sub menu item remove the .js-active class

      document.querySelectorAll('.slide-number').forEach(x => x.classList.remove('js-active'));


      // ===== Select the sidebar menu item that has been selected and add the .menu-active class

      document.querySelector(`.menu-buttons:nth-child(${id})`).classList.add('menu-active');

      // ===== Select the sub menu item that has been selected and add .js-active class

      document.querySelector(`.slide-number:nth-child(${0 + 1})`).classList.add('js-active');


      // ===== Setting this.position to the selected items menu id minus 1


      if (id - 1 === this.position) {
        return false;
      } else {
        this.position = id - 1;
      }


      // ===== Changing The Sub Menu Text


      var subSlideMenu = navigation.slides[id - 1].subSlideMenu;
      var subMenu = document.querySelectorAll('#navTitle');

      subSlideMenu.forEach( function(value, i) {
        subMenu[i].innerHTML = subSlideMenu[i];
      });


      // ===== Set Slide Text To First Sub Menu Item

      var slide = document.querySelectorAll(`.slide:nth-child(${this.position + 1}) .dash-text`);
      slide[0].innerHTML = subMenu[0].innerHTML;


      // ===== Add active menu class based on active sidebar menu item to change color of submenu items

      document.querySelector('#app').className = '';
      document.querySelector('#app').classList.add(`menu-active-${id - 1}`);


      // ===== Removing Active Class From All Sidebar Menu Items


      var slides = document.querySelectorAll('.slide');

      // setting the initial value of i to 0.
      // if i is less than the amount of items in the slides array than the function runs once
      // after the function runs once i incriments by 1
      // in summary: the loop continues until i is no longer less than the amount of items in the slides array, then it stops.
      for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
      }


      // ===== Adding Active Class to Current Slide Selection Sidebar Menu Items


      slides[this.position].classList.add("active");

    },


    // ===== Sub Menu Selection
    // ========================


    pickSlide(i) {


      // ===== For each sub menu item remove the .js-active class

      document.querySelectorAll('.slide-number').forEach(x => x.classList.remove('js-active'));

      // ===== Select the sub menu item that has been selected and add .js-active class

      document.querySelector(`.slide-number:nth-child(${i + 1})`).classList.add('js-active');


      // ===== Change the dash text to the selected sub menu item text


      var subMenuItem = document.querySelectorAll(`.slide-number:nth-child(${i + 1}) #navTitle`);
      var slide = document.querySelectorAll(`.slide:nth-child(${this.position + 1}) .dash-text`);
      var subTitle = document.querySelectorAll('.dash-text');

      slide[0].innerHTML = subMenuItem[0].innerHTML;

    },
  }
});


// ===== Adding a click event to each sub menu item and injecting it's position in the array of sub menu items


var subMenuItems = document.querySelectorAll('.slide-number');

subMenuItems.forEach( function(value, i) {
  subMenuItems[i].addEventListener("click", function() {
    navigation.pickSlide(i);
  }, false);
});

function positionContentContainer() {

  var sideMenuItemOne = document.querySelector('.side-menu .menu-buttons:first-child');
  var sideMenuItemTwo = document.querySelector('.side-menu .menu-buttons:nth-child(2)');
  var sideMenuItemThree = document.querySelector('.side-menu .menu-buttons:nth-child(3)');
  var contentContainer = document.querySelector('.content-container');
  var studentTable = document.querySelector('.tbl');
  var topMenu = document.querySelector('.top-menu');

  var topMenuItemsHeight = sideMenuItemOne.offsetHeight + sideMenuItemTwo.offsetHeight;
  var contentContainerHeight = document.documentElement.clientHeight - topMenuItemsHeight;
  var topMenuHeight = sideMenuItemThree.offsetHeight;

  // console.log(sideMenuItemThree.offsetHeight);

  // Give the content container correct positioning from the top of the viewport and a height of the difference in an inline style attribute
  contentContainer.style.cssText = 'top: '+ topMenuItemsHeight + 'px;' + ' height: ' + contentContainerHeight + 'px;';

  topMenu.style.cssText = 'height: ' +  topMenuHeight + 'px;';

  // console.log(topMenu.style.cssText = 'height: ' +  topMenuHeight + 'px;');

}

document.addEventListener("DOMContentLoaded", positionContentContainer, false);

window.addEventListener('resize', positionContentContainer, false);
