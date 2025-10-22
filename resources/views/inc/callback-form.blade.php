<div class="form-block">
    <div class="steps">
        <span class="step">
            <div class="circle"></div>
            <div class="line"></div>
        </span>
        <span class="step">
            <div class="circle"></div>
            <div class="line"></div>
        </span>
        <span class="step">
            <div class="circle"></div>
        </span>
    </div>

    <div class="heading">
        <h2>Date & Location</h2>
        <p>Choose a suitable date, pick up and delivery location </p>
    </div>

    <form id="regForm" action="{{ route('sendForm') }}" method="post">
        @csrf
        <div class="tab">
            <input type="hidden" name="pickup_state" value="" id="pickup_state" required>
            <input type="hidden" name="pickup_city" value="" id="pickup_city" required>
            <input type="hidden" name="pickup_zip" value="" id="pickup_zip" required>

            <input type="hidden" name="dropoff_state" value="" id="dropoff_state" required>
            <input type="hidden" name="dropoff_city" value="" id="dropoff_city" required>
            <input type="hidden" name="dropoff_zip" value="" id="dropoff_zip" required>

            <div class="form-group">
                <label for="">Preferred date</label>
                <input type="text" class="form-control datetimepicker" name="estimated_ship_date" placeholder="Choose date" required>
            </div>

            <div class="form-group">
                <label for="">Pick up</label>
                @livewire('location-component', ['name' => 'originalLocation', 'placeholder' => 'ZIP or CITY'])
            </div>
            <div class="form-group">
                <label for="">Delivery</label>
                @livewire('location-component', ['name' => 'destinationLocation', 'placeholder' => 'ZIP or CITY'])
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <label for="" class="mb-0">Transport type</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transportType" id="inlineRadio1" value="Open">
                            <label class="form-check-label" for="inlineRadio1">Open</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transportType" id="inlineRadio2" value="Enclosed">
                            <label class="form-check-label" for="inlineRadio2">Enclosed</label>
                        </div>
                    </div>
                </div>
                <div class="radio-error">
                    Select Transport type
                </div>
            </div>
        </div>

        <div class="tab">
            <div class="form-group">
                <label for="">Vehicle type</label>
                <select class="form-select form-control" aria-label="Default select example" name="typeCar">
                    <option selected>Choose</option>
                    <option value="Car">Car</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="SUV">SUV</option>
                    <option value="Truck">Truck</option>
                    <option value="Boat">Boat</option>
                    <option value="Travel Trailer">Travel Trailer</option>
                    <option value="RV">RV</option>
                    <option value="Other">Other</option>
                </select>
                <div class="vehicle-type-error">
                    Select Vehicle type
                </div>
            </div>
            <div class="form-group">
                <label for="">Vehicle year</label>
                <input type="number" name="year" class="form-control" placeholder="Year">
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="">Vehicle make</label>
                        <input type="text" name="make" class="form-control" placeholder="Make">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="">Vehicle model</label>
                        <input type="text" name="model" class="form-control"
                               placeholder="Model">
                    </div>
                </div>
            </div>
        </div>

        <div class="tab">
            <div class="form-group">
                <label for="">Full name</label>
                <input type="text" name="name" class="form-control" placeholder="Name ">
            </div>
            <div class="form-group">
                <label for="">Your email</label>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email">
                <div class="email-error">
                    Enter correct Email
                </div>
            </div>
            <div class="form-group">
                <label for="">Your phone</label>
                <input type="number" name="number" class="form-control" placeholder="Phone number">
            </div>
        </div>

        <div>
            <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: none;">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next step</button>
        </div>

        <div class="action">
            Do you have any questions? <a href="{{ route('contacts') }}">Contact us</a>
        </div>
    </form>
</div>
