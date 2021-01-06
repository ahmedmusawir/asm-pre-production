jQuery(function ($) {
  var ajaxUrl = asmGlobals1.ajaxUrl;
  var ajaxFunction = 'athlete_dynamic_location_ajax_function';
  var buttonLocationSelect = $('#location-select');

  var localLocations = JSON.parse(localStorage.getItem('localLocations'));

  if (!localLocations) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        var locationArray = res;
        // console.log(locationArray);
        localStorage.setItem('localLocations', JSON.stringify(locationArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('New Ajax Loaction Filter Complete');
      });
  }

  buttonLocationSelect.append(localLocations);
});
