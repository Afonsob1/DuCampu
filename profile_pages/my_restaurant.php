
<?php

function show_restaurants() {

    global $session;

    $id = $session->getUserId();

    $db = getDatabaseConnection();

    if($session->isLogged()) {
        if (!User::isCustomer($db, $session->getUsername())) {
    ?>
    <script type="text/javascript" src="js/priceImageChange.js" defer></script>

    <section id="restaurant_list">

        <?php show_restaurant_list(); ?>
    
    </section>

    <?php
        }
    }
    }

    function show_restaurant_list(){

    global $session;

    $db = getDatabaseConnection();

    $id = $session->getUserId();
    ?>

    <article class="myRestaurants">

    <h2> My restaurants </h2>

       <section class="myRestaurantsList"> 
        <button class="pre-btn3"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn3"><img src="images/arrow.png" alt=""></button>

        <?php $restaurants = Owner::getRestaurants($db, $id);
        foreach($restaurants as $restaurant) {?>

            <div class="restaurant-cont">
                <div class="restaurant_img">
                        <img class="thumb" alt="Imagem do Restaurante" src="<?php echo ($restaurant->getPhoto($db, $id)); ?>">
                        <input type="button" class="card-btn" value="Edit Restaurant" onclick="location.href='restaurant.php?id=<?php echo($restaurant->id); ?>'"/>
                </div>
                    <h3>
                        <?php echo($restaurant->getName()); ?>
                    </h3>
                </div>
            </div> 
        <?php
    }
    ?>
    </section> 
    </article>

    <article class= "addRestaurant">
        <h2> Add restaurants </h2>

    </article>
    <?php
}

?>