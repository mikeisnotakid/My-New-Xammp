// hot crypto carousel

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:5,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
    


// Desktop view Logout button

function logOutBtn() {
var log = document.getElementById('logout-btn');

if(log.style.display === 'block'){
    log.style.display = 'none';
}

else {
    log.style.display = 'block';
}
}

// Mobile nav 

function openClose(){
var mobileNav = document.getElementById('main-nav');

if( mobileNav.style.display === 'block') {
     mobileNav.style.display = 'none';
     document.getElementById('close-nav').style.display = "none";
    document.getElementById('open-nav').style.display = "block";

}

else {
    mobileNav.style.display = 'block';
    document.getElementById('close-nav').style.display = "block";
    document.getElementById('open-nav').style.display = "none";


}
}

// Modal

var modalOpen = document.getElementById('success-modal');

function myModal(){
    
var amount = document.getElementById('amount').value;
    if(amount > 0 ) {
     modalOpen.style.display = 'block';

    }

    else {
        modalOpen.style.display = 'none';
    }

}


function modalClose(){
    modalOpen.style.display = 'none';
}