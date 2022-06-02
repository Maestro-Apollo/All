$(document).ready(function () {
  $('#airport1').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output1').fadeIn();
          $('#output1').html(data);
        },
      });
    } else {
      $('#output1').fadeOut();
      $('#output1').html('');
    }
  });
  $('#output1')
    .parent()
    .on('click', 'li', function () {
      $('#airport1').val($(this).text());
      $('#output1').fadeOut();
    });
  $('#airport2').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output2').fadeIn();
          $('#output2').html(data);
        },
      });
    } else {
      $('#output2').fadeOut();
      $('#output2').html('');
    }
  });
  $('#output2')
    .parent()
    .on('click', 'li', function () {
      $('#airport2').val($(this).text());
      $('#output2').fadeOut();
    });
  $('#airport3').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output3').fadeIn();
          $('#output3').html(data);
        },
      });
    } else {
      $('#output3').fadeOut();
      $('#output3').html('');
    }
  });
  $('#output3')
    .parent()
    .on('click', 'li', function () {
      $('#airport3').val($(this).text());
      $('#output3').fadeOut();
    });
  $('#airport4').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output4').fadeIn();
          $('#output4').html(data);
        },
      });
    } else {
      $('#output4').fadeOut();
      $('#output4').html('');
    }
  });
  $('#output4')
    .parent()
    .on('click', 'li', function () {
      $('#airport4').val($(this).text());
      $('#output4').fadeOut();
    });
  $('#airport5').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output5').fadeIn();
          $('#output5').html(data);
        },
      });
    } else {
      $('#output5').fadeOut();
      $('#output5').html('');
    }
  });
  $('#output5')
    .parent()
    .on('click', 'li', function () {
      $('#airport5').val($(this).text());
      $('#output5').fadeOut();
    });
  $('#airport6').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output6').fadeIn();
          $('#output6').html(data);
        },
      });
    } else {
      $('#output6').fadeOut();
      $('#output6').html('');
    }
  });
  $('#output6')
    .parent()
    .on('click', 'li', function () {
      $('#airport6').val($(this).text());
      $('#output6').fadeOut();
    });
  $('#airport7').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output7').fadeIn();
          $('#output7').html(data);
        },
      });
    } else {
      $('#output7').fadeOut();
      $('#output7').html('');
    }
  });
  $('#output7')
    .parent()
    .on('click', 'li', function () {
      $('#airport7').val($(this).text());
      $('#output7').fadeOut();
    });
  $('#airport8').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output8').fadeIn();
          $('#output8').html(data);
        },
      });
    } else {
      $('#output8').fadeOut();
      $('#output8').html('');
    }
  });
  $('#output8')
    .parent()
    .on('click', 'li', function () {
      $('#airport8').val($(this).text());
      $('#output8').fadeOut();
    });
  $('#airport9').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output9').fadeIn();
          $('#output9').html(data);
        },
      });
    } else {
      $('#output9').fadeOut();
      $('#output9').html('');
    }
  });
  $('#output9')
    .parent()
    .on('click', 'li', function () {
      $('#airport9').val($(this).text());
      $('#output9').fadeOut();
    });
  $('#airport10').keyup(function () {
    let airport = $(this).val();
    let airportLen = $(this).val().length;
    if (airport != '' && airportLen >= 3) {
      $.ajax({
        type: 'POST',
        url: 'ajax-airport.php',
        data: {
          airport: airport,
        },
        dataType: 'text',
        success: function (data) {
          $('#output10').fadeIn();
          $('#output10').html(data);
        },
      });
    } else {
      $('#output10').fadeOut();
      $('#output10').html('');
    }
  });
  $('#output10')
    .parent()
    .on('click', 'li', function () {
      $('#airport10').val($(this).text());
      $('#output10').fadeOut();
    });
});
