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
function openSubCategory(pageName, elmnt, color) {
    var i, subcategorycontent, subtablinks;
    subcategorycontent = document.getElementsByClassName("subcategorycontent");
    for (i = 0; i < subcategorycontent.length; i++) {
        subcategorycontent[i].style.display = "none";
    }
    subtablinks = document.getElementsByClassName("subtablink");
    for (i = 0; i < subtablinks.length; i++) {
        subtablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}

// Get the element with id="mainOpen" and click on it
document.getElementById("mainOpen").click();
document.getElementById("subOpen").click();