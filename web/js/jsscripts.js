
function techdown()
{
  var a = document.getElementById('tech-dropdown');
  var b = document.getElementById('tech-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}
function fulldown()
{
  var a = document.getElementById('full-dropdown');
  var b = document.getElementById('full-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}
function dvipdown()
{
  var a = document.getElementById('dvip-dropdown');
  var b = document.getElementById('dvip-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}
function basedown()
{
  var a = document.getElementById('base-dropdown');
  var b = document.getElementById('base-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}
function capdown()
{
  var a = document.getElementById('cap-dropdown');
  var b = document.getElementById('cap-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}
function vipdown()
{	
 var a = document.getElementById('vip-dropdown');
  var b = document.getElementById('vip-adropdown');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
    b.style.display = 'none'
  }else
    if ( a.style.display == 'block' ){
    a.style.display = 'none';
	b.style.display = 'block'
	}
}

function appiarbox1()
{
   var apbox = document.getElementById('appiarbox1');  
     if(apbox.style.display == 'none'){
		 apbox.style.display == 'block';
	 }else{
		 apbox.style.display == 'block';
	 }
 
}


$('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })



