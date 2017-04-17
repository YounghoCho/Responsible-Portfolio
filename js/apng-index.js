(function(){
    $(function(){
        APNG.ifNeeded(function() {
            for (var i = 0; i < document.images.length; i++) {
                var img = document.images[i];
                if (/\.png$/i.test(img.src)) APNG.animateImage(img);
            }
        });
    })
})();