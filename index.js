// the first 2 functions control the open and close for the overlay for the nav for the mobile naviagtion
function openNav() {
    document.getElementById("mySidepanel").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

// this is the code for the tabs that show the contnet on the help and naviagte pages
function openPage(pageName, elmnt, color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



// the js that controls the sub category content 
function openSubCategory(evt, cityName) {
    var i, subtabcontent, tablinks;
    subtabcontent = document.getElementsByClassName("subtabcontent");
    for (i = 0; i < subtabcontent.length; i++) {
        subtabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="mainOpen" and click on it
document.getElementById("mainOpen").click();
// document.getElementById("helpmainOpen").click();