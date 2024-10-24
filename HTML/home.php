<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizag Steel Plant Products</title>
    <link rel="stylesheet" href="/RINL/CSS/styles.css">
</head>
<body>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] == 1) {
        echo '<a href="/RINL/HTML/logout.php">';
        echo '<button> Profile </button>';
        echo '</a>';
     
    } else {
        echo '<a  href="/RINL/HTML/login.php">';
        echo '<button class="login">Login</button>';
        echo '</a>';
     
    }
    ?>
   
    <header>
        
        <img class="logo" src ="/RINL/Images/logo.jpg"> 
        <h1>RASHTRIYA ISPAT NIGAM LIMITED</h1>
        <h1> Welcome to Vizag Steel Plant </h1>
    </header>
    <main>
        <section class="theory">
            <br>
            <p>
                
		      Rashtriya Ispat Nigam Limited (RINL), the corporate entity of Visakhapatnam Steel Plant is a Navaratna PSE under the Ministry of Steel. Visakhapatnam Steel Plant fondly called Vizag Steel. It is the first shore based Integrated Steel Plant in the country and is known for its quality products delighting the customers. It is a market leader in long products and it caters to the needs of diverse Industrial sectors. It is the first Steel plant to be certified ISO 9001:2008 (presently 2015), ISO 14001:2004 (presently 2015), OHSAS 18001:2007 and ISO/IEC 27001:2013 Standards. It is also the first PSE to be certified ISO 50001:2011 - Energy Management Systems and has acquired CMMI Level 3 Certification for s/w development. Any kind of Construction Steel, Fabrication Steel and Special Steel is produced from RINL. 

            </p>
        </section>  
        <br> 
        <section class="points">
            <p>Rashtriya Ispat Nigam Limited</p>
            <p>CIN : U27109AP1982GOI003404</p>
            <p>GST Reg.No : 37AABCR0435L1ZD</p>
            <p>Administrative Building,</p>
            <p>Visakhapatnam Steel Plant,</p>
            <p>Visakhapatnam-530026</p>
            <p>Toll free number-1800 425 8878</p>

        </section>
        <div class="image-container">
            <img src="/RINL/Images/Quality.png" alt="Image 1">
            <p>Get Quality Certificate</p>
        </div>
    
        <div class="image-container">
            <img src="/RINL/Images/Exchange.png" alt="Image 2">
            <p>Exchange policy </p>
        </div>

        <div class="image-container">
            <img src="/RINL/Images/govt.jpg" alt="Image 3">
            <p>Government Authorized</p>
        </div>

        <div class="image-container">
            <img src="/RINL/Images/turnover.jpg" alt="Image 4">
            <p>Million turnover</p>
        </div>

        <div class="image-container">
            <img src="/RINL/Images/order.png" alt="Image 5">
            <p>Million tonnes of orders processed </p>
        </div>

    </main>
        <h2> OUR PRODUCTS </h2>
        <div class="image-gallery">
            <div class="gallery-row">
                <div class="gallery-item">
                    <img src="/RINL/Images/Angles.jpg" alt="Image 1">
                    <p>Angles</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/Billets.jpg" alt="Image 2">
                    <p>Billets</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/Channels.jpg" alt="Image 3">
                    <p>Channels</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/rebars.jpg" alt="Image 4">
                    <p>Rebars</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/products.jpg" alt="Image 5">
                    <p>Rounds</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/Wirerods.jpg" alt="Image 6">
                    <p>Wirerods</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/TMT-Rebars.jpg" alt="Image 7">
                    <p>TMT-Rebars</p>
                </div>
                <div class="gallery-item">
                    <img src="/RINL/Images/flats.jpg" alt="Image 8">
                    <p>Flats</p>
                </div>
                

            </div>
        </div>
        <h2> Why RINL? </h2>
        <div class="flip-card-container">
            <div class="flip-card" id="myFlipCard">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Quality Reassurance</h3>
                    </div>
                    <div class="flip-card-back">
                    <p>RINL is a public sector steel producer in India and is known for maintaining high-quality standards in its steel production. They often adhere to various national and international quality certifications, ensuring that their products meet industry standards.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" id="myFlipCard">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Diverse Product Range</h3>
                    </div>
                    <div class="flip-card-back">
                    <p>RINL offers a wide range of steel products, including structural steel, flat steel, and long steel products, catering to various industrial and construction needs. Their product portfolio includes products like TMT bars, structural steel, wire rods, and more.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" id="myFlipCard">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Customization</h3>
                    </div>
                    <div class="flip-card-back">
                    <p>Depending on your specific requirements, RINL can often provide customized steel products, sizes, and grades to meet your project's needs. This level of customization can be valuable for certain applications.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" id="myFlipCard">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Government projects</h3>
                    </div>
                    <div class="flip-card-back">   
                    <p>RINL is often involved in supplying steel for government infrastructure projects, which can indicate a level of trust and credibility in their products.</p>  
                    </div>
                </div>
            </div>  
            <div class="flip-card" id="myFlipCard">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h3>Reliable Supply</h3>
                    </div>
                    <div class="flip-card-back">
                        <p>As a government-owned company, RINL typically aims for consistent and reliable steel production and supply, which can be important for businesses that rely on a steady supply of steel materials.</p>
                    </div>
                </div>
            </div> 
        </div>
        <h2>     </h2>
        <div class="container" id = "first">
            <h4> PHONE</h4>
            <a href="tel:0891-2518301">0891-2518301</a>
            <h4>EMAIL</h4>
            <a href="#">rinl.roeast@gmail.com</a>
            <h4>CIN NUMBER</h4>
            <a href="#">U27109AP1982GOI003404</a>
        </div>    
        <div class="container" id = "second">
            <h4> CATEGORIES </h4>
            <p>Construction Steel</p>
            <br>
            <p>Fabrication Steel</p>
            <br>
            <p>Special Steel</p>
            <br>
            <p>Customized Steel</p>
            <br>
            <p>Product mix</p>
            <br>
        </div>  
        <div class="container" id = "third"> 
            <h4> CONTACT US ON </h4>
            <p><a href="https://x.com/RINL_VSP?s=20 ">Twitter-RINL</a> </p>
            <br>
            <p><a href="https://instagram.com/r.i.n.l?igshid=MzRlODBiNWFlZA==">Instagram</a></p>
            <br>
            <p><a href="https://www.linkedin.com/company/rashtriya-ispat-nigam-limited-rinl-/">LinkedIn</a></p>
            <br>
            <p><a href="https://www.facebook.com/RINLltd/"> Facebook</a></p>
            <br>
            <p><a href="https://www.vizagsteel.com/index.asp"> Reference - Google </a></p>
            <br>
        </div>  
        <h2> COPYRIGHT @ RINL  All Rights are Reserved </h2>
        <script src="/script.js"></script>
    
    </body>
</html>
