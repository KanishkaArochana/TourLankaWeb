const swiper = new Swiper('.reviews-slider', {
    direction: 'horizontal', // Horizontal scrolling
    loop: false, // Disable looping
    slidesPerView: 2, // Show one slide at a time
    spaceBetween: 20, // Space between slides
    clickable: true, // Enable slide clicking
    navigation: {
        nextEl: '.swiper-button-next', // Next button
        prevEl: '.swiper-button-prev', // Previous button
    },
});