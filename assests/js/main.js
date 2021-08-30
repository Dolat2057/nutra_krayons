// nav icon js

let icon = document.getElementById('icon');

icon.addEventListener('click', function() {
    icon.classList.toggle('fa-times');

});

//  aside cart js

function openNav() {
    document.getElementById("mySidenav").style.width = "310px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


//full page search
function openSearch() {
    document.getElementById("mySearch").style.width = "100%";
}

function closeSearch() {
    document.getElementById("mySearch").style.width = "0";
}
// quantity increases price increases js 

var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');


function subTotal() {
    gt = 0;
    for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt = gt + (iprice[i].value) * (iquantity[i].value);

    }
    gtotal.innerText = gt;


}
subTotal();