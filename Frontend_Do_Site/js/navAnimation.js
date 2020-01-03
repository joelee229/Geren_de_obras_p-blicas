// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function(){scrollFunction()};
const img = document.getElementById("img");


function scrollFunction() {
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding= "0 5px 0 25px";
        document.getElementById("navbar").style.backgroundColor="#ffffff";
        img.src="../_images/project.png";
        img.style.width="90px";
        img.style.height="90px";
        
    }else{
        document.getElementById("navbar").style.padding = "30px 10px 10px 20px";
        document.getElementById("navbar").style.backgroundColor="rgba(255, 255, 255, 0.322)";
        img.src="../_images/logo3-2.0.png";
        img.style.width="180px";
        img.style.height="100px";
        
    }
}


