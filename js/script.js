var top_button = document.getElementById("top_button");

window.onscroll = function() {
    scroll_button()
};

function scroll_button() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        top_button.style.display = "block";
    }
    else {
        top_button.style.display = "none";
    }
}

function top_scroll() {
    $("html, body").animate({scrollTop: "0"}, 1000); 
    //document.body.scrollTop = 0;
    //document.documentElement.scrollTop = 0;
}
