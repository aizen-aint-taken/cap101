<?php 
    include('includes/header.php'); 
    include('includes/sidebar.php');
    // include('includes/authentication.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/admin-lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>FRONT VIEW</title>
    <style>
        
     
.content-wrapper {
   background-image: linear-gradient(to left, skyblue, #ffff00);
     /* background-image: url(lyr.png); 
    background-repeat: no-repeat; */
    background-size: cover;
    background-position: center center;
    margin: auto;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 30px; /* Add padding for smaller screens */
}

/* Content box styling */
.small-box {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    position: relative;
    margin-bottom: 20px; /* Add spacing between boxes */
}

.small-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


.inner1 {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    font-size: 48px;
    transition: color 0.3s ease;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

.small-box:hover .inner1 {
    color: #ffeb3b;
}

/* Footer link styling */
.small-box-footer {
    color: white;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    background: rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 1;
    text-transform: uppercase;
    transition: background 0.3s ease, padding 0.3s ease;
}

.small-box-footer:hover {
    background: rgba(0, 0, 0, 0.4);
    padding: 12px;
}

/* Icon styling inside the box */
.icon i {
    font-size: 60px;
    transition: transform 0.3s ease;
    color: rgba(255, 255, 255, 0.8);
    position: absolute;
    right: 10px;
    bottom: 10px;
}

.small-box:hover .icon i {
    transform: scale(1.1);
    color: #ffeb3b;
}


/* Responsive adjustments */
@media (max-width: 768px) {
    .inner1 {
        font-size: 36px;
    }

    .small-box-footer {
        padding: 8px;
        font-size: 14px;
    }

    .icon i {
        font-size: 48px;
    }
}

@media (max-width: 576px) {
    .inner1 {
        font-size: 28px;
        height: 80px;
    }

    .icon i {
        font-size: 40px;
    }
}

    </style>
</head>
<body>
    
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                 
                </div>
            </div>
        </div>
    </div>
 
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Appliances -->
            <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner1">
                            <i class="fa-solid fa-blender-phone"></i> <!-- Appliance Icon -->
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="categories/appliances.php" class="small-box-footer">Appliances <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Electronics -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner1">
                        <i class="fa-duotone fa-solid fa-laptop"></i> <!-- Furniture Icon -->
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Electronics <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                    <!--Furniture  -->
                <div  class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner1">
                            <i class="fa-solid fa-couch"></i> 
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Furnitures <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- MotorCycles -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner1">
                            <i class="fa-solid fa-motorcycle"></i>
                       
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">MotorCycles <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

               <!-- Sign In -->
                <div  class="sign col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner1">
                            <i class="fa-duotone fa-solid fa-id-card"></i>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="includes/register.php" class="small-box-footer">Sign In <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

 <!-- <script src="/node_modules/admin-lte/plugins/jquery/jquery.min.js"></script> -->
<!-- <script src="/node_modules/admin-lte/dist/js/adminlte.min.js"></script>  -->
<script src="jquery.js"></script>
<script>
    $(document).ready(function(){
        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            let target = $(this.getAttribute('href'));
            consolr.log(event);
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });

        $('.small-box').on('click', function() {
            alert('You Clicked: ' + $(this).find('.small-box-footer').text());
        });

        $('.small-box-footer').on('mouseover', function() {
            $(this).css('color', '#007bff');
        }).on('mouseout', function() {
            $(this).css('color', '');
        });
    });
</script>
</body>
</html>
<?php 
    include('includes/footer.php'); 
?>
