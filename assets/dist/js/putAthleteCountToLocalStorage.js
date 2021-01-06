jQuery(function ($) {
  var ajaxUrl = asmGlobals5.ajaxUrl;
  var ajaxFunction = 'get_athlete_count_by_sports';

  var athleteCountData = JSON.parse(localStorage.getItem('athleteCount'));

  if (!athleteCountData) {
    $.ajax({
      url: ajaxUrl,
      type: 'post',
      data: {
        action: ajaxFunction,
      },
    })
      .done(function (res) {
        var athleteCountData = res;
        console.log(athleteCountData);

        localStorage.setItem('athleteCount', JSON.stringify(athleteCountData));
      })
      .fail(function () {
        console.log('Ajax Failed! In ' + ajaxFunction);
      })
      .always(function () {
        // console.log('Ajax Dynamic Loaction Filter Complete');
      });
  }
});
