
function makeTimer() {

  //    var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
    var endTime = new Date("27 April 2023 10:00:00 GMT+01:00");      
      endTime = (Date.parse(endTime) / 1000);

      var now = new Date();
      now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      var days = Math.floor(timeLeft / 86400); 
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      $("#days").html(days + "<span>Days</span>");
      $("#hours").html(hours + "<span>Hours</span>");
      $("#minutes").html(minutes + "<span>Minutes</span>");
      $("#seconds").html(seconds + "<span>Seconds</span>");   

  }

  setInterval(function() { makeTimer(); }, 1000);

  $(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
        template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
          template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
    template += '</div></div>';
    
    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
  });
  $(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
  $(".custom-select-trigger").on("click", function() {
    
    $('html').one('click',function() {
      $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });

  function customSelectOptionClick(obj){
      $(obj).parents(".custom-select-wrapper").find("select").val($(obj).data("value"));
      $(obj).parents(".custom-options").find(".custom-option").removeClass("selection");
      $(obj).addClass("selection");
      $(obj).parents(".custom-select").removeClass("opened");
      $(obj).parents(".custom-select").find(".custom-select-trigger").text($(obj).text());
  }
  // $(".custom-option").on("click", function() {
  //     $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  //     $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  //     $(this).addClass("selection");
  //     $(this).parents(".custom-select").removeClass("opened");
  //     $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    

  // });