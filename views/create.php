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
    <form action="/create" method="POST" id="createForm" class="col-lg-6 col-md-6">
        <div class="form-group row justify-content-between">
            <label for="sku" class="col-form-label">SKU</label>
            <div class="col-md-8 col-lg-8">
                <input type="text" name="sku" id="sku" class="form-control" required>
            </div>
        </div>
        <div class="form-group row justify-content-between">
            <label for="name" class="col-form-label">Name</label>
            <div class="col-md-8 col-lg-8">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

        </div>
        <div class="form-group row justify-content-between">
            <label for="price" class="col-form-label">Price ($)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
        </div>
        <div class="form-group row justify-content-between">
            <label for="typeSelector" class="col-form-label">Type switcher</label>
            <div class="col-md-6 col-lg-6">
                <select class="form-control" name="typeSwitch" id="typeSelector" required>
                    <option value="" selected disabled> Please select product type</option>
                    <option value="DVD">DVD</option>
                    <option value="BK">Book</option>
                    <option value="FUR">Furniture</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-between hidden" id="DVD">
            <label for="sizeInput" class="col-form-label">Size (MB)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" name="size" class="form-control" id="sizeInput" required>
            </div>
            <small class="form-text text-muted">
                Please provide size in MB's
            </small>

        </div>
        <div id="FUR" class="hidden">
            <div class="form-group row justify-content-between">
                <label for="height" class="col-form-label">Height (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="height" id="height" required>
                </div>
            </div>
            <div class="form-group row justify-content-between">
                <label for="width" class="col-form-label">Width (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="width" id="width" required>
                </div>
            </div>
            <div class="form-group row justify-content-between">
                <label for="length" class="col-form-label">Length (CM)</label>
                <div class="col-md-8 col-lg-8">
                    <input type="number" class="form-control" name="length" id="length" required>
                </div>
                <small class="form-text text-muted">
                    Please provide dimensions in HxWxL format
                </small>
            </div>
        </div>
        <div class="form-group row justify-content-between hidden" id="BK">
            <label for="weight" class="col-form-label">Weight (KG)</label>
            <div class="col-md-8 col-lg-8">
                <input type="number" class="form-control" name="weight" id="weight" required>
            </div>
            <small class="form-text text-muted">
                Please provide weight in KG's
            </small>
        </div>
    </form>
</main>