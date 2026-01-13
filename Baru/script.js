let currentScroll = 0;
const scrollAmount = 240;

function scrollCarousel(direction) {
    const grid = document.getElementById('booksGrid');
    const maxScroll = grid.scrollWidth - grid.parentElement.clientWidth;

    currentScroll += direction * scrollAmount;
    currentScroll = Math.max(0, Math.min(currentScroll, maxScroll));

    grid.style.transform = `translateX(-${currentScroll}px)`;
}