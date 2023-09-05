<footer>
    <div class="main_container">
        <div class="flex">
            <div>
                <h4><span class="highlighter">SERENITY HOSPITAL</span></h4>
                <p class="adress">
                    Dhamangoan Awari Road, Dhumalwadi, Ap/post/ Tal. Akole<br />
                    Dist. Ahmednagar
                </p>
                <p style="margin-block: 2rem 0.5rem;"><a href="mailto: dnyaneshwarpk20@gmail.com"><i
                            class="fa-solid fa-envelope"></i> dnyaneshwarpk20@gmail.com</a></p>
                <p><i class="fa-solid fa-phone"></i><a href="tel: +91 9067183889">+91 9067183889</a>
            </div>
            <div>
                <h4>Important Links</h4>
                <ul>
                    <a href="{{ url('/about') }}">
                        <li>About</li>
                    </a>
                    <a href="{{ url('/contact') }}">
                        <li>Contact</li>
                    </a>
                    <a href="{{ url('/services') }}">
                        <li>Services</li>
                    </a>
                    <a href="{{ url('/privacy-policy') }}">
                        <li>Privacy Policy</li>
                    </a>
                </ul>
            </div>
            <div>
                <h4>Our Socials</h4>
                <ul>
                    <a href="">
                        <li><i class="fa-brands fa-whatsapp"></i> Whatsapp</li>
                    </a>
                    <a href="">
                        <li><i class="fa-brands fa-instagram"></i> Instagram</li>
                    </a>
                    <a href="">
                        <li><i class="fa-brands fa-facebook"></i> Facebook</li>
                    </a>
                </ul>
            </div>
        </div>
        <hr>
        <p style="text-align: center;">Serenity Hospital © 2023 | Created by <span
                class="highlighter">Dnyaneshwar</span>
            with love <i class="fa-solid fa-heart" style="color: red;"></i></p>
    </div>
</footer>

</body>
<script>
    // navbar toggle
    const sidebar = document.querySelector('nav ul');
    const menuBtn = document.querySelector('nav .fa-bars');
    const sideBar_links = sidebar.querySelectorAll('a');
    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('sideBar_toggle');
    });
    sideBar_links.forEach((link) => {
        link.addEventListener('click', () => {
            sidebar.classList.toggle('sideBar_toggle');
        });
    });
</script>

<script>
    // Carousel
    const carousel_container = document.querySelector('#hero .carousel_container');
    const carousel_items = carousel_container.querySelectorAll('.carousel_item');
    const video_width = carousel_items[0].getBoundingClientRect().width;
    console.log(video_width);
    console.log(carousel_items);
    let carousel_index = 0
    setInterval(() => {
        if (carousel_index != 2) {
            carousel_index++
        } else {
            carousel_index = 0;
        }
        carousel_container.scrollLeft = carousel_index * video_width;
    }, 10000);
</script>
@yield('scripts')

</html>
