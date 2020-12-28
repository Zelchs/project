<?php var_dump($_GET) ?>


<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h1 class="my-0 mr-md-auto font-weight-normal">Add Product</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-outline-primary mr-3" href="/">Cancel</a>
            <input type="submit" form="createForm" class="btn btn-outline-danger" value="Save">
        </nav>
    </div>
</header>
<main>
    <form action="" method="get" id="createForm" class="col-lg-6 col-md-6">
        <div class="form-group row justify-content-between">
            <label for="sku" class="col-form-label">SKU</label>
            <div class="col-md-8 col-lg-8">
                <input type="text" name="sku" id="sku" class="form-control">
            </div>
        </div>
        <div class="form-group row justify-content-between">
            <label for="name" class="col-form-label">Name</label>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row justify-content-between">
            <label for="price" class="col-form-label">Price ($)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="form-group row justify-content-between">
            <label for="typeSwitch" class="col-form-label">Type switcher</label>
            <div class="col-md-6 col-lg-6">
                <select class="form-control" name="typeSwitch" id="typeSwitch">
                    <option value="dvd">DVD</option>
                    <option value="book">Book</option>
                    <option value="furniture">Furniture</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-between hidden">
            <label for="sizeInput" class="col-form-label">Size (MB)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" class="form-control" id="sizeInput">
            </div>

            <small class="form-text text-muted">
                Please provide size in MB's
            </small>


        </div>
        <div class="hidden">
            <div class="form-group row justify-content-between">
                <label for="height" class="col-form-label">Height (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="height" id="height">
                </div>
            </div>
            <div class="form-group row justify-content-between">
                <label for="width" class="col-form-label">Width (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="width" id="width">
                </div>
            </div>
            <div class="form-group row justify-content-between">
                <label for="length" class="col-form-label">Length (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="length" id="length">
                </div>
                <small class="form-text text-muted">
                    Please provide dimensions in HxWxL format
                </small>
            </div>
        </div>
        <div class="form-group row justify-content-between hidden">
            <label for="weight" class="col-form-label">Weight (KG)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" class="form-control" name="weight" id="weight">
            </div>
            <small class="form-text text-muted">
                Please provide weight in KG's
            </small>
        </div>
    </form>
</main>