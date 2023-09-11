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
            border-radius: 0.375rem;
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
                        <?php echo form_open('Auth/updateName'); ?>
                        <h2>Change Name</h2>
                        <input type="text" name="name" id="name" placeholder="Enter new Name" />
                        <input type="email" name="email" id="email" placeholder="<?php echo $this->session->userdata('email'); ?>" readonly />
                        <button type="submit" name="" class="my-button">Update Name </button><br>
                        
                        <?php echo anchor('Auth/profile', 'Back', 'class="my-button"');
                        ?>
                        <?php if (isset($success_message)) : ?>
                            <br>
                            <?php echo $success_message; ?>
                        <?php endif; ?>
                        <?php echo form_close(); ?>
                        
                    </div>

                </div>
            </div>
        </section>
    </body>

</html>