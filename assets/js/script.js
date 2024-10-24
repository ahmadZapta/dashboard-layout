document.addEventListener("DOMContentLoaded", function(){

    const togglerIcon = document.getElementById("toggle");
    const dashboardLayout = document.querySelector(".main-layout");
    togglerIcon.addEventListener("click", function () { 
        dashboardLayout.classList.toggle("show");
     });

});