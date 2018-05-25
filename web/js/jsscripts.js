
function appiarbox1()
{
 var a = document.getElementById('appbox1');
 var b = document.getElementById('appbox2');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
	b.style.display = 'none'
  }else{
    a.style.display = 'none'
	b.style.display = 'none'
	}
 
}
function appiarbox2()
{
 var a = document.getElementById('appbox1');
 var b = document.getElementById('appbox2');
  if ( b.style.display == 'none' ){
	a.style.display = 'none'
    b.style.display = 'block'
  }else{
	a.style.display = 'none'
    b.style.display = 'none'
	}
 
}
function appiarbox3()
{
 var a = document.getElementById('appbox3');
  if ( a.style.display == 'none' ){
    a.style.display = 'block'
  } else{
    a.style.display = 'none'
	}
 
}

function hidebox12()
{
 var a = document.getElementById('appbox1');
 var b = document.getElementById('appbox2');
  if ( b.style.display == 'block' || a.style.display == 'block'){
	a.style.display = 'none'
    b.style.display = 'none'
  }
 
}
function hidebox3()
{
 var a = document.getElementById('appbox3');
  if (a.style.display == 'block'){
	a.style.display = 'none'
  }
 
}

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



