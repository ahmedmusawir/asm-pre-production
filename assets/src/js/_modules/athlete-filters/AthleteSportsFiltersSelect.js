import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteSportsFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    // this.init();

    // COLLECTING SELECT
    this.selectSport = $('#sports-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Sport Filter Init');
  };

  setEvents = () => {
    this.selectSport.on('change', this.changeHandler);
  };

  changeHandler = (e) => {
    // console.log(e.target.value);
    // Athlete Count Display
    this.getAthleteCount(e.target.value);
    // console.log($(this).val());
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    // const sport = $(this).val(); // This line killed this method's this.method()
    // Never use $(this) inside a class
    const sport = $('#sports-select').val();
    const theItem = $('.item-entry-asm');

    if (sport == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${sport}.${gender}.${avail}.${classYr}.${location}.${verify}`
        ).removeClass('d-none');
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (
      classYr != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${gender}.${location}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (gender != 'all' && avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${verify}`).removeClass('d-none');
      });
    } else if (avail != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (avail != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    }
  };

  getAthleteCount = (sport) => {
    // COUNT CONTAINER
    const countContainer = $('p.pag-data');
    // COLLECTING ATHLETE COUNT BY SPORTS
    const athleteCountData = JSON.parse(localStorage.getItem('athleteCount'));
    // console.log(athleteCountData);

    // CALLING GET COUNT SUB FUNCTION
    switch (sport) {
      case 'BASEBALL':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'BASKETBALL':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'BOWLING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'CHEERLEADING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'CROSS-COUNTRY':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'CYCLING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'EQUESTRAIN':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'E-SPORTS':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'FENCING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'FIELD-HOCKEY':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'GOLF':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'GYMNASTICS':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'ICE-HOCKEY':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'LACROSSE':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'RIFLE':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'ROWING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'RUGBY':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'SAILING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'SOCCER':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'SOFTBALL':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'SWIMMING-AND-DIVING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'TENNIS':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'TRACK-AND-FIELD':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'VOLLEYBALL':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'US-FOOTBALL':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'WATER-POLO':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      case 'WRESTLING':
        //Display Athlete Count by Sport
        if (athleteCountData) {
          const athCount = athleteCountData[0][sport];
          countContainer.html(`${athCount} Athletes found with ${sport}`);
        }
        break;
      default:
        console.log('No Sport Found to count ...');
    } // END CASE & SWITCH
  };
}

export default AthleteSportsFiltersSelect;
