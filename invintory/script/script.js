$(window).scroll(() => {
    // Distance from top of document to top of footer.
    var topOfFooter = $(".footer").position().top;
    var topOfSidebar = $(".sidebar").position().top;
    var scrollDistance = $(window).scrollTop();
 
    // Distance user has scrolled from top, adjusted to take in height of sidebar
    scrollDistanceFromTopOfDoc = $(document).scrollTop() + window.innerHeight;
    // Difference between the two.
    scrollDistanceFromTopOfFooter = scrollDistanceFromTopOfDoc - topOfFooter;
 
    // If user has scrolled further than footer,
    // pull sidebar up using a negative margin.
    if (scrollDistanceFromTopOfDoc > topOfFooter) {
       $(".sidebar").css("margin-top", 0 - scrollDistanceFromTopOfFooter);
       $(".header").css("top", -60);
    } else {
       $(".sidebar").css("margin-top", 0);
       $(".header").css("top", 0);
    }
 
    // Assign active class to nav links while scolling
    $(".post").each(function (i) {
       if ($(this).position().top <= scrollDistance) {
          $(".nav ul li a.active").removeClass("active");
          $(".nav ul li a").eq(i).addClass("active");
       }
    });
 });
 