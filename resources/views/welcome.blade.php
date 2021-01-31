<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header id="navbars">
        <a href="" id="nav-brand">TechStore<span>.</span></a>
        <div class="menuToggle" onclick="toggle()"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <ul id="navigation">
            <li class="nav-menu"><a href="#home">Home</a></li>
            <li class="nav-menu"><a href="#about">About</a></li>
            <li class="nav-menu"><a href="">Our Product</a></li>
            <li class="nav-menu"><a href="">Contributor</a></li>
            <li class="nav-menu"><a href="/login">Login</a></li>
        </ul>
    </header>
    <div id="banner">
        <div id="content">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum provident 
            fuga similique ratione repudiandae animi eius unde cupiditate ad! Optio 
            laborum laboriosam autem doloribus vitae nulla hic aliquam assumenda voluptatem.</p>
            <a href="/login" id="btn-start">Get Started</a>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2><span>A</span>bout<span>U</span>s</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est 
                    doloribus recusandae eveniet odio magnam ipsam ratione facere iusto 
                    tempore cupiditate inventore accusamus mollitia fugiat neque aperiam molestiae, obcaecati aliquam.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta enim perspiciatis voluptatem, neque 
                    repellendus officia nesciunt eveniet reprehenderit nulla maxime, ratione dolore molestias voluptas 
                    ab iusto quos deserunt odio! Officiis. lorem</p>
                </div>
                <div class="col-sm-6">
                    <div class="card shadow" id="card-about">
                        <img src="{{ asset("img/about.jpg") }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="product">
        <div class="container">
            <h2><span>O</span>ur<span>P</span>roduct</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset("img/samsung-galaxy-s21.jpg") }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                          <h5 class="card-title">Samsung Galaxy S21</h5>
                          <p class="card-text">Rp . 12.999.000</p>
                          <a href="#" class="btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset("img/xiaomi-redmi-note-9.jpg") }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                          <h5 class="card-title">Xiaomi Redmi Note 9</h5>
                          <p class="card-text">Rp . 2.150.000</p>
                          <a href="#" class="btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset("img/sharp-32-led.png") }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                          <h5 class="card-title">TV Sharp 32" LED</h5>
                          <p class="card-text">Rp . 1.859.000</p>
                          <a href="#" class="btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="btn-more">More ></a>
        </div>
    </div>
    <div id="contributor">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card shadow" id="card-contributor">
                        <img src="{{ asset("img/me.jpg") }}" class="card-img-top img-thumbnail">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2><span>C</span>ontributor</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est 
                    doloribus recusandae eveniet odio magnam ipsam ratione facere iusto 
                    tempore cupiditate inventore accusamus mollitia fugiat neque aperiam molestiae, obcaecati aliquam.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta enim perspiciatis voluptatem, neque 
                    repellendus officia nesciunt eveniet reprehenderit nulla maxime, ratione dolore molestias voluptas 
                    ab iusto quos deserunt odio! Officiis. lorem</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Social Media</h3>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="https://github.com/renaldy23" class="i-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100054954940233" class="i-link" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/mrenaldyr/" class="i-link" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/mrenaldyr" class="i-link" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-sm-12">
                            <p class="text-muted mt-2">&copy; Muhammad Renaldy Ramadhan - 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                let top = $(window).scrollTop();
                let header = $("#navbars");
                if(top>0){
                    header.addClass("sticky")
                }
                else{
                    header.removeClass("sticky");
                }
            })
        })

        function toggle(){
            const menuToggle = document.querySelector(".menuToggle");
            const navigation = document.querySelector("#navigation")
            const navbars = document.querySelector("#navbars")
            navigation.classList.toggle('active')
            menuToggle.classList.toggle('active')
            navbars.classList.toggle('active');
        }
    </script>
</body>
</html>