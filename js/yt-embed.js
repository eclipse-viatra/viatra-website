var value = "; " + document.cookie;
var parts = value.split("; eclipse_cookieconsent_status=");
if (parts.length == 2 && parts.pop().split(";").shift() == "allow") {
    var videos = document.getElementsByClassName("youtube");
    for (var i=0; i<videos.length; i++) {
        var youtube = videos[i];

        var imgUrl = youtube.firstChild.firstChild.getAttribute("src")
        // Remove statically generated content (a/img tags)
        while(youtube.firstChild) {
            youtube.removeChild(youtube.firstChild);
        }
        
        // Replace it with a static overlay image
        var img = document.createElement("img");
        img.setAttribute("src", imgUrl);
        img.setAttribute("class", "thumb");
        

        // Overlay the Play icon to make it look like a video player
        var play = document.createElement("div");
        play.setAttribute("class","fa fa-5x fa-play");
        
        youtube.appendChild(img);
        youtube.appendChild(play);

        youtube.onclick = function() {
            var iframe = document.createElement("iframe");
            iframe.setAttribute("src",
                "https://www.youtube.com/embed/" + this.id 
                + "?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1");
            iframe.height = this.style.height;
            iframe.width = this.style.width;

            this.parentNode.replaceChild(iframe, this);
        }
    }
} 