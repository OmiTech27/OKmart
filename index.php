<?php require_once "dbconfig.php"; ?>
<?php include 'header.php'; ?>
<?php include 'header-main.php'; ?>

<section class="section-intro padding-y-sm">
    <div class="container">

        <div class="intro-banner-wrap">
            <img src="images/banners/OKmart.png" class="img-fluid rounded">
        </div>

    </div> 
</section>



<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="store.php" class="btn btn-outline-primary float-right">See all</a>
            <h3 class="section-title">Popular products</h3>
        </header>
        <div class="row">
            <?php
			$product_query = "SELECT * FROM `products` ";
			$product_result = mysqli_query($cid, $product_query) or die("Product Query Failed.");

			if (mysqli_num_rows($product_result) > 0) {
				while ($row = mysqli_fetch_assoc($product_result)) {
			?>
            <div class="col-md-3">
                <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="POST">
                    <div class="card card-product-grid">
                        <a href="product-detail.php?id=<?php echo $row['id']; ?>" class="img-wrap"> <img
                                src="images/items/<?php echo $row['img'];?>"> </a>
                        <figcaption class="info-wrap">
                            <a href="product-detail.php?id=<?php echo $row['id']; ?>"
                                class="title"><?php echo $row['product_name']; ?></a>
                            <div class="price mt-1">₹<?php echo $row['price']; ?></div> 
                            <div class="col">
                                        <p class="card-text">Quantity:
                                            <input type="number" min="1" max="25" name="quantity" class="form-control"
                                                value="1" style="width: 60px;">
                                        </p>
                                    </div> 
                                    <br>
                                    <input type="hidden" name="hidden_product_name"
                                        value="<?php echo $row["product_name"]; ?>">
                                    <input type="hidden" name="hidden_img" value="<?php echo $row["img"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <input type="hidden" name="hidden_category_slug"
                                        value="<?php echo $row["category_slug"]; ?>">
                                    <input type="submit" name="add" class="btn btn-block btn-success"
                                        value="Added to cart">
                        </figcaption>
                    </div>
                </form>
            </div> 
            <?php  }
			} ?>

        </div>
</section>

<footer class="section-footer border-top">
    <div class="container">
        <section class="footer-bottom border-top row">
            <div class="col-md-2">
                <p class="text-muted"> &copy 2022 <a href="index.php">OKmart</a> </p>
            </div>
            <div class="col-md-8 text-md-center">
                <span class="px-2">info@okmart.com</span>
                <span class="px-2">+910-000-0000</span>
                <span class="px-2">Mahim East, Mumbai 400017</span>
            </div>
            <div class="col-md-2 text-md-right text-muted">
                <i class="fab fa-lg fa-cc-visa"></i>
                <i class="fab fa-lg fa-cc-paypal"></i>
                <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
        </section>
    </div>
</footer>

</body>
</html>