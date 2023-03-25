function openNav() {
    if(document.getElementById("mySidebar").style.width === "0px"){
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("mySidebar").style.boxShadow = "1px 1px #E2E2E2";
        document.getElementById("main").style.marginLeft = "270px";
    }
    else{
        document.getElementById("mySidebar").style.width = "0px";
        document.getElementById("mySidebar").style.boxShadow = "0px 0px white";
        document.getElementById("main").style.marginLeft= "10px";
    }
}

function widthChange(x) {
    if (x.matches) {
        document.getElementById("mySidebar").style.width = "0px";
        document.getElementById("mySidebar").style.boxShadow = "0px 0px 0px 0px white";
        document.getElementById("main").style.marginLeft= "10px";
        
        document.getElementById("openbtnn").style.display = "block";
    } 
    else {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("mySidebar").style.boxShadow = "1px 1px 5px 5px #E2E2E2";
        document.getElementById("main").style.marginLeft = "270px";
        document.getElementById("openbtnn").style.display = "none";
    }
}

var x = window.matchMedia("(max-width: 650px)");
widthChange(x);
x.addListener(widthChange);


