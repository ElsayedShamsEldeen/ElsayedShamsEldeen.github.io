$(".info-item .btn").click(function(){
    $(".container").toggleClass("log-in");
  });
  $(".container-form .btn").click(function(){
    $(".container").addClass("active");
  });


// For Small Screens

// Demo or didn't happen

var signin = document.querySelector('#signin')
var register = document.querySelector('#register')
setTimeout(function(){ register.checked = true}, 1000)
setTimeout(function(){ signin.checked = true}, 2000)

