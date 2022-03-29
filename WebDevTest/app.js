/*show and hide the review */
var a = 1;
const visibleReview = document.getElementById("show_review");
function show_hide() {
  if (a == 1) {
       
   visibleReview.style.display = "Block";
    visibleReview.classList.add(".animation");
    return (a = 0);
  } else {
    visibleReview.style.display = "none";
    return (a = 1);
  }
}
var hide = 1;
/*show and hide the review, discreption */
const visibleRevSec = document.getElementById("revSection");
const visibleDiscSec = document.getElementById("show_Discription_Section");
function showReviews(id) {
  
  $.ajax({
    url:"php/review.php",
    method:"GET",
    data:{meal_id:id,getMealReviews:true},
    dataType:"json",
    success:function(data){
    if (data==false) {
    $(".fh1").html("<h3>No Reviews</h3>");  
    } else {
    $(".fh1").html('<div class="testimonial-left"><div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"><div class="carousel-indicators whitebutoon"></div><div class="carousel-inner"></div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div></div>');  
    data.forEach(function(Value,key){
    var rating = parseInt(Value.rating/20);
    var ratingStar = '';
    for (var j = 0; j < rating; j++) {
    ratingStar += '&#11088;';     
    }
    if (key==0) {
    $(".carousel-indicators").append('<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'+key+'" class="active" aria-current="true" aria-label="Slide '+key+'"></button>');  
    $(".carousel-inner").append('<div class="carousel-item active "><div class="row align-items-center"><div class="col-lg-6 final"><div class="pic"><img class="img-fluid" src="reviewImages/'+Value.image+'"></div></div><div class="col-lg-6"><div class="p2"><h4 class="final1">'+Value.reviewer_name+'</h4><h5 class="final1">'+Value.city+' - '+Value.date+' '+ratingStar+'</h5><p>'+Value.review+' </p></div></div></div></div>');
    } else {
    $(".carousel-indicators").append('<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'+key+'"  aria-current="true" aria-label="Slide '+key+'"></button>');    
    $(".carousel-inner").append('<div class="carousel-item "><div class="row align-items-center"><div class="col-lg-6 final"><div class="pic"><img class="img-fluid" src="reviewImages/'+Value.image+'"></div></div><div class="col-lg-6"><div class="p2"><h4 class="final1">'+Value.reviewer_name+'</h4><h5 class="final1">'+Value.city+' - '+Value.date+' '+ratingStar+'</h5><p>'+Value.review+' </p></div></div></div></div>');
    }
    
    });  
    
    
    
    }
    visibleRevSec.style.display = "Block";
    visibleDiscSec.style.display = "none";  
    }
  })
}
function show_disc() {
  visibleRevSec.style.display = "none";
  visibleDiscSec.style.display = "Block";
}




var counter = 0;
var num = 1;
/* for add to card */
const numOfCart = document.getElementById("rec0")

var countNum = (function () {
  
  return function () {
    return (counter = counter + num);
  };
})();


/* number of counter */


const numOfOrder = document.getElementById("bttn4");

/*for counter plus */

var numPlus = (function () {
  return function () {
    return (num = num + 1);
  };
})();
function plus() {
  numOfOrder.innerHTML = numPlus();
}

/* for counter minus */
var numMinus = (function () {
  return function () {
    if (num >= 2) {
      return (num = num - 1);
    } else {
      return (num = 1);
    }
  };
})();
function minus() {
  numOfOrder.innerHTML = numMinus();
}
/* review section */
const area =document.getElementById("review_textbox");
const counterOfLitters = document.getElementById("numOfLitters");
const textAlert = document.getElementById("errorMessage")

var b =0; 
area.addEventListener("input",function(){
  const countLitt = area.value.length;
  b = countLitt;
  counterOfLitters.textContent = countLitt;

})
/*function reviewbtn() {
    
  if (b == 0){
    textAlert.style.display = "block";
    
  }else{
    textAlert.style.display = "none";
   
  }
}*/

$(document).on("submit","#reviewForm",function(e){
e.preventDefault();
var id = $("#id").val();
$.ajax({
url:"php/review.php",
method:"POST",
data:new FormData(this),
contentType: false,
cache: false,
processData: false,
success:function(data){
showReviews(id);
visibleReview.style.display = "none";

}
});
});


/* var bestSandwich = 23.9 ;
var burger = 25.9;
var burgerMeal = 27.5;
var bestDealMeal = 23.9;
var chickenBurger = 19.9;
var Pizza = 28.5;
var totallprice ;
*/
