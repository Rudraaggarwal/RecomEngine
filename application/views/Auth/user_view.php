<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/login.css">
    <style>
        .my-button {
            width: 100px;
            text-decoration: none;
            font-family: 'Inter';
            display: inline-block;
            padding: 0.5rem 1rem;
          
            font-weight: 500;
            text-align: center;
            transition-duration: 0.3s;
            transition-property: all;
            transition-timing-function: ease;
            margin: 0.75rem 0;
            border: 1px dashed black;
            color: black;
            
        }

        .my-button:hover {
            border: 1px solid #f3f3f3;
            background: black;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">SmashWizard</div>
        <ul class="navigation">
            <li><a href="<?php echo base_url(); ?>Auth/main">HOME</a></li>
            <li><a href="<?php echo base_url(); ?>Auth/profile" class="out">ACCOUNT</a></li>
            <li><a href="#review">REVIEWS</a></li>
            <li><a href="#form">CONTACT</a></li>
            <li><a href="<?= base_url(); ?>Auth/logout">Logout</a></li>
        </ul>
        <div class="hamburger">
            <i class="fa-solid fa-bars on" id="on"></i>
        </div>
        <div class="alert">
            <ul class="navigation1">
                <i class='bx bxs-x-circle close'></i>
                <li><a href="#banner" class="out">HOME</a></li>
                <li><a href="<?php echo base_url(); ?>Auth/user_view" class="out">ACCOUNT</a></li>
                <li><a href="#about" class="out">ABOUT</a></li>
                <li><a href="#review" class="out">REVIEWS</a></li>
                <li><a href="#form" class="out">CONTACT</a></li>
            </ul>
            </i>
        </div>
    </header>

    <body>
        <section>
            <div class="container">
                <div class="user signinBx">
                    <div class="imgBx"><img src="https://images.unsplash.com/photo-1612677257608-90309859bbec?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" /></div>
                    <div class="formBx">
                        <form>
                            <?php echo form_label('Name', 'name'); ?>
                            <input type="text" name="name" id="name" placeholder="<?php echo $this->session->userdata('name'); ?>" readonly />
                            <?php echo form_label('Email', 'email'); ?>
                            <input type="email" name="email" id="email" placeholder="<?php echo $this->session->userdata('email'); ?>" readonly />
                            <?php echo anchor('Auth/changePassword', 'Change Password', 'class="my-button"'); ?>
                            <?php echo anchor('Auth/changeName', 'Change Name', 'class="my-button"'); ?>
                            <br>
                            <?php echo anchor('Auth/index', 'Log Out', 'class="my-button"'); ?>

                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <!-- </html>
        <section class="contact" id="contact">
            <div class="footer">
                <div class="info">
                    <h1>User Profile</h1>
                    <table>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Note</th>
                        </tr>
                        <tr>
                            <?php if ($this->session->userdata('name')) : ?>
                                <td><?php echo $this->session->userdata('name'); ?></td>
                            <?php endif; ?>
                            <td><?php echo $email ?></td>
                            <td> Details can be changed</td>
                        </tr>

                    </table>
                </div>
                <div class="cs">
                    <h1> SERVICES</h1>
                    <ul>
                        <li><a href="<?= base_url(); ?>Auth/logout">Logout</a>

                        </li>
                        <li><a href="<?= base_url(); ?>Auth/changePassword">Change Password</a></li>
                        <li><a href="<?= base_url(); ?>Auth/changeName">Change Name</a></li>
                    </ul>
                </div>
            </div> -->
































    <!-- <div></div>
            <hr class="div-separator">
            <section class="review" id="review">
                <div class="title">
                    <h2 class="titetext">RACQUET REVIEWS</h2>
                    <p>“ Empower Your Game: Racquet Reviews That Smash Expectations ”</p>
                </div>
                <div class="container">
                    <div class="cbox1 bbox">
                        <img src="https://media.istockphoto.com/id/466766434/vector/polygonal-professional-badminton-player.jpg?s=612x612&w=0&k=20&c=0k_PdhAnOePMkj-yQkv4kTldvN4o3xtGJhJZkA7LlQQ=" alt="">
                    </div>
                    <div class="cbox2 bbox">
                        <h1>OUR HAPPY CUSTOMERS</h1>
                    </div>
                    <div class="cbox3 bbox">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm_D-PNlhl6nOIAW3kclcCKd1PpU81lG0UKQ&usqp=CAU" alt="">

                    </div>
                    <div class="cbox4 bbox">
                        <div class="boxdetail">
                            <h1>Person1</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ex praesentium quaerat magnam minima ut dicta facere ullam ipsum, tempore consectetur, repellat distinctio corporis veritatis!</p>
                        </div>
                    </div>
                    <div class="cbox5 bbox">
                        <div class="boxdetail">
                            <h1>Person2</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, voluptatem amet? Omnis exercitationem esse quos, voluptate praesentium minus est voluptas tenetur iusto nulla tempore consequuntur, natus dicta repellat officiis dolor!</p>
                        </div>
                    </div>
                    <div class="cbox6 bbox">
                        <img src="https://w0.peakpx.com/wallpaper/731/955/HD-wallpaper-winner-sport-badminton-trophy-prize.jpg" alt="">
                    </div>
                    <div class="cbox7 bbox">
                        <div class="boxdetail">
                            <h1>BOLT</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur exercitationem non incidunt similique omnis ad facilis quidem quae! Numquam saepe odio doloribus doloremque quis temporibus debitis.</p>
                        </div>
                    </div>
                    <div class="cbox58 bbox">
                        <img src="https://st2.depositphotos.com/4112313/7229/v/450/depositphotos_72290833-Badminton-sport-invitation-poster-or-flyer-background-with-empty-space-banner-template.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="form" id="form">
                <h1>JOIN OUR COMMUNITY</h1>
                <input type="email" placeholder="Enter your email here">
                <button>JOIN</button>
            </section>
            <section class="strip">
                <h1>SmashWizard</h1>
                <div class="icons">
                </div>
                </div>
            </section>

    </body>

    </html> -->