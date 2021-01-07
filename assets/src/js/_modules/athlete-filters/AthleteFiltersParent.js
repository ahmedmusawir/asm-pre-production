import $ from 'jquery';

class AthleteFiltersParent {
  constructor() {
    this.init();

    // COLLECTING ELEMENTS
    this.buttonReset = $('#ath-filter-reset');
    this.buttonAdvFilter = $('#ath-advance-filter');

    // SET EVENTS ETC.
    this.showNoDataFound();
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Parent Filter Reset');
  };

  showNoDataFound() {
    const noDataItem = $('.no-data-found');
    setTimeout(function () {
      noDataItem.removeClass('d-none');
    }, 5000);
  }

  setEvents() {
    if (this.buttonReset) {
      this.buttonReset.on('click', this.resetFilters);
    }
  }

  storeOriginalAthCount = () => {
    // COUNT CONTAINER
    const countContainer = $('p.pag-data');
    // COLLECTING ORIGINAL COUNT MESSAGE BY BP
    const originalTotalAthleteCountText = countContainer.text().trim();
    sessionStorage.setItem(
      'originalAthCountText',
      originalTotalAthleteCountText
    );
  };

  openAdvanceFilter(e) {
    // console.log('adv fltr clicked');
    e.stopImmediatePropagation();

    const athAdvfilter = $('#top-advanced-filter');
    athAdvfilter.removeClass('d-none');
  }

  resetFilters() {
    // RESETTING THE ATHLETE COUNT MESSAGE
    const originalTotalAthleteCountText = sessionStorage.getItem(
      'originalAthCountText'
    );
    // console.log(originalTotalAthleteCountText);
    $('p.pag-data').html(originalTotalAthleteCountText);

    // RESETTING THE FILTERS
    const theItem = $('.item-entry-asm');

    const sport = $('#sports-select');
    sport.val('all');

    const gender = $('#gender-select');
    gender.val('all');

    const avail = $('#avail-select');
    avail.val('all');

    const classYr = $('#class-year-select');
    classYr.val('all');

    const location = $('#location-select');
    location.val('all');

    const verify = $('#verify-select');
    verify.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AthleteFiltersParent;
