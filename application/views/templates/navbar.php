<nav id="nav_bar" class="navbar navbar-inverse topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="overflow:hidden; color:white;" class="navbar-brand scrollTo" href="#about">Harsimran Singh<br/><p style="font-size:9px; text-align:right;">Computer Scientist (B.tech)</p></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="<?php echo base_url("#about"); ?>">Home</a>
                    </li> 
                    <li>
                        <a id="about" href="<?php echo base_url("about"); ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("#gallery"); ?>">Potfolio</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("#services"); ?>">Services</a>
                    </li>
                    <li>
                        <a id="contact"  href="<?php echo base_url("contact"); ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        <?php $this->load->view('templates/progressbar'); ?>
    </nav>