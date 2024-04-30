<form class="row g-3">
    <h2>Bike Details</h2>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Brand</label>
      <input type="email" class="form-control" id="inputEmail4" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Model</label>
      <input type="password" class="form-control" id="inputPassword4" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Year</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>2024</option>
        <option value="1">2023</option>
        <option value="2">2022</option>
        <option value="3">2023</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Type</label>
      <select class="form-select" aria-label="Default select example">
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
      <label for="inputPassword4" class="form-label">Distance Covered</label>
      <input type="number" class="form-control" id="inputPassword4" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Colour</label>
      <input type="password" class="form-control" id="inputPassword4" />
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
    <h2>Additional Feature</h2>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Gear</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Five</option>
        <option value="1">Six</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Suspension Type</label>
      <input type="password" class="form-control" id="inputPassword4" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Break Type</label>
      <input type="password" class="form-control" id="inputPassword4" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Owner</label>
      <div class="d-flex">
        <div class="form-check mr-3">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
            checked
          />
          <label class="form-check-label" for="flexRadioDefault2">
            First
          </label>
        </div>
        <div class="form-check mr-3">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
          />
          <label class="form-check-label" for="flexRadioDefault2">
            Second
          </label>
        </div>
        <div class="form-check mr-3">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
          />
          <label class="form-check-label" for="flexRadioDefault2">
            Third
          </label>
        </div>
      </div>
    </div>
    <h2>Price</h2>
    <div class="col-md-6">
      <label class="form-check-label" for="flexRadioDefault2">
        Asking Price
      </label>
      <div class="input-group mb-3">
        <span class="input-group-text">Rs.</span>
        <input
          type="text"
          class="form-control"
          aria-label="Amount (to the nearest dollar)"
        />
      </div>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Negotibale?</label>
      <div class="d-flex">
        <div class="form-check mr-3">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadio"
            id="flexRadioDefault"
            checked
          />
          <label class="form-check-label" for="flexRadioDefault"> yes </label>
        </div>
        <div class="form-check mr-3">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadio"
            id="flexRadioDefault"
          />
          <label class="form-check-label" for="flexRadioDefault"> no </label>
        </div>
      </div>
    </div>
    <h2>Other info</h2>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Description</label>
      <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="3"
      ></textarea>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Address</label>
      <input type="password" class="form-control" id="inputPassword4" />
    </div>

    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Delivery Option</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Home Delivery</option>
        <option value="1">Pick Up</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Banner Image</label>
      <input class="form-control" type="file" id="formFile" />
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Other Images</label>
      <input class="form-control" type="file" id="formFile" multiple />
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>