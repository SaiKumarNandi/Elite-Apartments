//Created by Sai Kumar Nandi
function start(){
    document.getElementById("policyImage1").addEventListener("click", policyDescription1, false);
    document.getElementById("policyImage2").addEventListener("click", policyDescription2, false);
    document.getElementById("policyImage3").addEventListener("click", policyDescription3, false);
    document.getElementById("policyImage4").addEventListener("click", policyDescription4, false);
    document.getElementById("policyImage5").addEventListener("click", policyDescription5, false);
}//end start()

function policyDescription1(){
    document.getElementById("policyDescription1").innerHTML = "If pets are permitted, abide by any special rules set forth in your lease " + 
    "agreement, such as those pertaining to the number of pets permitted, pet breed restrictions, and size limitations. " + 
    "Additionally, you must always keep your pets under control and carefully clean up after them.";
    document.getElementById("policyDescription2").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription3").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription4").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription5").innerHTML = "Click on the image to see description!!";
}//end policyDescription1()

function policyDescription2(){
    document.getElementById("policyDescription2").innerHTML = "If you want to know which utilities are covered by your rent and " + 
    "which ones you'll have to pay for, make sure to read your lease agreement carefully. " + 
    "Additionally, you should be careful not to squander power or water when using utilities.";  
    document.getElementById("policyDescription1").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription3").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription4").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription5").innerHTML = "Click on the image to see description!!";
}//end policyDescription2

function policyDescription3(){
    document.getElementById("policyDescription3").innerHTML = "Respect your neighbors' right to privacy and abide by any rules governing " + 
    "access to public spaces or the use of security cameras. To safeguard " + 
    "your security and personal privacy, make sure to secure your doors and windows.";
    document.getElementById("policyDescription2").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription1").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription4").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription5").innerHTML = "Click on the image to see description!!";
}//end policyDescription3

function policyDescription4(){
    document.getElementById("policyDescription4").innerHTML = "Follow any maintenance regulations, such as prohibitions " + 
    "making repairs or adjustments to the flat without permission, " + 
    "and promptly notify your landlord of any maintenance difficulties.";
    document.getElementById("policyDescription2").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription3").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription1").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription5").innerHTML = "Click on the image to see description!!";
}//end policyDescription4

function policyDescription5(){
    document.getElementById("policyDescription5").innerHTML = "To avoid late fines and/or legal action from your landlord, pay all " + 
    "of your bills on time and in full. Make sure you thoroughly read your lease agreement to " + 
    "understand which costs, such as rent, utilities, or other fees, you are responsible for paying.";
    document.getElementById("policyDescription2").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription3").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription4").innerHTML = "Click on the image to see description!!";
    document.getElementById("policyDescription1").innerHTML = "Click on the image to see description!!";
}//end policyDescription5

//window load event
window.addEventListener("load", start, false);