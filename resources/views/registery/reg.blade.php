<form action="{{url('api/reg_name')}}" method="post">

        <div class="">
            <label for="name">
                Enter Your Name 
            </label>
            <input type="text" name="name" id="">
        </div>
        <div class="">
            <label for="number">Enter Your Phone Number</label>
            <input type="tel" name="number">
        </div>
        <div class="">
            <label for="upi">
                GPay,Patym,PhonePay....etc
            </label>

            <label for="no">
                No
            </label>
            <input type="radio" name="upi" id="no" value="no">
            <label for="yes">
                Yes
            </label>
            <input type="radio" name="upi" id="" value="yes">
        </div>
        <div class="select">
            <label for="type">Select Your Type</label>
            <select name="type" id="">
                <option value="_"> 

                </option>

                <option value="Cow">
                    Cow
                </option>

                <option value="Buffalo">
                    Buffalo
                </option>

                <option value="Both">
                    Both
                </option>

            </select>
        </div>
        <div class="">
            <input type="submit" value="Submit">
        </div>
</form>