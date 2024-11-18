<!doctype html>
<html>
    <head>
        <title>Men's Top</title>
        <link rel="stylesheet" href="Mtop.css">
    </head>
    <body>
        <header>
            <nav>
                <div  class="container">
                    <p>Menu</p>
                </div>
                <div>
                    <p id="p-1">MEMASHOP</p>
                </div>
                <div class="container">
                    <p><img id="img-1" src="user.png"></p>
                    <p>&nbsp;</p>
                    <p><img id="img-1" src="trolley.png"></p>
                </div>
            </nav>
        </header>
        
        <br><br>

        <form action="buynow.php" method="post">
        <h1>MEN'S TOP</h1>

        <div class="products">
            <div class="box">
                <p id="img"><img src="pic1.png"><p>
                <p class="caption" name="p1">Icon Relaxed Fit Graphic T-Shirt<br>
                    <b>699.00</b>
                </p>
                <p class="caption">Sizes:
                    <Select name="size">
                        <option value=""></option>
                        <option value="Large"> Large </option>
                        <option value="Medium"> Medium </option>
                        <option value="Small"> Small </option>
                    </Select>&nbsp;&nbsp;
                    Quantity:&nbsp;<input id="input-1" type="number" name="quantity" value=0>
                </p>
                <div class="container">
                    <input id="p-b1" type="submit" value="Add to Cart">
                    <input id="p-b2" type="submit" value="Buy Now">
                </div>
            </div>

            <div class="box">
                <p id="img"><img src="pic2.png"><p>
                <p class="caption">Regular Fit T-Shirt with All Over Print<br>
                    <b>499.00</b>
                </p>
            </div>

            <div class="box">
                <p id="img"><img src="pic3.png"><p>
                <p class="caption">Dress Code Relaxed Fit Cardigan<br>
                    <b>1,599.00</b>
                </p>
            </div>

            <div class="box">
                <p id="img"><img src="pic4.png"><p>
                <p class="caption">Universal Rebellion Regular Fit Graphic T-Shirt<br>
                    <b>349.00</b>
                </p>
            </div>

            <div class="box">
                <p id="img"><img src="pic5.png"><p>
                <p class="caption">The Crew Chillin' Relaxed Fit Pullover Sweater<br>
                    <b>899.00</b>
                </p>
            </div>

            <div class="box">
                <p id="img"><img src="pic6.png"><p>
                <p class="caption">Relaxed Fit Pullover Hoodie<br>
                    <b>1,099.00</b>
                </p>
            </div>
        </div>
        </form>
    </body>
</html>