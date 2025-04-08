

        <!--============== Page Banner Start ==============-->
        <div class="page-banner-simple bg-secondary py-5">
            <div class="container mt-5">
            
                <div class="row">
                
                    <div class="col-lg-6">
                   
                        <h3 class="banner-title text-white" >dfjkdjfijd</h3>
                        <span class="banner-tagline font-medium text-white" >fhdifdhfdifjidj</span>
                        
                    </div>
                
                </div>
             
            </div>
        </div>
        <!--============== Page Banner End ==============-->

        <!--============== Features Start ==============-->
        <div class="full-row pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-secondary mb-5">
                       
                            <span class="tagline-2 text-primary"><?php echo $first_section1['title2']; ?></span>
                            <h2 class="text-secondary mb-4"><?php echo $first_section1['heading']; ?></h2>
                           
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-md-2 row-cols-1">
<!-- 
                         <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">02</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Payment Guarantee</a></h5>
                                    <p>Creating a higher spacing and how people move through a unique and impactful campaign.</p>
                                </div>
                            </div> -->
                        
                         
                                <?php foreach ($first_section2 as $item): ?>
                                    <div class="col border-start border-geay mb-5">
                                        <div class="simple-thumb transation px-4">
                                            <span class="h3 down-line text-general mb-4 d-table"><?= $item['position']; ?></span>
                                            <h5 class="my-3">
                                                <a href="https://www.google.com/" class="text-secondary"><?= $item['title']; ?></a>
                                            </h5>
                                            <p><?= $item['description']; ?></p>
                                        </div>
                                    </div>
                            <?php endforeach;?>
                        </div>
                    </div> 
 

                            <!-- <?php foreach($first_section2 as $item):?>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                               
                                    <span class="h3 down-line text-general mb-4 d-table"><?= htmlspecialchars($item['position']); ?></span>
                                    <h5 class="my-3"><a href="#" class="text-secondary"><?= htmlspecialchars($item['title']); ?></a></h5>
                                    <p><?= htmlspecialchars( $item['description']); ?></p>
                                  
                                </div>
                            </div>
                            <?php endforeach;?> -->
                            <!-- <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">02</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Payment Guarantee</a></h5>
                                    <p>Creating a higher spacing and how people move through a unique and impactful campaign.</p>
                                </div>
                            </div>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">03</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">House Management</a></h5>
                                    <p>Creating a higher spacing and how people move through a unique and impactful campaign.</p>
                                </div>
                            </div>
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <span class="h3 down-line text-general mb-4 d-table">04</span>
                                    <h5 class="my-3"><a href="#" class="text-secondary">Property Deal</a></h5>
                                    <p>Creating a higher spacing and how people move through a unique and impactful campaign.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--============== Features End ==============-->

        <!--============== Banner Start ==============-->
        <div class="full-row paraxify" style="background-image: url(<?=base_url();?>assets/images/background/bg-4.png); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-white">
                            <span class="tagline text-primary"><?php echo $second_section1['title']; ?></span>
                            <h3 class="mb-4 text-white"><?php echo $second_section1['heading']; ?></h3>
                            <p><?php echo $second_section1['description1']; ?></p>
                            <p><?php echo $second_section1['description2']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner End ==============-->

        <!--============== Approch Section Start ==============-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="">
                            <span class="tagline-2 text-primary"><?php echo $third_section1['title']; ?></span>
                            <h2 class="text-secondary mb-4"><?php echo $third_section1['heading']; ?></h2>
                            <p><?php echo $third_section1['description']; ?></p>
                        </div>
                        <div class="img-source">
                            <img src="<?=base_url('uploads/'.$third_section1['picture']);?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="bg-white rounded border p-30">
                            <h4 class="mb-3"><?php echo $forth_section['heading1']; ?></h4>
                            <p><?php echo $forth_section['description1']; ?></p>
                            <!-- <p>Posuere ante tincidunt sed porta senectus fusce interdum. Dictum class semper Ornare venenatis habitant sodales. Venenatis volutpat torquent. Curae; suspendisse ligula suscipit magna. Interdum dapibus in nulla mollis velit
                                taciti mollis gravida torquent lacus lobortis volutpat elementum leo pharetra. Hac congue consequat ante laoreet consectetuer. Cum. Nulla nisl purus a. Et felis platea ligula cubilia massa ultrices leo iaculis porttitor.</p> -->
                            <h4 class="mb-3"><?php echo $forth_section['heading2']; ?></h4>
                            <p><?php echo $forth_section['description2']; ?></p>
                            <!-- <p>Aliquam sollicitudin consequat praesent eu diam. Aptent auctor bibendum. Vulputate porttitor. Taciti tincidunt taciti vel cubilia posuere nascetur ultrices ultrices lectus ridiculus sodales pharetra felis eget nonummy justo
                                mauris blandit. consequat praesent eu diam. Aptent auctor bibendum. Vulputate porttitor. Taciti tincidunt taciti vel cubilia posuere nascetur.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Approch Section End ==============-->

        <!--============== Statistics Section Start ==============-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-secondary mb-5">
                            <span class="tagline-2 text-primary"><?=$five_section2['title']; ?></span>
                            <h2 class="text-secondary mb-4"><?=$five_section2['heading'] ;?></h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="fact-counter">
                            <div class="row row-cols-md-3 row-cols-1">
                                <?php foreach($five_section as $item):?>
                                <div class="col">
                                    <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                        <span class="count-num text-secondary h1" data-speed="3000" data-stop="<?=$item['number'];?>"><?=$item['number'];?></span>
                                        <div class="text-secondary h5 py-2"><?=$item['heading2'];?></div>
                                        <p><?=$item['description'];?></p>
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <!-- <div class="col">
                                    <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                        <span class="count-num text-secondary h1" data-speed="3000" data-stop="137">137</span>
                                        <div class="text-secondary h5 py-2">Markets Campaigns</div>
                                        <p>We have strict intentions to completely change the way of UI/UX creation.</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                        <span class="count-num text-secondary h1" data-speed="3000" data-stop="45">45</span>
                                        <div class="text-secondary h5 py-2">API Integrations</div>
                                        <p>Software-enabled platforms to completely change the way of UI/UX iterations.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="capability-avg">
                        <?php foreach($five_section3 as $item):?>
                            <div class="bar-progress fact-counter text-secondary position-relative mb-4">
                                <span class="pb-2 d-block text-start"><?=$item['project'];?></span>
                                <div class="progress bg-general count wow fadeIn" data-wow-duration="0ms">
                                    <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="<?=$item['percen'];?>"><?=$item['percen'];?></span>%</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="<?=$item['percen'];?>" aria-valuemax="100"> </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
                            <!-- <div class="bar-progress fact-counter text-secondary position-relative mb-4">
                                <span class="pb-2 d-block text-start">Java Development</span>
                                <div class="progress bg-general count wow fadeIn" data-wow-duration="0ms">
                                    <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="51">51</span>%</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="51" aria-valuemax="100"> </div>
                                </div>
                            </div>
                            <div class="bar-progress fact-counter text-secondary position-relative mb-4">
                                <span class="pb-2 d-block text-start">PHP Programming</span>
                                <div class="progress bg-general count wow fadeIn" data-wow-duration="0ms">
                                    <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="95">95</span>%</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="95" aria-valuemax="100"> </div>
                                </div>
                            </div>
                            <div class="bar-progress fact-counter text-secondary position-relative mb-4">
                                <span class="pb-2 d-block text-start">Mobile App</span>
                                <div class="progress bg-general count wow fadeIn" data-wow-duration="0ms">
                                    <div class="skill-percent"><span class="count-num" data-speed="3000" data-stop="90">90</span>%</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemax="100"> </div>
                                </div>
                            </div> -->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--============== Statistics Section End ==============-->

        <!--============== Agents Start ==============-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="md-mb-30">
                            <span class="tagline-2 text-primary"><?=$six_section1['title']?></span>
                            <h2 class="text-secondary mb-0"><?=$six_section1['heading']?></h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-md-4 row-cols-sm-2 row-cols-2 g-4 ">
                            <?php foreach($six_section2 as $item):?>
                            <div class="col">
                                <a href="#" class="hover-img-upshow overflow-hidden pe-5 d-block">
                                    <img src="<?=base_url('uploads/'.$item['picture']);?>" alt="creative template">
                                </a>
                            </div>
                            <?php endforeach;?>
                            <!-- <div class="col">
                                <a href="#" class="hover-img-upshow overflow-hidden pe-5 d-block">
                                    <img src="<?=base_url();?>assets/images/partner/oh_logo_01-min.png" alt="creative template">
                                </a>
                            </div>

                            <div class="col">
                                <a href="#" class="hover-img-upshow overflow-hidden pe-5 d-block">
                                    <img src="<?=base_url();?>assets/images/partner/oh_logo_02-min.png" alt="creative template">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="hover-img-upshow overflow-hidden pe-5 d-block">
                                    <img src="<?=base_url();?>assets/images/partner/oh_logo_03-min.png" alt="creative template">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="hover-img-upshow overflow-hidden pe-5 d-block">
                                    <img src="<?=base_url();?>assets/images/partner/oh_logo_04-min.png" alt="creative template">
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Agents End ==============-->

        <!--============== Testimonials Start ==============-->
        <div class="full-row bg-white" style="background-image: url(<?=base_url();?>assets/images/background/oh_bg-min.png); background-size: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto position-relative">
                        <span class="tagline text-primary"><?=$seven_section1['title']?></span>
                        <h2 class="mb-5"><span class="font-weight-bold"><?=$seven_section1['heading']?></h2>
                        <div class="owl-carousel single-carusel testimonial-slider dot-disable position-static">
                            <?php foreach($seven_section2 as $item):?>
                            <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p><?=$item['description'];?></p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">
                                <?=$item['author'];?></span>
                            </div>
                            <?php endforeach;?> 
                            <!-- <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p>Hendrerit dapibus natoque class taciti, egestas orci dis dictumst duis platea penatibus. Pretium fusce. Nullam. Dui nec purus nam. Aenean quam nulla mauris primis mi blandit turpis nulla. Blandit suscipit eleifend dignissim
                                    ac faucibus. Ad primis nisl scelerisque rutrum. Fusce, sapien interdum inceptos, amet maecenas augue platea Tincidunt magnis nostra, sit imperdiet porttitor consectetuer.</p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">Gilbert E. Lyons, CEO Unicoder</span>
                            </div>
                            <div class="testimonial-item font-medium">
                                <span class="flaticon-right-quote quote-icon flat-medium text-primary"></span>
                                <p>Hendrerit dapibus natoque class taciti, egestas orci dis dictumst duis platea penatibus. Pretium fusce. Nullam. Dui nec purus nam. Aenean quam nulla mauris primis mi blandit turpis nulla. Blandit suscipit eleifend dignissim
                                    ac faucibus. Ad primis nisl scelerisque rutrum. Fusce, sapien interdum inceptos, amet maecenas augue platea Tincidunt magnis nostra, sit imperdiet porttitor consectetuer.</p>
                                <span class="name text-secondary h6 font-weight-medium mt-4 d-table">Gilbert E. Lyons, CEO Unicoder</span>
                            </div>  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Testimonials End ==============-->

        <!--============== Accordian Start ==============-->
        <div class="full-row bg-light pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-secondary mb-lg-5">
                            <span class="tagline-2 text-primary"><?=$eight_section['title'];?></span>
                            <h2 class="text-secondary mb-4"><?=$eight_section['heading'];?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col px-0"><img src="<?=base_url('uploads/'.$eight_section['picture']);?>" alt="image not found"></div>
                    <div class="col bg-white" style="margin-top: -100px;">
                        <div class="w-75 w-lg-100 sm-px-0" style="padding:50px 80px">
                            <div class="simple-video-play d-flex mb-3">
                                <div class="position-relative d-inline-block">
                                    <a data-fancybox href="<?=$eight_section2['video'];?>" class="rounded-circle position-relative" style="z-index: 10"><i class="flaticon-play-button position-relative xy-center flat-mini rounded-circle "></i></a>
                                    <div class="loader position-absolute xy-center">
                                        <div class="loader-inner ball-scale-multiple">
                                            <div></div>
                                            <div></div>
                                        </div><span class="tooltip">
									  <b>ball-scale-multiple</b></span>
                                    </div>
                                </div>
                                <div class="ps-4 text-secondary font-medium">Play Video</div>
                            </div>

                            <h2 class="text-secondary mb-5"><?=$eight_section2['title'];?></h2>
                            <div class="bb-accordion ac-single-show accordion-plus-left">
                            <?php foreach ($eight_section3 as $item): ?>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate active" href="#"><?=$item['project'];?></a>
                                    <div class="ac-collapse show">
                                        <p><?= $item['description']; ?></p>
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <!-- <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">Motion Graphics and Animation</a>
                                    <div class="" style="display: block;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                            https://www.youtube.com/watch?v=bh-klGboIg8"
                                        </p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">User Experience and Brand Strategy</a>
                                    <div class="ac-collapse">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Accordian End ==============-->

