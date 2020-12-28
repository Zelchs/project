<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h1 class="my-0 mr-md-auto font-weight-normal">Product List</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-outline-primary mr-3" href="/create">Add</a>
            <input type="submit" form="deleteForm" class="btn btn-outline-danger" value="Mass Delete">
        </nav>
    </div>
</header>

<main>
    <form action="/delete" id="deleteForm" method="POST">
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>

                <div class="col-md-4 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <input type="checkbox" name="checked[]" id="" value="<?php echo $product["id"] ?>">
                            <ul class="list-unstyled mt-3 mb-4  text-center">
                                <li><?php echo $product["sku"] ?></li>
                                <li><?php echo $product["name"]  ?></li>
                                <li><?php echo $product["price"] ?> $</li>
                                <?php echo $product["size"] ? "<li>Size: {$product['size']} MB</li>" : null ?>
                                <?php echo $product["weight"] ? "<li>Weight: {$product['weight']}KG</li>" : null ?>
                                <?php echo $product["dimensions"] ? "<li>Dimensions: {$product['dimensions']}</li>" : null ?>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </form>
</main>