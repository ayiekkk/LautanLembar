function scrollToLeft() {
            const container = document.getElementById('scrollContainer');
            container.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        }

        function scrollToRight() {
            const container = document.getElementById('scrollContainer');
            container.scrollTo({
                left: container.scrollWidth,
                behavior: 'smooth'
            });
        }