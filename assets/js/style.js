window.onscroll = function() {
        showScrollButton();
    };

    function showScrollButton() {
        var scrollToTopButton = document.getElementById('scrollToTop');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });