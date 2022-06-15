<?php
/*
Website FOOTER part.

- Includes wp_footer() function
- Footer menu and some basic static content
*/
?>
    <section class="container contact pt-md">
        <div class="container__inner d-flex-2">
            <div class="flex-2-child-50">
                <h2 class="pb-sm">Write me message</h2>
                <form action="#" class="contact__form">
                    <div class="contact__form-inputs">
                        <input type="text" placeholder="Your name">
                        <input type="email" placeholder="Your email">
                    </div>
                    <div class="contact__form-textarea">
                        <textarea name="" id="" cols="20" rows="6" placeholder="Your message"></textarea>
                    </div>
                    <button class="btn btn--white btn--white--form-border pb-sm">Send message</button>
                </form>
            </div>
            <figure class="flex-2-child-50 txt-center">
                <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/contact-me.webp'; ?>" alt="Contact"/>
            </figure>
        </div>
    </section>
    <footer class="container footer">
        <div class="container__inner">
            <nav class="footer__nav">
                <ul>
                    <li>Read articles
                        <ul class="sub-menu">
                            <li><a href="#">All articles</a></li>
                            <li><a href="#">Personal articles</a></li>
                            <li><a href="#">Web & work</a></li>
                            <li><a href="#">LT</a></li>
                        </ul>
                    </li>
                    <li>More information
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About me</a></li>
                            <li><a href="#">Web development</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="footer__icons">
                <div class="footer-svg">
                <a href="https://www.linkedin.com/in/robertasduncia/" target="_blank">
                    <svg class="footer-icon__linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" xmlns:v="https://vecta.io/nano"><path d="M72.16 99.73H9.927a5 5 0 0 0-5 5v199.928a5 5 0 0 0 5 5H72.16a5 5 0 0 0 5-5V104.73a5 5 0 0 0-5-5zM41.066.341C18.422.341 0 18.743 0 41.362 0 63.991 18.422 82.4 41.066 82.4c22.626 0 41.033-18.41 41.033-41.038C82.1 18.743 63.692.341 41.066.341zm189.388 94.42c-24.995 0-43.472 10.745-54.679 22.954V104.73a5 5 0 0 0-5-5h-59.599a5 5 0 0 0-5 5v199.928a5 5 0 0 0 5 5h62.097a5 5 0 0 0 5-5V205.74c0-33.333 9.054-46.319 32.29-46.319 25.306 0 27.317 20.818 27.317 48.034v97.204a5 5 0 0 0 5 5H305a5 5 0 0 0 5-5V194.995c0-49.565-9.451-100.234-79.546-100.234z"/></svg>
                </a>
                </div>
                <div class="footer-svg">
                    <a href="https://github.com/Duncia" target="_blank">
                        <svg class="footer-icon__github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:v="https://vecta.io/nano"><path d="M12 2A10 10 0 0 0 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476l-.013-1.862C7 19.613 6.35 18.538 6.15 17.975c-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938a3.89 3.89 0 0 1 1.025-2.688c-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338 9.28 9.28 0 0 1 2.5.337c1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85l-.013 2.75c0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12 10 10 0 0 0 12 2z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>