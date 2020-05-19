<div id="team-background">

    <div class="container-fluid" >
        <div class="jumbotron my-4" id="container1">
            <h2 align="center" style=" font-family:Castellar; color:white;">MEET HIYA</h2>
        </div>
    </div>

    <div class="container-fluid">
        
        <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/images/logo3.png') ?>" width="1400px" height="480px" alt="image1"  >
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/images/logo3.png') ?>" width="1400px" height="480px" alt="image2" >
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/images/logo3.png') ?>" width="1400px" height="480px" alt="image3" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>
        </div>
    </div>

    <div class="container">
    <h1 align="center" style="color:white;">Meet The Team</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3">
                    <img src="<?= base_url('assets/images/logo3.png') ?>" alt="Jane" style="width:100%">
                        <div class="container" align="center">
                            <h2>Mr.XYZ</h2>
                            <p class="title" >M.D</p><hr>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>example@example.com</p>
                            <p><button class="btn btn-info">Contact</button></p>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3">
                    <img src="<?= base_url('assets/images/logo3.png') ?>" alt="Jane" style="width:100%">
                        <div class="container" align="center">
                            <h2>Dr.XYZ</h2>
                            <p class="title" >Director</p><hr>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>example@example.com</p>
                            <p><button class="btn btn-info">Contact</button></p>
                        </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3">
                    <img src="<?= base_url('assets/images/logo3.png') ?>" alt="Jane" style="width:100%;">
                        <div class="container" align="center">
                            <h2>DR. XYZ</h2>
                            <p class="title">Medicine Head</p><hr>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>example@example.com</p>
                            <p><button class="btn btn-info">Contact</button></p>
                        </div>
                </div>
            </div>
        </div><br><br>

        <div class="row" id="row2">
                <div class="col-md-2">
                    <!-- Empty Space -->
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                    <img src="<?= base_url('assets/images/logo3.png') ?>" alt="Jane" style="width:100%;">
                        <div class="container"align="center">
                            <h2>Mr.XYZ</h2>
                            <p class="title" >Co-Founder</p><hr>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>example@example.com</p>
                            <p><button class="btn btn-info">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3">
                    <img src="<?= base_url('assets/images/logo3.png') ?>" alt="Jane" style="width:100%">
                        <div class="container" align="center">
                            <h2>Mr.ABC</h2>
                            <p class="title">CEO </p><hr>
                            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                            <p>example@example.com</p>
                            <p><button class="btn btn-info">Contact</button></p>
                        </div>
                    </div>
                </div>    

                <div class="col-md-2">
                    <!-- Empty Space -->
                </div>
                
            </div>
    
    </div>
    <hr>

</div>

<?php include_once('footer.php') ?>