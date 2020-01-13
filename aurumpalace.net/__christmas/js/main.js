window.onload = () => {

  document.addEventListener('click', playChristmas, false);


  function playChristmas() {
    if(document.getElementById('sound').muted !== true) {
      return;
    }
    document.getElementById('sound').volume = 0.07;
    document.getElementById('sound').currentTime = 0;
    document.getElementById('sound').muted = false;
    document.getElementById('sound').play();
    setTimeout(() => {
      document.getElementById('sound').volume = 0.05;
    }, 1000);
    setTimeout(() => {
      document.getElementById('sound').volume = 0.02;
    }, 2000);
    setTimeout(() => {
      document.getElementById('sound').volume = 0.01;
    }, 2500);
    setTimeout(() => {
      document.getElementById('sound').volume = 0.005;
    }, 3000);
    setTimeout(() => {
      document.getElementById('sound').volume = 0.001;
    }, 3500);
    setTimeout(() => {
      document.getElementById('sound').muted = true;
      document.getElementById('sound').stop();
    }, 4000);

  }



  let colors = ['#ffff00', '#00ff00', '#00ffff', '#0000ff', '#ff00ff', '#800000'];

  let i = 0;
  setInterval(() => {
    $('#change1').css('fill', colors[i]);
    $('#change2').css('fill', colors[i]);
    $('#change3').css('fill', colors[i]);
    if(i == colors.length) {
      i = 0;
    }
    else {
      i++;
    }

  }, 1700);



  $('.open-terms').click(function(e) {
    e.preventDefault();
    let ths = $(this);
    if($(ths).hasClass('opened')) {
      $('html').css('overflow-x', 'auto');

      $('.popup').hide();
      $(ths).removeClass('opened');
    }
    else {
      $('html').css('overflow', 'hidden');
      $('.popup').show();
      $(ths).addClass('opened');

    }
  });

  $('.close').click(function() {
    $('.open-terms').each(function(k,i) {
      $('html').css('overflow-x', 'auto');
      $('html').css('overflow-y', 'auto');


      $(i).removeClass('opened');
      $('.popup').hide();
    });
  });


};
