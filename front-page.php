<?php
/*
    Template Name: Home Page    
*/

get_header(); ?>

    <!-- HEADER
    ================================================== -->
    <section class="hero">
        <header class="container banner" role="banner">
            <h1>RaShaun Eshalomi</h1>
            <p>Front-End Web Developer</p>
        </header>
    </section>
    
    <!-- ABOUT
    ==================================================================== -->
    <div id="about">
        <article class="about-content container">
            <p>
                Hi! I&#8217;m RaShaun, a Front-end and WordPress developer, web designer, and copy editor. I love building beautiful, responsive websites that make my clients happy and their brands/businesses shine. I also deeply enjoy the tinkering, frustration, trial and error, and creative outlet that comes with coding.
            </p> 
        </article>
    </div>

    <!-- CAN DO
    ==================================================================== -->
    <div id="cando" class="window">
        <div class="container cando-content">
            <h2 class="title">What Can I Do for You?</h2>
                <p>
                    I can build a site from scratch, customize or update an existing site, transfer your content to a new site, or customize a WordPress theme you want to use. I also possess expertise in copy editing, so I can look over your content and check for grammatical, spelling, and punctuation errors, ensuring that the content is clean and error free.
                </p>
                <p>Check out some of my work below!</p>
            </div>
        </div>
    </div>

    <!-- WORK
    ================================================== -->
    <div id="work" class="window">
        <div class="slide one">
            <div class="work-content container">
                <h2 class="title">BCMusic1st</h2>
                <a target="_blank" href="http://www.bcmusic1st.com">
                    <span class="sr-only">Opens in new window</span>
                    <img src="assets/img/bcsc.jpg" alt="Screenshot of website for BCMusic1st.">
                </a>
                <p>
                    I took this musician's blog and turned it into a website, complete with a non-blog home page, services page, and contact page. With WordPress, he can update/ his information with knowing any code.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 31 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>

        <div class="slide two window">
            <div class="work-content container">
                <h2 class="title">Resumes by Brooke Miles</h2>
                    <div class="screenshots">
                        <div class="shot">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img/brookehome.png" target="blank">
                                <span class="sr-only">Opens in new window</span>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/brookehome.png" alt="Screenshot of website for Resumes by Brooke Miles.">
                            </a>
                        </div>
                        <div class="shot">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img/brookeservices.png" target="blank">
                                <span class="sr-only">Opens in new window</span>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/brookeservices.jpg" alt="Screenshot of website for Resumes by Brooke Miles.">
                            </a>
                        </div>
                        <div class="shot">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img/brookecontact.png" target="blank">
                                <span class="sr-only">Opens in new window</span>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/brookecontact.jpg" alt="Screenshot of website for Resumes by Brooke Miles.">
                            </a>
                        </div>
                    </div>
                <p>
                    Looking for a modern and professional site? Designed and built a more contemporary and sleek WordPress site for a resume writer, who was just starting out.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 21 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>

        <div class="slide three window">
            <div class="work-content container">
                <h2 class="title">Personal Website</h2>
                <img src="assets/img/mysite.jpg" alt="Screenshot of my personal website.">
                <p>
                    I'm capable of designing and building both modern and outside-of-the-box sites. I don't limit myself by sticking with one specific design, which allows my clients to think outside of the box.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 35 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>
    </div> 

    <!-- PROJECTS
    ================================================== -->
    <div id="projects" class="window">
        <div class="slide four">
            <div class="work-content container">
                <h2 class="title">Colorfy</h2>
                <a target="_blank" href="https://rayladevine.github.io/colorfy/">
                    <span class="sr-only">Opens in new window</span>
                    <img src="http://rashauneshalomi.com/wp-content/uploads/2016/12/logo-e1482431952414.png" alt="Screenshot of the word "Colorfy".">
                </a>
                <p>
                    I can implement a grid design to showcase products in a store, various stories in a blog, or photographs in your portfolio.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 78 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>
                      
        <div class="slide five">
            <div class="work-content container">
                <h2 class="title">REJD</h2>
                <a target="_blank" href="http://www.rejd.rashauneshalomi.com">
                    <span class="sr-only">Opens in new window</span>
                    <img src="assets/img/rejd.JPG" alt="Screenshot of website for REJD.">
                </a>
                <p>
                    If you already have a design, I can build from it with no problems. This work in progress is a copy of <a target="_blank" href="http://www.hzdg.com"><span class="sr-only">Opens in new window</span>HZDG's current site</a>, with some minor changes to the colors. I also used different graphics, and customized some myself.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 37 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>

        <div class="slide six">
            <div class="work-content container" id="work-inprogress">
                <h2 class="title">What am I currently working on?</h2>
                <div class="screenshots">
                    <div class="shot">
                        <a href="<?php bloginfo('template_directory'); ?>/assets/img/samhome.png" target="_blank">
                            <span class="sr-only">Opens in new window</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/homescreen.png" alt="Screenshot of homepage.">
                        </a>
                    </div>
                    <div class="shot">
                        <a href="<?php bloginfo('template_directory'); ?>/assets/img/samportfolio.png" target="_blank">
                            <span class="sr-only">Opens in new window</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/samportfolio.jpg" alt="Screenshot of portfolio page.">
                        </a>
                    </div>
                    <div class="shot">
                        <a href="<?php bloginfo('template_directory'); ?>/assets/img/samabout.png" target="_blank">
                            <span class="sr-only">Opens in new window</span>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/samabout.jpg" alt="Screenshot of about page.">
                        </a>
                    </div>
                </div>
                <p>
                    Building a complete website for a freelance photographer. He wants a simple site that is easy to look though and focuses on his photographs. Also included social media buttons and a simple contact form for potential clients.
                </p>
                <a class="btn btn-primary btn-sm tech-details" href="<?php the_permalink( 39 ); ?>">
                    <p>Techy Details</p>
                </a>
            </div>
        </div>
    </div>

    <!-- CONTACT
    ================================================== -->
    <div id="contact" class="window">
        <div class="contact-content container">     
            <h2 class="title">Let&#8217;s Talk!</h2>
            <h3 class="contact-description">
                Interested in working together? Need a quick fix on your website? Or just want to learn more about me and what I do?
            </h3>
            <div class="contact-address">
                <a href='mailto:hello@rashauneshalomi.com'>
                    <p>hello@rashauneshalomi.com</p>
                </a>
                <p>
                    <a target="_blank" href="https://twitter.com/RaylaDevine">tweet me</a>
                </p>
            </div>
        </div>

        <div id="arrow">
             <a href="#top" class="scrollToTop">
                <span class="sr-only">Back to Top</span>
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
    </div>

<?php get_footer(); ?>