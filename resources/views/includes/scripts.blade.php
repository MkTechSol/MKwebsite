<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/bootstrapbundle.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>






<script>
$(document).ready(function() {
    // Add click event listener to the products dropdown toggle
    $('#productsDropdown').click(function() {
        // Toggle the visibility of the categories submenu
        $(this).next('.dropdown-menu').toggle();
    });
});
</script>
    

<script>
  $('.slick-carousel').slick({
  centerMode: true,
  slidesToShow: 3,

  
  autoplay: true,
  autoplaySpeed: 3000,
  pauseOnHover: true,
  pauseOnDotsHover: true,
  edgeFriction: 0.05,
  infinite: true, 
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1
      }
    }]
});
</script>
<script>
  $('.slick-carousel1').slick({
  centerMode: true,
  slidesToShow: 5,

  nav:false,
  autoplay: true,
  autoplaySpeed: 3000,
  pauseOnHover: true,
  pauseOnDotsHover: true,
  edgeFriction: 0.05,
  infinite: true, 
    responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2
      }
    }]
});
$('.sll1').click(function(){
        $('.slick-carousel1').slick('slickNext');
    });
    $('.sll2').click(function(){
        $('.slick-carousel1').slick('slickPrev');
    });



   
</script>
<script>$(document).ready(function(){
  $('.slick-arrow').hide();
  
});
</script>
<!-- <script>$(document).ready(function(){
  $('.slick-next').hide();
  $('.slick-prev').hide();
});
</script> -->



<script>
    $(document).ready(function(){
        // Initialize Slick carousel
        $('.slick-carousel2').slick({
            centerMode: true,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: true,
            pauseOnDotsHover: true,
            edgeFriction: 0.05,
            infinite: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Function to update h2 visibility based on active slide
        function updateH2Visibility(activeIndex) {
            // Hide all h2 elements
            $('.h2-container h2').hide(); 
            // Show h2 corresponding to active slide
            $('#e' + (activeIndex + 1)).show(); 
        }

        // Event handler for afterChange event of Slick carousel
        $('.slick-carousel2').on('afterChange', function(event, slick, currentSlide){
            updateH2Visibility(currentSlide);
        });

        // Call updateH2Visibility initially to show the first h2
        updateH2Visibility(0); // Assuming first slide is initially active
    });

    $('.sll4').click(function(){
        $('.slick-carousel2').slick('slickNext');
    });
    $('.sll3').click(function(){
        $('.slick-carousel2').slick('slickPrev');
    });
</script>

<script>


$(document).ready(function() {
    var $animation_elements = $('.fwwq1.kres2, .fueling, .beep, .ksre,.ggg2, .ggg1, .erp1,.revo1,.bb43, .sem1, .err1, .opp1');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = window_top_position + window_height;

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = element_top_position + element_height;

            if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
});



</script>


<script>
    $(document).ready(function() {
        var numRows = $(".hhr1").length;

        if (numRows > 3) {
            $(".hhr1:gt(2)").hide(); // Hide rows beyond the third row
            $("#readMoreRow").show(); // Show the "Read More" button
        }

        $("#readMoreBtn").click(function() {
            $(".hhr1:hidden").slideDown(); // Show the hidden rows
            $("#readMoreRow").hide(); // Hide the "Read More" button
            $("#readLessRow").show(); // Show the "Show Less" button
        });

        $("#readLessBtn").click(function() {
            $(".hhr1:gt(2)").slideUp(); // Hide extra rows
            $("#readMoreRow").show(); // Show the "Read More" button
            $("#readLessRow").hide(); // Hide the "Show Less" button
        });
    });
</script>


 <script>
        window.addEventListener('DOMContentLoaded', function () {
            // Get the image and text elements
            var image = document.getElementById('aboutUsImage');
            var text = document.getElementById('aboutUsText');
    
            // Set the initial height of the text based on the image height
            text.style.maxHeight = image.clientHeight + 'px';
    
            // Update the text height on window resize
            window.addEventListener('resize', function () {
                text.style.maxHeight = image.clientHeight + 'px';
            });
        });
    </script> 