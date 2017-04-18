    <?php include 'partials/header.php'; ?>
    <!-- Home Page
    ==========================================-->
    <div id="at-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <!-- <img class="img-responsive" src="img/andrewtehrani.png" alt="Andrew Tehrani, Software Developer"> -->
                <h1>Andrew Tehrani</h1>
                <p class="lead"><strong><span class="color">Application Developer.</span> Space Enthusiast.</strong> <strong><span class="color">Volunteer.</span></strong></p>
                <br />
                <ul class="list-inline mobile-links">
                    <li>
                        <a href="https://linkedin.com/in/tehraniandrew" target="_blank" title="LinkedIn" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/atehrani21" target="_blank" title="GitHub" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                    </li>
                    <li>
                        <a href="https://devpost.com/atehrani21" target="_blank" title="DevPost" class="btn-social btn-outline"><i class="fa fa-fw fa-code-fork"></i></a>
                    </li>
                    <li>
                        <a href="mailto:atehrani21@gmail.com" target="_blank" title="Email" class="btn-social btn-outline"><i class="fa fa-fw fa-envelope-o"></i></a>
                    </li>
                    <li>
                        <a href="/resume.pdf" target="_blank" title="Resume" class="btn-social btn-outline regular-btn">Resume</a>
                    </li>
                </ul>
                <a href="#at-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Page
    ==========================================-->
    <section class="at-about-skills" id="at-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/andrewT.jpg" class="img-responsive block-img">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2><strong>About Me</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="lead">Hi, I'm Andrew. Nice to meet you!</p>
                        <p class="intro">I am a full stack developer based in northern New Jersey. I graduated from Rutgers University in January 2016 with a degree in Information Technology. Since then, I have begun setting goals for myself to tackle challenging problems that can better me as a developer while helping make the world a better place. As a professional and a hobbyist, I strive to get closer and closer to reaching this goal every day by working on personal projects, independent research/coursework, and volunteering. Building apps that make everyday tasks simpler while helping young students learn computer science and apply it to their own lives are both goals I strive to achieve with any initiative I take. This is what excites me the most about this field, and as I continue to learn both professionally and on the side, I strive to find new ways to solve problems on both past and current initiatives.</p>
                        <p class="intro">When I'm not coding, I like to learn about space and do my own amateur astronomy, whether that's through my own telescope or an actual public observatory. In addition, I enjoy sharing my knowledge of fitness and health through my own <a href="http://gymworkingouttips.wordpress.com" target="_blank">fitness blog</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section
    ==========================================-->
    <section id="at-portfolio">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Portfolio</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
                
            <div class="categories">
                
            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".webdev">Web Development</a></li>
                        <li><a href="#" data-filter=".mobile" >Mobile Apps</a></li>
                        <li><a href="#" data-filter=".research" >Research</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
                
            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 webdev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/myrent">
                                <div class="hover-text">
                                    <h4>MyRent Condos</h4>
                                    <small>Web Development</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/133.png" class="img-responsive" alt="myrent logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 webdev mobile">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- <a href="/portfolio/botbooker"> -->
                            <a href="/portfolio/botbooker">
                                <div class="hover-text">
                                    <h4>BotBooker Chat Bot</h4>
                                    <small>Web Development, Mobile Apps</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/bblogo.png" class="img-responsive fixed-portfolio-img" alt="botbooker app messenger">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 mobile">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- <a href="/portfolio/nali"> -->
                            <a href="/portfolio/nali">
                                <div class="hover-text">
                                    <h4>Nali</h4>
                                    <small>Mobile Apps</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/nali.png" class="img-responsive fixed-portfolio-img" alt="nali logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 webdev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/safespace">
                                <div class="hover-text">
                                    <h4>SafeSpace</h4>
                                    <small>Web Development</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/safespace.png" class="img-responsive fixed-portfolio-img" alt="safespace logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 webdev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/tozzilaw">
                                <div class="hover-text">
                                    <h4>Tozzi Law</h4>
                                    <small>Web Development</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/anthonytozzi.jpg" class="img-responsive" alt="tozzi law home">
                            </a>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6 col-md-3 col-lg-3 webdev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/mtcpa">
                                <div class="hover-text">
                                    <h4>Mark Tehrani, CPA Website</h4>
                                    <small>Web Development</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/mtcpa_portfolio.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 webapp">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/codeplayer">
                                <div class="hover-text">
                                    <h4>CodePlayer - UI Text Editor</h4>
                                    <small>Web Development</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/htmlcode.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 research">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/portfolio/responsive">
                                <div class="hover-text">
                                    <h4>The Future of Responsive Design</h4>
                                    <small>Research</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/multiplatform_icon.png" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section
    ==========================================-->
    <section id="at-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>Contact Me</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    </div>    
                        <p class="lead">Have an opportunity you want to share or just want to have a conversation? Feel free to send me an email or reach out on my other web links!</p>
                        
                        <a href="mailto:atehrani21@gmail.com" class="btn btn-primary" target="_blank"><i class="fa fa-envelope fa-fw"></i><span class="network-name"> atehrani21@gmail.com</span></a>
                        
                        <div id="connect">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://linkedin.com/in/tehraniandrew" target="_blank" title="LinkedIn" class="btn btn-primary"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/atehrani21" target="_blank" title="GitHub" class="btn btn-primary"><i class="fa fa-fw fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="https://devpost.com/atehrani21" target="_blank" title="DevPost" class="btn btn-primary"><i class="fa fa-fw fa-code-fork"></i></a>
                                </li>
                                <li>
                                    <a href="/resume.pdf" target="_blank" title="Resume" class="btn btn-primary">Resume</a>
                                </li>
                            </ul> 
                        </div>           

                </div>
            </div>

        </div>
    </section>

    <?php include 'partials/footer.php'; ?>