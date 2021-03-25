document.addEventListener('DOMContentLoaded', function(){
    let stars = document.querySelectorAll('.star');
    stars.forEach(function(star){
        star.addEventListener('click', setRating); 
    });
    
    let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
    let target = stars[rating - 1];
    target.dispatchEvent(new MouseEvent('click'));
});

function setRating(ev){
    let span = ev.currentTarget;
    let stars = document.querySelectorAll('.star');
    let match = false;
    let num = 0;
    stars.forEach(function(star, index){
        if(match){
            star.classList.remove('rated');
        }else{
            star.classList.add('rated');

        }
        
        if(star === span){
            match = true;
            num = index + 1;
        }
    });
    document.querySelector('.stars').setAttribute('data-rating', num);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars1 = document.querySelectorAll('.star1');
    stars1.forEach(function(star1){
        star1.addEventListener('click', setRating1); 
    });
    
    let rating1 = parseInt(document.querySelector('.stars1').getAttribute('data-rating1'));
    let target1 = stars1[rating1 - 1];
    target1.dispatchEvent(new MouseEvent('click'));
});

function setRating1(ev1){
    let span1 = ev1.currentTarget;
    let stars1 = document.querySelectorAll('.star1');
    let match1 = false;
    let num1 = 0;
    stars1.forEach(function(star1, index1){
        if(match1){
            star1.classList.remove('rated1');
        }else{
            star1.classList.add('rated1');

        }
        
        if(star1 === span1){
            match1 = true;
            num1 = index1 + 1;
        }
    });
    document.querySelector('.stars1').setAttribute('data-rating1', num1);
}

function setRating1(ev1){
    let span1 = ev1.currentTarget;
    let stars1 = document.querySelectorAll('.star1');
    let match1 = false;
    let num1 = 0;
    stars1.forEach(function(star1, index1){
        if(match1){
            star1.classList.remove('rated1');
        }else{
            star1.classList.add('rated1');

        }
        
        if(star1 === span1){
            match1 = true;
            num1 = index1 + 1;
        }
    });
    document.querySelector('.stars1').setAttribute('data-rating1', num1);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars2 = document.querySelectorAll('.star2');
    stars2.forEach(function(star2){
        star2.addEventListener('click', setRating2); 
    });
    
    let rating2 = parseInt(document.querySelector('.stars2').getAttribute('data-rating2'));
    let target2 = stars2[rating2 - 1];
    target2.dispatchEvent(new MouseEvent('click'));
});

function setRating2(ev2){
    let span2 = ev2.currentTarget;
    let stars2 = document.querySelectorAll('.star2');
    let match2 = false;
    let num2 = 0;
    stars2.forEach(function(star2, index2){
        if(match2){
            star2.classList.remove('rated2');
        }else{
            star2.classList.add('rated2');

        }
        
        if(star2 === span2){
            match2 = true;
            num2 = index2 + 1;
        }
    });
    document.querySelector('.stars2').setAttribute('data-rating2', num2);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars3 = document.querySelectorAll('.star3');
    stars3.forEach(function(star3){
        star3.addEventListener('click', setRating3); 
    });
    
    let rating3 = parseInt(document.querySelector('.stars3').getAttribute('data-rating3'));
    let target3 = stars3[rating3 - 1];
    target3.dispatchEvent(new MouseEvent('click'));
});

function setRating3(ev3){
    let span3 = ev3.currentTarget;
    let stars3 = document.querySelectorAll('.star3');
    let match3 = false;
    let num3 = 0;
    stars3.forEach(function(star3, index3){
        if(match3){
            star3.classList.remove('rated3');
        }else{
            star3.classList.add('rated3');

        }
        
        if(star3 === span3){
            match3 = true;
            num3 = index3 + 1;
        }
    });
    document.querySelector('.stars3').setAttribute('data-rating3', num3);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars4 = document.querySelectorAll('.star4');
    stars4.forEach(function(star4){
        star4.addEventListener('click', setRating4); 
    });
    
    let rating4 = parseInt(document.querySelector('.stars4').getAttribute('data-rating4'));
    let target4 = stars4[rating4 - 1];
    target4.dispatchEvent(new MouseEvent('click'));
});

function setRating4(ev4){
    let span4 = ev4.currentTarget;
    let stars4 = document.querySelectorAll('.star4');
    let match4 = false;
    let num4 = 0;
    stars4.forEach(function(star4, index4){
        if(match4){
            star4.classList.remove('rated4');
        }else{
            star4.classList.add('rated4');

        }
        
        if(star4 === span4){
            match4 = true;
            num4 = index4 + 1;
        }
    });
    document.querySelector('.stars4').setAttribute('data-rating4', num4);
}

document.addEventListener('DOMContentLoaded', function(){
    let stars5 = document.querySelectorAll('.star5');
    stars5.forEach(function(star5){
        star5.addEventListener('click', setRating5); 
    });
    
    let rating5 = parseInt(document.querySelector('.stars5').getAttribute('data-rating5'));
    let target5 = stars5[rating5 - 1];
    target2.dispatchEvent(new MouseEvent('click'));
});

function setRating5(ev5){
    let span5 = ev5.currentTarget;
    let stars5 = document.querySelectorAll('.star5');
    let match5 = false;
    let num5 = 0;
    stars5.forEach(function(star5, index5){
        if(match5){
            star5.classList.remove('rated5');
        }else{
            star5.classList.add('rated5');

        }
        
        if(star5 === span5){
            match5 = true;
            num5 = index5 + 1;
        }
    });
    document.querySelector('.stars5').setAttribute('data-rating5', num5);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars6 = document.querySelectorAll('.star6');
    stars6.forEach(function(star6){
        star6.addEventListener('click', setRating6); 
    });
    
    let rating6 = parseInt(document.querySelector('.stars6').getAttribute('data-rating6'));
    let target6 = stars6[rating6 - 1];
    target6.dispatchEvent(new MouseEvent('click'));
});

function setRating6(ev6){
    let span6 = ev6.currentTarget;
    let stars6 = document.querySelectorAll('.star6');
    let match6 = false;
    let num6 = 0;
    stars6.forEach(function(star6, index6){
        if(match6){
            star6.classList.remove('rated6');
        }else{
            star6.classList.add('rated6');

        }
        
        if(star6 === span6){
            match6 = true;
            num6 = index6 + 1;
        }
    });
    document.querySelector('.stars6').setAttribute('data-rating6', num6);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars7 = document.querySelectorAll('.star7');
    stars7.forEach(function(star7){
        star7.addEventListener('click', setRating7); 
    });
    
    let rating7 = parseInt(document.querySelector('.stars7').getAttribute('data-rating7'));
    let target7 = stars7[rating7 - 1];
    target7.dispatchEvent(new MouseEvent('click'));
});

function setRating7(ev7){
    let span7 = ev7.currentTarget;
    let stars7 = document.querySelectorAll('.star7');
    let match7 = false;
    let num7 = 0;
    stars7.forEach(function(star7, index7){
        if(match7){
            star7.classList.remove('rated7');
        }else{
            star7.classList.add('rated7');

        }
        
        if(star7 === span7){
            match7 = true;
            num7 = index7 + 1;
        }
    });
    document.querySelector('.stars7').setAttribute('data-rating7', num7);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars8 = document.querySelectorAll('.star8');
    stars8.forEach(function(star8){
        star8.addEventListener('click', setRating8); 
    });
    
    let rating8 = parseInt(document.querySelector('.stars8').getAttribute('data-rating8'));
    let target8 = stars8[rating8 - 1];
    target8.dispatchEvent(new MouseEvent('click'));
});

function setRating8(ev8){
    let span8 = ev8.currentTarget;
    let stars8 = document.querySelectorAll('.star8');
    let match8 = false;
    let num8 = 0;
    stars8.forEach(function(star8, index8){
        if(match8){
            star8.classList.remove('rated8');
        }else{
            star8.classList.add('rated8');

        }
        
        if(star8 === span8){
            match8 = true;
            num8 = index8 + 1;
        }
    });
    document.querySelector('.stars8').setAttribute('data-rating8', num8);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars9 = document.querySelectorAll('.star9');
    stars9.forEach(function(star9){
        star9.addEventListener('click', setRating9); 
    });
    
    let rating9 = parseInt(document.querySelector('.stars9').getAttribute('data-rating9'));
    let target9 = stars9[rating9 - 1];
    target9.dispatchEvent(new MouseEvent('click'));
});

function setRating9(ev9){
    let span9 = ev9.currentTarget;
    let stars9 = document.querySelectorAll('.star9');
    let match9 = false;
    let num9 = 0;
    stars9.forEach(function(star9, index9){
        if(match9){
            star9.classList.remove('rated9');
        }else{
            star9.classList.add('rated9');

        }
        
        if(star9 === span9){
            match9 = true;
            num9 = index9 + 1;
        }
    });
    document.querySelector('.stars9').setAttribute('data-rating9', num9);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars10 = document.querySelectorAll('.star10');
    stars10.forEach(function(star10){
        star10.addEventListener('click', setRating10); 
    });
    
    let rating10 = parseInt(document.querySelector('.stars10').getAttribute('data-rating10'));
    let target10 = stars10[rating10 - 1];
    target10.dispatchEvent(new MouseEvent('click'));
});

function setRating10(ev10){
    let span10 = ev10.currentTarget;
    let stars10 = document.querySelectorAll('.star10');
    let match10 = false;
    let num10 = 0;
    stars10.forEach(function(star10, index10){
        if(match10){
            star10.classList.remove('rated10');
        }else{
            star10.classList.add('rated10');

        }
        
        if(star10 === span10){
            match10 = true;
            num10 = index10 + 1;
        }
    });
    document.querySelector('.stars10').setAttribute('data-rating10', num10);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars11 = document.querySelectorAll('.star11');
    stars11.forEach(function(star11){
        star11.addEventListener('click', setRating11); 
    });
    
    let rating11 = parseInt(document.querySelector('.stars11').getAttribute('data-rating11'));
    let target11 = stars11[rating11 - 1];
    target11.dispatchEvent(new MouseEvent('click'));
});

function setRating11(ev11){
    let span11 = ev11.currentTarget;
    let stars11 = document.querySelectorAll('.star11');
    let match11 = false;
    let num11 = 0;
    stars11.forEach(function(star11, index11){
        if(match11){
            star11.classList.remove('rated11');
        }else{
            star11.classList.add('rated11');

        }
        
        if(star11 === span11){
            match11 = true;
            num11 = index11 + 1;
        }
    });
    document.querySelector('.stars11').setAttribute('data-rating11', num11);
}


document.addEventListener('DOMContentLoaded', function(){
    let stars12 = document.querySelectorAll('.star12');
    stars12.forEach(function(star12){
        star12.addEventListener('click', setRating12); 
    });
    
    let rating12 = parseInt(document.querySelector('.stars12').getAttribute('data-rating12'));
    let target12 = stars12[rating12 - 1];
    target12.dispatchEvent(new MouseEvent('click'));
});

function setRating12(ev12){
    let span12 = ev12.currentTarget;
    let stars12 = document.querySelectorAll('.star12');
    let match12 = false;
    let num12 = 0;
    stars12.forEach(function(star12, index12){
        if(match12){
            star12.classList.remove('rated12');
        }else{
            star12.classList.add('rated12');

        }
        
        if(star12 === span12){
            match12 = true;
            num12 = index12 + 1;
        }
    });
    document.querySelector('.stars12').setAttribute('data-rating12', num12);
}

document.addEventListener('DOMContentLoaded', function(){
    let stars13 = document.querySelectorAll('.star13');
    stars13.forEach(function(star13){
        star13.addEventListener('click', setRating13); 
    });
    
    let rating13 = parseInt(document.querySelector('.stars13').getAttribute('data-rating13'));
    let target13 = stars13[rating13 - 1];
    target13dispatchEvent(new MouseEvent('click'));
});

function setRating13(ev13){
    let span13 = ev13.currentTarget;
    let stars13 = document.querySelectorAll('.star13');
    let match13 = false;
    let num13 = 0;
    stars13.forEach(function(star13, index13){
        if(match13){
            star13.classList.remove('rated13');
        }else{
            star13.classList.add('rated13');

        }
        
        if(star13 === span13){
            match13 = true;
            num13 = index13 + 1;
        }
    });
    document.querySelector('.stars13').setAttribute('data-rating13', num13);
}

document.addEventListener('DOMContentLoaded', function(){
    let stars14 = document.querySelectorAll('.star14');
    stars14.forEach(function(star14){
        star14.addEventListener('click', setRating14); 
    });
    
    let rating14 = parseInt(document.querySelector('.stars14').getAttribute('data-rating14'));
    let target14 = stars14[rating14 - 1];
    target14.dispatchEvent(new MouseEvent('click'));
});

function setRating14(ev14){
    let span14 = ev14.currentTarget;
    let stars14 = document.querySelectorAll('.star14');
    let match14 = false;
    let num14 = 0;
    stars14.forEach(function(star14, index14){
        if(match14){
            star14.classList.remove('rated14');
        }else{
            star14.classList.add('rated14');

        }
        
        if(star14 === span14){
            match14 = true;
            num14 = index14 + 1;
        }
    });
    document.querySelector('.stars14').setAttribute('data-rating14', num14);
}
