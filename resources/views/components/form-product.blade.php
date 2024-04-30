<form class="row g-3">
    <h3>Bike Details</h3>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" />
    </div>
    <div class="col-md-6">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" />
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
          <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="distance"
              name="distance" />
          <span class="input-group-text">km</span>

      </div>
  </div>
    <div class="col-md-6">
        <label for="colour" class="form-label">Colour</label>
        <input type="text" class="form-control" id="colour" name="colour" />
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Condition</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Excellent</option>
            <option value="1">Good</option>
            <option value="2">Fair</option>
            <option value="3">Bad</option>
        </select>
    </div>
    <h3>Additional Feature</h3>
    <div class="col-md-6">
        <label for="gear" class="form-label">Gear</label>
        <select id="gear" name="gear" class="form-select" aria-label="Default select example">
            <option selected>Five</option>
            <option value="1">Six</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="suspension" class="form-label">Suspension Type</label>
        <input type="text" class="form-control" id="suspension" name="suspension" />
    </div>
    <div class="col-md-6">
        <label for="break" class="form-label">Break Type</label>
        <input type="break" class="form-control" id="break" name="break" />
    </div>
    <div class="col-md-6">
        <label for="owner" class="form-label">Owner</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="owner" id="owner1" value="first" checked />
                <label class="form-check-label" for="owner1">
                    First
                </label>
            </div>
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="owner" id="owner2" value="second" />
                <label class="form-check-label" for="owner2">
                    Second
                </label>
            </div>
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="owner" id="owner3" value="third" />
                <label class="form-check-label" for="owner3">
                    Third
                </label>
            </div>
        </div>
    </div>
    <h3>Price</h3>
    <div class="col-md-6">
        <label class="form-check-label" for="flexRadioDefault2">
            Asking Price
        </label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rs.</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="price"
                name="price" />
        </div>
    </div>
    <div class="col-md-6">
        <label for="negotiable" class="form-label">Negotiable?</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableYes" value="yes"
                    checked />
                <label class="form-check-label" for="negotiableYes">Yes</label>
            </div>
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" name="negotiable" id="negotiableNo"
                    value="no" />
                <label class="form-check-label" for="negotiableNo">No</label>
            </div>
        </div>
    </div>
    <h3>Other info</h3>
    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="address" class="form-control" id="address" name="address" />
    </div>

    <div class="col-md-6">
        <label for="deliveryOption" class="form-label">Delivery Option</label>
        <select id="deliveryOption" name="deliveryOption" class="form-select" aria-label="Default select example">
            <option value="home" selected>Home Delivery</option>
            <option value="pickup">Pick Up</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Banner Image</label>
        <input class="form-control" type="file" id="formFile" name="banner_img" />
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Other Images</label>
        <input class="form-control" type="file" id="formFile" name="other_img" multiple />
    </div>
    <div class="col-md-12">
        <label for="inputPassword4" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>
