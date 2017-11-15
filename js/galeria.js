window.addEvent("domready", function() {  
    var ex6Carousel = new iCarousel("example_6_content", {  
        idPrevious: "example_6_previous",  
        idNext: "example_6_next",  
        idToggle: "undefined",  
        item: {  
            klass: "example_6_item",  
            size: 640  
        },  
        animation: {  
            type: "scroll",  
            duration: 1000,  
            amount: 1  
        }  
    });  
  
    $("thumb0").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(0)});  
    $("thumb1").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(1)});  
    $("thumb2").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(2)});  
    $("thumb3").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(3)});  
    $("thumb4").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(4)});  
    $("thumb5").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(5)});  
    $("thumb6").addEvent("click", function(event){new Event(event).stop();ex6Carousel.goTo(6)});  
});  