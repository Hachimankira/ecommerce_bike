<form class="row g-3" action="{{ url('product/'. $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h3>Bike Details</h3>
    <div class="col-md-6">
        <label for="brand" class="form-label">Brand</label>
        <select class="form-control" id="brand" name="brand">
            <option value="">Select brand</option>
            @php
            $brands = ['yatri', 'yamaha', 'hero', 'bajaj', 'honda', 'tvs']; // Consider pulling these from the database
            @endphp
            @foreach($brands as $brand)
            <option value="{{ $brand }}" {{ $product->brand == $brand ? 'selected' : '' }}>{{ ucfirst($brand) }}</option>
            @endforeach

            <!-- <option value="">BMW</option>
            <option value="">Benelli</option>
            <option value="">CF MOTO</option>
            <option value="">Ducati</option>
            <option value="">Harley Davidson</option>
            <option value="">Jawa</option>
            <option value="">Toyal Enfield</option>
            <option value="">KTM</option>
            <option value="">Suzuki</option>
            <option value="">Kawasaki</option>
            <option value="">Italjet</option>
            <option value="">Husqvarne</option>
            <option value="">Hartford</option>
            <option value="">Cross X Bike</option>
            <option value="">Crossfire</option>
            <option value="">Mahindra</option> -->
        </select>
    </div>
    <div class="col-md-6">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" />
    </div>
    <div class="col-md-6">
        <label for="year" class="form-label">Year</label>
        <select id="year" name="year" class="form-select">
            @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
            <option value="{{ $year }}" {{ $product->year == $year ? 'selected' : '' }}>{{ $year }}</option>
            @endfor
        </select>
    </div>
    <div class="col-md-6">
        <label for="type" class="form-label">Type</label>
        <select id="type" name="type" class="form-select">
            <option value="bike" {{ $product->type == 'bike' ? 'selected' : '' }}>Bike</option>
            <option value="scooter" {{ $product->type == 'scooter' ? 'selected' : '' }}>Scooter</option>
            <option value="cycle" {{ $product->type == 'cycle' ? 'selected' : '' }}>Cycle</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="body_type" class="form-label">Body type</label>
        <select id="body_type" name="body_type" class="form-select" aria-label="Default select example">
            <option value="">Select Type</option>
            <option value="street" {{ (isset($product->body_type) && $product->body_type == 'street') ? 'selected' : '' }}>Street</option>
            <option value="sport" {{ (isset($product->body_type) && $product->body_type == 'sport') ? 'selected' : '' }}>Sport</option>
            <option value="sport_naked" {{ (isset($product->body_type) && $product->body_type == 'sport_naked') ? 'selected' : '' }}>Sport Naked</option>
            <option value="cross" {{ (isset($product->body_type) && $product->body_type == 'cross') ? 'selected' : '' }}>Cross</option>
            <option value="cruiser" {{ (isset($product->body_type) && $product->body_type == 'cruiser') ? 'selected' : '' }}>Cruiser</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-check-label" for="distance">
            Distance Covered
        </label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" aria-label="Amount (to the nearest kilometer)" id="distance" name="distance" value="{{ $product->distance ?? '' }}" />
            <span class="input-group-text">km</span>
        </div>
    </div>

    <div class="col-md-6">
        <label for="condition" class="form-label">Condition</label>
        <select id="condition" name="condition" class="form-select" aria-label="Default select example">
            <option value="excellent" {{ $product->condition == 'excellent' ? 'selected' : '' }}>Excellent</option>
            <option value="good" {{ $product->condition == 'good' ? 'selected' : '' }}>Good</option>
            <option value="fair" {{ $product->condition == 'fair' ? 'selected' : '' }}>Fair</option>
            <option value="bad" {{ $product->condition == 'bad' ? 'selected' : '' }}>Bad</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="owner" class="form-label">Owner</label>
        <div class="d-flex">
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="owner" id="owner1" value="first" {{ (isset($product->owner) && $product->owner === 'first') ? 'checked' : '' }} />
                <label class="form-check-label pl-4" for="owner1">
                    First
                </label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="owner" id="owner2" value="second" {{ (isset($product->owner) && $product->owner === 'second') ? 'checked' : '' }} />
                <label class="form-check-label pl-4" for="owner2">
                    Second
                </label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="owner" id="owner3" value="third" {{ (isset($product->owner) && $product->owner === 'third') ? 'checked' : '' }} />
                <label class="form-check-label pl-4" for="owner3">
                    Third
                </label>
            </div>
        </div>
    </div>

    <h3>Additional Feature</h3>
    <div class="col-md-6">
        <label for="engine" class="form-label">Engine</label>
        <input type="text" class="form-control" id="engine" name="engine" value="{{ $product->engine ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="battery" class="form-label">Battery Capacity</label>
        <input type="text" class="form-control" id="battery" name="battery" value="{{ $product->battery_capacity ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
        <input type="text" class="form-control" id="fuel_capacity" name="fuel_capacity" value="{{ $product->fuel_capacity ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="mileage" class="form-label">Mileage</label>
        <input type="text" class="form-control" id="mileage" name="mileage" value="{{ $product->mileage ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="gear" class="form-label">Gear</label>
        <select id="gear" name="gear" class="form-select" aria-label="Default select example">
            <option value="five" {{ $product->gear == 'five' ? 'selected' : '' }}>Five</option>
            <option value="six" {{ $product->gear == 'six' ? 'selected' : '' }}>Six</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="top_speed" class="form-label">Top Speed</label>
        <input type="text" class="form-control" id="top_speed" name="top_speed" value="{{ $product->top_speed ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="break" class="form-label">Brakes</label>
        <input type="text" class="form-control" id="break" name="break" value="{{ $product->break ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="suspension" class="form-label">Suspension Type</label>
        <input type="text" class="form-control" id="suspension" name="suspension" value="{{ $product->suspension ?? '' }}" />
    </div>

    <div class="col-md-6">
        <label for="colour" class="form-label">Colour</label>
        <input type="text" class="form-control" id="colour" name="colour" value="{{ $product->colour ?? '' }}" />
    </div>

    <h3>Price</h3>
    <div class="col-md-6">
        <label class="form-check-label" for="price">
            Asking Price
        </label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rs.</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="price" name="price" value="{{ $product->price ?? '' }}" />
        </div>
    </div>
    <div class="col-md-6">
        <label for="negotiable" class="form-label">Negotiable?</label>
        <div class="d-flex">
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableYes" value="yes" {{ $product->negotiable == 'yes' ? 'checked' : '' }}>
                <label class="form-check-label" for="negotiableYes">Yes</label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableNo" value="no" {{ $product->negotiable == 'no' ? 'checked' : '' }}>
                <label class="form-check-label" for="negotiableNo">No</label>
            </div>
        </div>
    </div>

    <h3>Other info</h3>
    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $product->address ?? '' }}" />
    </div>
    <div class="col-md-6">
        <label for="deliveryOption" class="form-label">Delivery Option</label>
        <select id="deliveryOption" name="deliveryOption" class="form-select" aria-label="Default select example">
            <option value="home" {{ $product->deliveryOption == 'home' ? 'selected' : '' }}>Home Delivery</option>
            <option value="pickup" {{ $product->deliveryOption == 'pickup' ? 'selected' : '' }}>Pick Up</option>
        </select>
    </div>

    <div class="col-md-6">
        <label for="banner_img" class="form-label">Banner Image</label>
        <input type="file" class="dropify" data-default-file="{{ asset('storage/' . $product->banner_img) }}" name="banner_img" />
    </div>
    <div class="col-md-6">
        <label for="other_img" class="form-label">Other Images</label>
        <input type="file" class="dropify" name="other_img[]" multiple />
    </div>
    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{ $product->description }}</textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>