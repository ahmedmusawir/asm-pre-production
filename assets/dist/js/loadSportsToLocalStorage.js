jQuery(function ($) {
  var ajaxUrl = asmGlobals2.ajaxUrl;
  var ajaxFunction = 'athlete_dynamic_sports_ajax_function';
  var buttonSportsSelect = $('#sports-select');

  var localSports = JSON.parse(localStorage.getItem('localSports'));

  if (!localSports) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        $('#sports-select').append(res);
        var sportsArray = res;
        // console.log(sportsArray);

        localStorage.setItem('localSports', JSON.stringify(sportsArray));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        console.log('New Ajax Sports Filters Complete');
      });
  }

  buttonSportsSelect.append(localSports);
});
