$( document ).ready(function() {
    var heights = $(".equal").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".equal").height(maxHeight);
});