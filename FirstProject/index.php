<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/men.css">
    <title>Men</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
 

<?php include "indexlogic.php"; ?>



<body>

    <!-- Reloader -->
     <div class="reloader-container" id="ReloaderContainer">
        <i class="fa-solid fa-store fa-store-Reloader"></i>
     </div>


    <!-- first-heading-title -->

    <div class="first-heading-title">
        <div class="first-heading-title-left col-5 col-lg-3 col-md-12">
            <div class="first-heading-title-left-write-Up">
               <a href="index.php"> <p>Teewon Men's Fashion</p></a>
            </div>
        </div>
        <div class="first-heading-title-right col-7 col-lg-9 col-md-12">
            <div class="first-heading-title-right-write-Up">
                <a href="mens-shoe.html">
                    <li>Shoes</li>
                </a>
                <a href="mens-clothing-store.html">
                    <li>Clothing</li>
                </a>
                <a href="mens-accessories.html">
                    <li>Accessories</li>
                </a>
                <a href="mens-sales.html">
                    <li>Sale</li>
                </a>

            
                <a href="login.php">
                    <button name="LoginBtn">
                    <?php 
                    
                    if(isset($_COOKIE['ID'])){
                        echo $_COOKIE['name'];
                    }else{
                        echo 'SignUp/Login';
                    }
                    
                    ?>    
                    </button>
                </a>
                

               




            </div>

        </div>
    </div>

    <!-- First Men Banner -->

    <div class="men-banner-container">
        <div class="men-banner-container-Img-Div col-12">
            <img class="col-12"
                src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/w_1583,c_limit/3963f256-1904-4218-9917-5f02797a690f/men-s-shoes-clothing-accessories.jpg">
        </div>
    </div>


    <!-- Second Men Banner -->

    <div class="men-banner-contaner2">
        <div class="men-banner-contaner2-Content">
            <p>Nike Pegasus Plus</p>
            <h1>LIGHT UP
                YOUR PACE</h1>

            <p>
                Experience the energy return of responsive ZoomX cushioning—
                designed to ignite your run.</p>

            <button onclick="ChooseShop()"> Shop</button>
        </div>
    </div>



    <!-- Third Men Banner -->
    <div class="men-banner-container3">
        <div class="men-banner-container3-left col-6 col-md-12">
            <div class="men-banner-container3-left-top">
                <div class="men-banner-container3-left-top-content-container">
                    <div class="men-banner-container3-left-top-content-container-write-Up">
                        <p>Classics Kicks</p>
                        <h3>The Vemero 5 & More</h3>
                        <a href="mens-clothing-store.html"> <button>Shop</button></a>
                    </div>
                </div>

            </div>
            <div class="men-banner-container3-left-bottom">
                <div class="men-banner-container3-left-bottom-content-container">
                    <div class="men-banner-container3-left-bottom-content-container-Write-Up">
                        <p>Basketball's Latest </p>
                        <h3>Giannis Freak 6</h3>
                        <a href="mens-shoe.html"><button>Shop</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="men-banner-container3-right col-6 col-md-12">
            <div class="men-banner-container3-right-top">

                <div class="men-banner-container3-right-top-writeUp-container">
                    <p>Back to School</p>
                    <h2>Bigger Goals Mean</h2>
                    <h3>Better Gear</h3>
                    <a href="mens-accessories.html"> <button>Shop</button></a>
                </div>


            </div>
            <div class="men-banner-container3-right-bottom">

                <div class="men-banner-container3-right-bottom-writeUp-container">
                    <p>New in Nike Soccer</p>
                    <h3>Mad Ambition Pack</h3>
                    <a href="mens-sales.html"> <button>Shop</button></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Fourth Men Banner -->

    <div class="men-banner-container4">


    </div>

    <!-- Fifth Men Banner -->
    <div class="men-banner-container5">
        <div class="men-banner-container5-content">
            <p>Air Max Dn</p>
            <h2>A New Level.</h2>
            <h1>A New World.</h1>
            <p>Keon Coleman is making moves in the Air Max Dn. Take note as he levels up.</p>

            <button onclick="ChooseShop()">Shop</button>

        </div>


    </div>


    <div id="ShowShop">
        <!-- <div class="ShowShopCover" onclick="ShowShopCover()">
        </div> -->
        <div class="ShowShop-child col-8 col-lg-12 " id="ShowShopChild">
            <i class="fa-solid fa-xmark" onclick="xmark()"></i>
            <div class="ShowShop-Content col-8">

                <h1 onclick="MoveH1()">Hey Shopper what do you need? </h1>
                <a href="mens-shoe.html"><button>Shoes <i class="fa-solid fa-shoe-prints"></i></button></a>
                <a href="mens-clothing-store.html"><button>Clothing <i class="fa-solid fa-shirt"></i></button></a>
                <a href="mens-accessories.html"> <button>Accessories <i
                            class="fa-solid fa-bag-shopping"></i></button></a>
                <a href="mens-sales.html"> <button>Sales <i class="fa-solid fa-shop"></i></button></a>

            </div>
        </div>

    </div>


    <!-- Sixth Men Banner -->

    <div class="men-banner-container6">
        <div class="men-banner-container6-top">
            <h1>Shop the Essentials</h1>
        </div>
        <div class="men-banner-container6-bottom">
            <div class="men-banner-container6-bottom-left col-4 col-md-12">
                <div class="men-banner-container6-bottom-left-child">
                    <a href="mens-shoe.html"> <img class="col-12"
                            src="https://static.nike.com/a/images/w_1920,c_limit/9b16c49c-c250-4046-a72e-e39d1edd9043/best-trail-running-shoes-by-nike.jpg">
                    </a>
                </div>
                <div class="men-banner-container6-bottom-left-content">
                    <a href="mens-shoe.html">
                        <p>Shoes</p>
                    </a>
                </div>

            </div>
            <div class="men-banner-container6-bottom-center col-4 col-md-12">
                <div class="men-banner-container6-bottom-center-child">
                    <a href="mens-accessories.html"> <img class="col-12"
                            src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/6fef7756-21cb-4af1-9e79-86b00fc723f2/NIKE+WINDTRACK+24+E+EV24025.png">
                    </a>
                </div>
                <div class="men-banner-container6-bottom-center-content">
                    <a href="mens-accessories.html">
                        <p>Accessories</p>
                    </a>
                </div>
            </div>
            <div class="men-banner-container6-bottom-right col-4 col-md-12">
                <div class="men-banner-container6-bottom-right-child">
                    <a href="mens-clothing-store.html"> <img class="col-12"
                            src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dbef897a-ae9d-49ab-af81-d06bbadb2ca9/M+NSW+SS+MAX90+TEE+FOUNDERS.png">
                    </a>
                </div>
                <div class="men-banner-container6-bottom-right-content">
                    <a href="mens-clothing-store.html">
                        <p>Clothing</p>
                    </a>
                </div>
            </div>
        </div>


    </div>


    <!-- Seventh Men Banner -->

    <!--
    
    -->

    <div class="seventh-men-banner">
        <div class="seventh-men-banner-top">
            <h1>Classics Spotlight</h1>
        </div>
        <div class="seventh-men-banner-bottom">
            <div class="owl-carousel">
                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"> <img id="FirstIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/lkwfba88t6qix4qxaavi/NIKE+ZOOM+VOMERO+5.png"></a>
                    </div>

                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmousemove="ChangeFirstIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/lkwfba88t6qix4qxaavi/NIKE+ZOOM+VOMERO+5.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmousemove="ChangeFirstIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/24d898c4-0400-457e-be38-fd9d9b36e4e2/NIKE+ZOOM+VOMERO+5.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmousemove="ChangeFirstIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/71e79773-61aa-46f2-baec-e78ee8063edb/NIKE+ZOOM+VOMERO+5.png">
                        </div>
                    </div>
                </div>

                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"><img id="SecondIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/87642fa5-5ba3-4719-abc3-bbc2757500da/W+NIKE+ZOOM+VOMERO+5.png"></a>
                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSecondIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f8628962-8b8e-4676-8ff6-0a0c5f9c0930/W+NIKE+ZOOM+VOMERO+5.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSecondIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2b9988ff-ed06-407f-a5f6-c29a74770eb1/W+NIKE+ZOOM+VOMERO+5.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSecondIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/87642fa5-5ba3-4719-abc3-bbc2757500da/W+NIKE+ZOOM+VOMERO+5.png">
                        </div>
                    </div>
                </div>


                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"><img id="ThirdIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0a2a36de-c068-4278-aecb-c3a0ddf48bf4/NIKE+CORTEZ.png"></a>
                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeThirdIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a73adc66-c005-4652-91e2-3e2d2b0eb46a/NIKE+CORTEZ.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeThirdIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9ab8e739-b9e7-4ce9-b071-cb7db0535b99/NIKE+CORTEZ.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeThirdIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0a2a36de-c068-4278-aecb-c3a0ddf48bf4/NIKE+CORTEZ.png">
                        </div>
                    </div>
                </div>


                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"> <img id="FourthIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e06c59cf-a906-4e67-a6bc-b8245da588a9/NIKE+AIR+HUARACHE+RUNNER.png"></a>
                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFourthIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/6fa90dff-89e1-410a-b9bb-8a26565b9e55/NIKE+AIR+HUARACHE+RUNNER.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFourthIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c8f09fff-58b9-4b8c-9d05-90334be9a69d/NIKE+AIR+HUARACHE+RUNNER.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFourthIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e06c59cf-a906-4e67-a6bc-b8245da588a9/NIKE+AIR+HUARACHE+RUNNER.png">
                        </div>
                    </div>
                </div>


                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"> <img id="FifthIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ece5296b-a7d1-494d-89a4-5199cdf1361a/NIKE+DUNK+LOW+RETRO.png"></a>

                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFifthIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ece5296b-a7d1-494d-89a4-5199cdf1361a/NIKE+DUNK+LOW+RETRO.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFifthIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d6242443-257d-40af-8f4f-deba3d496eb5/NIKE+DUNK+LOW+RETRO.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeFifthIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4329d447-d48e-4886-8585-b73355c52cda/NIKE+DUNK+LOW+RETRO.png">
                        </div>
                    </div>
                </div>


                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"><img id="SixthIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/45b70a21-b1c3-4088-b008-acb6cc433b71/GIANNIS+FREAK+6.png"></a>
                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSixthIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/45b70a21-b1c3-4088-b008-acb6cc433b71/GIANNIS+FREAK+6.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSixthIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a6955769-6091-49d0-857e-ecebd21a0850/GIANNIS+FREAK+6NRG.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSixthIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/91cf9c6e-0803-40ea-baa4-558ca4ecc3a2/GIANNIS+FREAK+6.png">
                        </div>
                    </div>
                </div>


                <div class="seventh-men-banner-bottom-DIVS">
                    <div class="seventh-men-banner-bottom-DIVS-Img-top">
                        <a href="mens-shoe.html"><img id="SeventhIMG"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c0e9acf7-e301-4a9f-be2c-b521ca9e9052/JORDAN+TRUE+FLIGHT.png"></a>
                    </div>
                    <div class="seventh-men-banner-bottom-DIVS-Img-bottom">
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSeventhIMGa()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c0e9acf7-e301-4a9f-be2c-b521ca9e9052/JORDAN+TRUE+FLIGHT.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSeventhIMGb()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/86b141f7-a4e9-42c7-ac31-21d83ae8b3c5/JORDAN+TRUE+FLIGHT.png">
                        </div>
                        <div class="seventh-men-banner-bottom-DIVS-Img-bottom-Containers col-4">
                            <img onmouseover="ChangeSeventhIMGc()"
                                src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fd9a72a1-6579-43fd-803e-ee32da567fc5/JORDAN+TRUE+FLIGHT.png">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Men Top Footer Container -->

    <div class="MenFooterContainer">
        <div class="MenFooter-container-boxes col-3 col-md-4">
            <h3>Men's Shoes</h3>
            <p>Running</p>
            <p>Basketball</p>
            <p>Golf</p>
            <p>Tennis Shoes</p>
            <p>Jordan</p>
            <p>Football</p>
            <p>Soccer</p>
            <p>Training</p>
            <p>Nike Sportswear</p>
            <p>Customize with Nike By You</p>
        </div>
        <div class="MenFooter-container-boxes col-3 col-md-4">
            <h3>Men's Shoes</h3>
            <p>Running</p>
            <p>Basketball</p>
            <p>Golf</p>
            <p>Tennis Shoes</p>
            <p>Jordan</p>
            <p>Football</p>
            <p>Soccer</p>
            <p>Training</p>
            <p>Nike Sportswear</p>
            <p>Customize with Nike By You</p>
        </div>
        <div class="MenFooter-container-boxes col-3 col-md-4">
            <h3>Men's Shoes</h3>
            <p>Running</p>
            <p>Basketball</p>
            <p>Golf</p>
            <p>Tennis Shoes</p>
            <p>Jordan</p>
            <p>Football</p>
            <p>Soccer</p>
            <p>Training</p>
            <p>Nike Sportswear</p>
            <p>Customize with Nike By You</p>
        </div>
        <div class="MenFooter-container-boxes  MenFooter-container-boxes-Last  col-3 col-md-12 ">
            <h3>Men's Shoes</h3>
            <p>Running</p>
            <p>Basketball</p>
            <p>Golf</p>
            <p>Tennis Shoes</p>
            <p>Jordan</p>
            <p>Football</p>
            <p>Soccer</p>
            <p>Training</p>
            <p>Nike Sportswear</p>
            <p>Customize with Nike By You</p>
        </div>
    </div>




    <script src="https://kit.fontawesome.com/813b700df1.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="Script/men.js"></script>

</body>


</html>