<form class="row g-3" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Bike Details</h3>
    <div class="col-md-6">
        <label for="brand_id" class="form-label">Brand</label>
        <select class="form-control" id="brand" name="brand_id">
            <option value="">Select Brand</option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="model" class="form-label">Model</label>
        <!-- <input type="text" class="form-control" id="model" name="model" /> -->
        <select class="form-control" id="bikeModel" name="model">
            <option value="">Select model</option>
            <!-- Options will be added dynamically based on the selected brand -->
        </select>
    </div>
    <div class="col-md-6">
        <label for="year" class="form-label">Year</label>
        <select id="year" name="year" class="form-select" aria-label="Default select example">
            @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
            <option value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>{{ $year }}
            </option>
            @endfor
        </select>
    </div>
    <div class="col-md-6">
        <label for="type" class="form-label">Type</label>
        <select id="type" name="type" class="form-select" aria-label="Default select example">
            <option selected>Bike</option>
            <option value="1">Scooter</option>
            <option value="2">Cycle</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="body_type" class="form-label">Body type</label>
        <select id="body_type" name="body_type" class="form-select" aria-label="Default select example">
            <option selected>Type</option>
            <option value="1">Street</option>
            <option value="2">Sport</option>
            <option value="3">Sport Naked</option>
            <option value="3">Sport</option>
            <option value="3">Cross</option>
            <option value="3">Cruiser</option>
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-check-label" for="distance">
            Distance Covered
        </label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="distance" name="distance" min="0" />
            <span class="input-group-text">km</span>

        </div>
    </div>

    <div class="col-md-6">
        <label for="condition" class="form-label">Condition</label>
        <select id="condition" name="condition" class="form-select" aria-label="Default select example">
            <option selected>Excellent</option>
            <option value="1">Good</option>
            <option value="2">Fair</option>
            <option value="3">Bad</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="owner" class="form-label">Owner</label>
        <div class="d-flex">
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="owner" id="owner1" value="first" checked />
                <label class="form-check-label pl-4" for="owner1">
                    First
                </label>
            </div>
            <div class="form-check mx-3 ">
                <input class="form-check-input" type="radio" name="owner" id="owner2" value="second" />
                <label class="form-check-label pl-4" for="owner2">
                    Second
                </label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="owner" id="owner3" value="third" />
                <label class="form-check-label pl-4" for="owner3">
                    Third
                </label>
            </div>
        </div>
    </div>
    <h3>Additional Feature</h3>
    <div class="col-md-6">
        <label for="break" class="form-label">Engine</label>
        <input type="text" class="form-control" id="engine" name="engine" />
    </div>

    <div class="col-md-6">
        <label for="text" class="form-label">Battery Capacity</label>
        <input type="text" class="form-control" id="battery" name="battery" />
    </div>
    <div class="col-md-6">
        <label for="text" class="form-label">Fuel Capacity</label>
        <input type="text" class="form-control" id="fuel_capacity" name="fuel_capacity" />
    </div>
    <div class="col-md-6">
        <label for="text" class="form-label">Mileage</label>
        <input type="text" class="form-control" id="mileage" name="mileage" />
    </div>
    <div class="col-md-6">
        <label for="gear" class="form-label">Gear</label>
        <select id="gear" name="gear" class="form-select" aria-label="Default select example">
            <option selected>Five</option>
            <option value="1">Six</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="break" class="form-label">Top Speed</label>
        <input type="text" class="form-control" id="top_speed" name="top_speed" />
    </div>
    <div class="col-md-6">
        <label for="break" class="form-label">Breaks</label>
        <input type="text" class="form-control" id="break" name="break" />
    </div>
    <div class="col-md-6">
        <label for="suspension" class="form-label">Suspension Type</label>
        <input type="text" class="form-control" id="suspension" name="suspension" />
    </div>
    <div class="col-md-6">
        <label for="colour" class="form-label">Colour</label>
        <input type="text" class="form-control" id="colour" name="colour" />
    </div>

    <h3>Price</h3>
    <div class="col-md-6">
        <label class="form-check-label" for="flexRadioDefault2">
            Asking Price
        </label>
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="price" name="price" min="0" />
        </div>
    </div>
    <div class="col-md-6">
        <label for="negotiable" class="form-label">Negotiable?</label>
        <div class="d-flex">
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableYes" value="yes" checked />
                <label class="form-check-label" for="negotiableYes">Yes</label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableNo" value="no" />
                <label class="form-check-label" for="negotiableNo">No</label>
            </div>
        </div>
    </div>
    <h3>Other info</h3>
    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" />
    </div>

    <div class="col-md-6">
        <label for="deliveryOption" class="form-label">Delivery Option</label>
        <select id="deliveryOption" name="deliveryOption" class="form-select" aria-label="Default select example">
            <option value="home" selected>Home Delivery</option>
            <option value="pickup">Pick Up</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="banner_img" class="form-label">Banner Image</label>
        <!-- <input class="form-control" type="file" id="formFile" name="banner_img" />                                        <input type="file" class="dropify" data-default-file="" name="image"> -->
        <input type="file" class="dropify" data-default-file="" name="banner_img" id="formFile">


    </div>
    <!-- <div class="col-md-6">
        <label for="other_img" class="form-label">Other Images</label>
        <input class="form-control" type="file" id="formFile" name="other_img" multiple />
        <input type="file" class="dropify" data-default-file="" name="other_img" id="formFile" multiple>
    </div> -->
    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>

<script>
    document.getElementById('brand').addEventListener('change', function() {
        var brandId = this.value;
        var modelSelect = document.getElementById('bikeModel');
        modelSelect.innerHTML = '<option value="">Select Model</option>'; // Reset on change

        if (brandId) {
            fetch(`/get-bike-models/${brandId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(function(model) {
                        var option = new Option(model.name, model.id);
                        modelSelect.add(option);
                    });
                })
                .catch(error => console.error('Error loading the bike models:', error));
        }
    });
</script>