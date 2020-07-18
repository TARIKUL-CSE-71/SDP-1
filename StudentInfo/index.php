<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/barcode.css" />

    <title>Home</title>
  </head>
  <body>

    <?php include 'includes/navbar.php'; ?>

    <section class="mb-2">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="Images/Pic01.jfif"
                class="d-block w-100"
                height="300px"
                alt="Image"
              />
            </div>
            
            <div class="carousel-item">
              <img
                src="Images/Pic04.jfif"
                class="d-block w-100"
                height="300px"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="Images/Pic05.jfif"
                class="d-block w-100"
                height="300px"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="Images/Pic06.jfif"
                class="d-block w-100"
                height="300px"
                alt="..."
              />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#myCarousel"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#myCarousel"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <section id="marquee">
      <div class="container">
        <div class="marquee pt-3 pb-3 text-white">
          <marquee scrolldelay="150"
            ><b></b>Note : Barcode Cafe Is Open Time 11:00:00 AM To 12:00:00 AM
            / Burgwich Fusion Town Cafe Is Open Time 11:00:00 AM To 11:00:00 PM
            / Barcode Cafe GEC Is Open Time 12:00:00 PM To 12:00:00 AM / Barcode
            On Fire Modern Japanese Is Open Time 11:00:00 AM To 11:00:00
            PM</marquee
          >
        </div>
      </div>
    </section>
    
   

    <section id="lastHover">
      <div class="container mt-40">
        <div class="row mt-30">
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic02.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Grilled Lobster</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic03.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Grilled Lobster</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic07.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Grilled Lobster</h3>
                </div>
            </div>
          </div>
        </div>
        <div class="row mt-30">
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic08.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Mint Lemon,Mint Lassi,Mint Shake</h3>
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic01.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Mint Lemon,Mint Lassi,Mint Shake</h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="box4">
              <img src="Images/Pic05.jfif" alt="Image" />
              <div class="box-content">
                <h3 class="title">Mint Lemon,Mint Lassi,Mint Shake</h3>
                </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script src="JS/bootstrap.min.js"></script>
    <script>
      $(".carousel").carousel({
        interval: 2000,
      });
    </script>
  </body>
</html>
