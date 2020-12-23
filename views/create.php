<?php var_dump($_GET) ?>


<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h1 class="my-0 mr-md-auto font-weight-normal">Add Product</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-outline-primary mr-3" href="/">Cancel</a>
            <input type="submit" form="myForm" value="Save">
            <a class="btn btn-outline-danger" href="#">Save</a>
        </nav>
    </div>
</header>
<main>
    <form action="" method="get" id="myForm" class="col-lg-6 col-md-6">
        <div class="form-group row d-flex justify-content-between">
            <label for="inputPassword" class="col-md-auto col-lg-auto col-form-label">SKU</label>
            <div class="col-md-8 col-lg-8">
                <input type="text" name="name" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <label for="inputPassword" class="col-md-auto col-lg-auto col-form-label">Name</label>
            <div class="col-md-8 col-lg-8">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <label for="inputPassword" class="col-md-auto col-lg-auto col-form-label">Price ($)</label>
            <div class="col-md-8 col-lg-8">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row d-flex justify-content-between">
            <label for="inputPassword" class="col-md-auto col-lg-auto col-form-label">Type switcher</label>
            <div class="col-md-6 col-lg-6">
                <select class="form-control">
                    <option value="">Size</option>
                    <option value="">Weight</option>
                    <option value="">Dimensions</option>
                </select>
            </div>
        </div>


    </form>
</main>