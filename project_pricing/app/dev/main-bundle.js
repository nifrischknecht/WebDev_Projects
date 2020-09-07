'use strict';

// delegate function
const delegate = (cssClass, myfunction) => {
  return event => {
    if (event.target.matches(cssClass)) {
      myfunction(event);
    }
  };
};

const menu = document.querySelector('.menu__hamburger');
const closeMenu = document.querySelector('.headerBlack'); //only for mobile

const login = document.querySelector('.actions__login');
const loginMenu = document.querySelector('.actions-close__login');
const loginFilter = document.querySelector('.actionsFilter');
const filterBtn = document.querySelector('.music-filter-S'); //only for mobile

const closeFilterBtn = document.querySelector('.menuFilter'); //only for mobile
// const openTickets = document.querySelector('.actions__tickets');  //only for mobile

const artOpen = document.querySelector('.magazineS__masonry');
const audio = document.querySelector('.discovery__audio');
const likeNews = document.querySelector('.news__masonry');
const breadcrumpFestivals = document.querySelector('.breadcrump__secondNav-festivals');
const breadcrumpMagazin = document.querySelector('.breadcrump__secondNav-magazin');
const breadcrumpNews = document.querySelector('.breadcrump__secondNav-news');
const breadcrumpFestivalItem = document.querySelector('.breadcrump__thirdNav');
const listView = document.querySelector('.music-items__menu-choice-list');
const tileView = document.querySelector('.music-items__menu-choice-tile');
const likeFestivalsOverlay = document.querySelector('.filtered-items__outside');
const likeFestivalsDetail = document.querySelector('.detailsFestival__content-vote');
const countdownText = document.querySelector('#countdownText'); // const selectSunday = document.querySelector('.lineupFestival__linupAllDay');
// const selectSaturday = document.querySelector('.lineupFestival__linupAllDay');

const lineupAllDay = document.querySelector('.lineupFestival__linupAllDay');
const programButtons = document.querySelectorAll('.lineupFestival__singleDay');
const video = document.querySelector('.videoFestival');
const openAccordions = document.querySelector('.infosFestival__allAccordions'); // -------------------- *  ALL LET OUTSIDE FUNCTIONS  * -------------------- \\

let isAudioPlaying = false;
let musicFile; // ---------------------------- *  HEADER-AREA  * ---------------------------- \\
// MENU-HAMBURGER: open and close the hamburger-menu

if (menu) {
  menu.addEventListener('click', function () {
    // Because toggleMenu() has a parameter, we can't just use "toggleMenu" as the callback of the event.
    // Instead we use a "closure" and call toggleMenu() from within.
    // Additionally, we want to close the currently open popups first.
    toggleLogin('close');
    toggleMenu();
  });
}

function toggleMenu(force_status) {
  const menuArea = document.querySelector('#menuOverlay-outside');
  var is_open_now = menuArea.classList.toggle('menuOverlay-outside--active', force_status === 'close' ? false : undefined); // short form for a if/else (if force-status is 'close', then value is 'false', else the value is 'undefined')
  // console.log('menu open:', is_open_now);
}

if (closeMenu) {
  closeMenu.addEventListener('click', delegate('.menu-close__cross', function (event) {
    // close menu now
    toggleMenu('close');
  }));
}

if (login) {
  login.addEventListener('click', function () {
    // First, close the menu if it's open. Then toggle the Login Popup.
    toggleMenu('close');
    toggleLogin();
  });
}

function toggleLogin(force_status) {
  const loginArea = document.querySelector('#box-outside');
  loginArea.classList.toggle('box-outside--active', force_status === 'close' ? false : undefined); // Toggle Login Button class

  const loginBtn = document.querySelector('.actions__login');
  loginBtn.classList.toggle('actions__login--active', force_status === 'close' ? false : undefined); // Toggle Menu login button class Always toggle both menu buttons so they are in sync so we can use the same toggleLogin() method for both buttons

  const loginMenuBtn = document.querySelector('.actions-close__login');
  loginMenuBtn.classList.toggle('actions-close__login--active', force_status === 'close' ? false : undefined);
}

if (loginMenu) {
  loginMenu.addEventListener('click', function () {
    toggleMenu('close');
    toggleLogin();
  });
}

if (loginFilter) {
  loginFilter.addEventListener('click', openLoginFilter);
}

function openLoginFilter() {
  const loginArea = document.querySelector('#box-outside');
  loginArea.classList.toggle('box-outside--active');
  const loginFilterBtn = document.querySelector('.actionsFilter__login');
  loginFilterBtn.classList.toggle('actionsFilter__login--active');
}
// FILTER: open/close
// FILTER: open (only for Smartphone)

if (filterBtn) {
  filterBtn.addEventListener('click', delegate('.filterBtn button', function (event) {
    const filterArea = document.querySelector('.filterOverlay-outside');
    filterArea.classList.add('filterOverlay-outside--active');
  }));
}

if (closeFilterBtn) {
  closeFilterBtn.addEventListener('click', delegate('.menuFilter__hamburger', function (event) {
    // event.preventDefault(); (only for href  > to ignore)
    const closeFilter = document.querySelector('.filterOverlay-outside');
    closeFilter.classList.remove('filterOverlay-outside--active');
  }));
}

if (artOpen) {
  artOpen.addEventListener('click', delegate('.magazineS__readBtn', function (event) {
    //    console.log('hallo welt');
    //    console.log(event.target.parentNode.querySelector('.magazineS__text'));
    const art = event.target.parentNode.querySelector('.magazineS__text');
    art.classList.toggle('magazineS__text--active');

    if (art.className === 'magazineS__text magazineS__text--active') {
      event.target.innerText = 'SCHLIESSEN';
    } else {
      event.target.innerText = 'LESEN';
    }
  }));
}

if (audio) {
  audio.addEventListener('click', delegate('.discovery__audio-play', function (event) {
    const audioArea = event.target.parentNode.querySelector('.discovery__audio-icon'); // Is the clicked audio already playing?

    if (audioArea.classList.contains('discovery__audio-icon--active')) {
      // console.log('clicked audio is already playing, stop and quit');
      // We have clicked an already playing audio, we only want to pause. Stop audio and remove active class.
      musicFile.pause();
      isAudioPlaying = false; // Toggle current status

      audioArea.classList.toggle('discovery__audio-icon--active');
      return true;
    } // The clicked audio is not playing, we want to start the audio.
    // But first let's stop the currently running audio, if any.


    if (isAudioPlaying) {
      // console.log('some other audio is playing, stop it before we\'re playing the clicked audio');
      // Remove the "active" state of the currently active audio
      document.querySelector('.discovery__audio-icon--active').classList.remove('discovery__audio-icon--active');
      musicFile.pause();
    } // We now can safely assume that all music has stopped playing and no icon has an "active" state.
    // We can start the sound now.
    // Toggle active class


    audioArea.classList.toggle('discovery__audio-icon--active');
    const musicType = audioArea.getAttribute('data-music-type'); //give a type in html for the allocation of the genres
    // console.log('musicType:', musicType);

    const musicFilePath = 'audio/' + musicType + '.mp3'; // console.log('Starting music...');

    musicFile = new Audio(musicFilePath);
    musicFile.play();
    isAudioPlaying = true;
  }));
}

if (likeNews) {
  likeNews.addEventListener('click', delegate('.news__text-icon', function (event) {
    // console.log(event.target.parentNode.querySelector('.news__text-icon'));
    const likeArea = event.target.parentNode.querySelector('.news__text-icon');
    likeArea.classList.toggle('news__text-icon--active');
  }));
}
// -->> rows and columns for magazines and news

/**
 * Set appropriate spanning to any masonry item
 *
 * Get different properties we already set for the masonry, calculate 
 * height or spanning for any cell of the masonry grid based on its 
 * content-wrapper's height, the (row) gap of the grid, and the size 
 * of the implicit row tracks.
 *
//  param item Object A brick/tile/cell inside the masonry
 */

function resizeMasonryItem(grid, item) {
  /* Get the grid object, its row-gap, and the size of its implicit rows */
  const rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap')),
        rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
  /*
  * Spanning for any brick = S
  * Grid's row-gap = G
  * Size of grid's implicitly create row-track = R
  * Height of item content = H
  * Net height of the item = H1 = H + G
  * Net height of the implicit row-track = T = G + R
  * S = H1 / T
  */

  const rowSpan = Math.ceil((item.querySelector('.masonry__content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
  /* Set the spanning as calculated above (S) */

  item.style.gridRowEnd = 'span ' + rowSpan;
}

function resizeAllMasonry() {
  const grids = document.querySelectorAll('.masonry');
  grids.forEach(grid => {
    // Get all item class objects in one list
    const allItems = grid.querySelectorAll('.masonry__brick');
    /*
    * Loop through the above list and execute the spanning function to
    * each list-item (i.e. each masonry item)
    */

    allItems.forEach(item => {
      resizeMasonryItem(grid, item);
    });
  });
}
/* Resize all the grid items on the load and resize events */


var masonryEvents = ['load', 'resize'];
masonryEvents.forEach(function (event) {
  window.addEventListener(event, resizeAllMasonry);
}); // ---------------------------- *  OVERVIEW-PAGE  * ---------------------------- \\
// BREADCRUMPS: for menu part: festivals, magazin and news
// Festivals open/close

if (breadcrumpFestivals) {
  breadcrumpFestivals.addEventListener('click', toggleBreadcrumpFestivals);
}

function toggleBreadcrumpFestivals() {
  const breadcrumpArea = document.querySelector('#breadcrump-outside-festivals');
  breadcrumpArea.classList.toggle('breadcrump-outside-festivals--active');
}

if (breadcrumpFestivalItem) {
  breadcrumpFestivalItem.addEventListener('click', toggleBreadcrumpFestivalsItem);
}

function toggleBreadcrumpFestivalsItem() {
  const breadcrumpArea = document.querySelector('#breadcrump-outside-festivals-item');
  breadcrumpArea.classList.toggle('breadcrump-outside-festivals-item--active');
}

if (breadcrumpMagazin) {
  breadcrumpMagazin.addEventListener('click', toggleBreadcrumpMagazin);
}

function toggleBreadcrumpMagazin() {
  const breadcrumpArea = document.querySelector('#breadcrump-outside-magazin');
  breadcrumpArea.classList.toggle('breadcrump-outside-magazin--active');
}

if (breadcrumpNews) {
  breadcrumpNews.addEventListener('click', toggleBreadcrumpNews);
}

function toggleBreadcrumpNews() {
  const breadcrumpArea = document.querySelector('#breadcrump-outside-news');
  breadcrumpArea.classList.toggle('breadcrump-outside-news--active');
}
// toggle from tiles to list

if (listView) {
  listView.addEventListener('click', listOpen);
}

function listOpen() {
  const openList = document.querySelector('.filtered-items__outside');
  openList.classList.add('filtered-items-list');
  listView.classList.add('music-items__menu-choice-list--active');
  listView.classList.remove('music-items__menu-choice-list--inactive');
  tileView.classList.add('music-items__menu-choice-tile--inactive');
  tileView.classList.remove('music-items__menu-choice-tile--active');
}

if (tileView) {
  tileView.addEventListener('click', tileOpen);
}

function tileOpen() {
  const openTile = document.querySelector('.filtered-items__outside');
  openTile.classList.remove('filtered-items-list');
  listView.classList.remove('music-items__menu-choice-list--active');
  listView.classList.add('music-items__menu-choice-list--inactive');
  tileView.classList.remove('music-items__menu-choice-tile--inactive');
  tileView.classList.add('music-items__menu-choice-tile--active');
}

if (likeFestivalsOverlay || likeFestivalsDetail) {
  // if/else-condition
  const box = likeFestivalsOverlay ? likeFestivalsOverlay : likeFestivalsDetail;
  box.addEventListener('click', delegate('.filtered-items__vote-note', likeIcon));

  function likeIcon(event) {
    const icon = event.target.parentNode.querySelector('.filtered-items__vote-note-icon');
    icon.classList.toggle('filtered-items__vote-note-icon--active');
    const text = event.target.parentNode.querySelector('.filtered-items__vote-note-text'); // text.innerText = (text.innerText === 'MERKEN') ? 'GEMERKT' : 'MERKEN'; (SAME SPELLING)

    if (text.innerText === 'MERKEN') {
      text.innerText = 'GEMERKT';
    } else {
      text.innerText = 'MERKEN';
    }
  }
}
// COUNTDOWN: how long time in days to festival

if (countdownText) {
  const now = new Date(); // Date: 18.9., Date() expects months to start with 0

  const festivalDate = new Date(2020, 8, 18);
  const days = Math.floor((festivalDate - now) / (1000 * 60 * 60 * 24));
  countdownText.innerText = days + " Tage";
}
// Loop all program buttons and add a click eventhandler to each button.

programButtons.forEach(function (programBtn) {
  programBtn.addEventListener('click', function (event) {
    // We have clicked a program button (friday, saturday or sunday)
    // Is the clicked button already active? Then we want to show the menu on mobile (set all buttons to visible)
    if (programBtn.classList.contains('lineupFestival__singleDay--active')) {
      // Add a class to .lineupFestival__linupAllDay
      lineupAllDay.classList.toggle('lineupFestival__linupAllDay--open');
    } else {
      // Close the menu when we change the day (mobile)
      lineupAllDay.classList.remove('lineupFestival__linupAllDay--open');
    } // First we remove the "active" class of the currently active button.


    document.querySelector('.lineupFestival__singleDay--active').classList.remove('lineupFestival__singleDay--active'); // And we hide the currently active program.

    document.querySelector('.lineupFestival__dayProgramm--active').classList.remove('lineupFestival__dayProgramm--active'); // In this moment we know that no button is active and no program is shown.
    // Then we add the "active" class to the clicked button.

    programBtn.classList.add('lineupFestival__singleDay--active'); // Get the "data-day" attribute of the clicked button so we know which day was clicked

    var clicked_weekday = programBtn.getAttribute('data-day'); // friday, saturday or sunday
    // Now we know which weekday was clicked. Set the correct program to "active"

    document.querySelector(`[data-program="${clicked_weekday}"]`).classList.add('lineupFestival__dayProgramm--active');
  });
}); // VIDEO: -> play and stop (NO VIDEO YET)

if (video) {
  video.addEventListener('click', delegate('.videoFestival__video-play', function (event) {
    const videoArea = event.target.parentNode.querySelector('.videoFestival__video-icon');
    videoArea.classList.toggle('videoFestival__video-icon--active');

    if (videoArea.className === 'videoFestival__video-icon videoFestival__video-icon--active') {
      const videoHight = event.target.parentNode.parentNode.querySelector('.videoFestival');
      videoHight.classList.add('videoFestival--active');
    } else {
      const videoHightNew = event.target.parentNode.parentNode.querySelector('.videoFestival');
      videoHightNew.classList.remove('videoFestival--active');
    }
  }));
}

if (openAccordions) {
  openAccordions.addEventListener('click', delegate('.infosFestival__title-moreBtn', function (event) {
    // console.log(event.target.parentNode.parentNode.querySelector('.infosFestival__content'));
    const accord = event.target.parentNode.parentNode.querySelector('.infosFestival__content'); // Is clicked item already open??

    if (accord.classList.contains('infosFestival__content--active')) {
      accord.classList.remove('infosFestival__content--active');
      event.target.innerText = 'Mehr';
      return;
    } // Close open item


    const open_item = document.querySelector('.infosFestival__content--active');

    if (open_item) {
      open_item.classList.remove('infosFestival__content--active');
      open_item.closest('.infosFestival__accordion').querySelector('button').innerText = 'Mehr';
    } // Open clicked item


    accord.classList.add('infosFestival__content--active');
    event.target.innerText = 'Weniger';
  }));
}
//global (on objekt: window)

window.initMap = function () {
  const map_element = document.getElementById("map");

  if (!map_element) {
    return;
  }

  const map = new google.maps.Map(map_element, {
    mapId: "e63d0dde5b1cad7",
    center: {
      lat: 47.444,
      lng: 9.472
    },
    zoom: 15.3,
    disableDefaultUI: true
  });
  const image = {
    url: './img/detail_googlemaps.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(48, 72),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(24, 72)
  };
  const beachMarker = new google.maps.Marker({
    position: {
      lat: 47.444448,
      lng: 9.468906
    },
    map: map,
    icon: image
  });
}; // ---------------------------- *  TICKET-PAGE  * ---------------------------- \\
// TICKET-BTN IN HEADER: active


if (window.location.pathname.indexOf('festivals-tickets-overview.php') > -1) {
  document.querySelector('.actions__tickets').classList.add('actions__tickets--active');
} // TICKET-BTN IN HEADER: active


if (window.location.pathname.indexOf('festivals-tickets-buy.php') > -1) {
  document.querySelector('.actions__tickets').classList.add('actions__tickets--active');
} // ---------------------------- *  ORDER-PROCESS  * ---------------------------- \\
// automatic transfer to «Juhui, ... after 3 seconds


if (location.href.indexOf('payment_2.php') > -1) {
  setTimeout(function () {
    window.location.href = 'payment_finished.php';
  }, 3000);
}
