 @extends('layouts.app')
@section('content')
 
 <form action="{{url('api/bill')}}" method="POST">
            <div>
                <label for="Cust_Name" >Select Customer</label>

                <select name="Cust_Name" id="customers">

                    <option value="_" disabled selected='true'>Select Customer</option>
                        @foreach ($customers as $item)
                            <option  class="bg-blue-200 p-3 m-3"for="" value="{{$item->id}}">{{$item->Cust_Name}}</option>
                        @endforeach

                </select>
                        
                        
                </div>
                                
            </div>

            <div class="  form-group  row">
            <label for="Milk_type" >Select Milk Type</label>
            </div>
            <div class="form-group row">
                <select name="Milk_type" id="state" data-live-search="true" class="form-control input-lg">
                <option value="0" disabled="true" selected='true'>Select Milk Type</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="quantity">Enter Quantity In Litre</label>
                <input type="text" name="quantity" placeholder="Enter Quantity In Litre">
            </div>
                <div class="form-group row">
                <label for="fat">Enter Fat </label>
                <input type="text" name="fat" placeholder="Enter Fat">
            </div>
            <input type="submit" value="submit">
</form>

<script type="text/javascript">
        $('#customers').on('change',function(e){
            $('#state').empty();
            Cust_Id=e.target.value;
            console.log(Cust_Id);

            $.ajax({
                    url: '/api/drop_type/'+Cust_Id ,
                    type: "GET",
                    dataType: "json",

                    success:function(data) {


                             $('#college').append('<option value="0" disable="true" selected="true">=== Select Villages ===</option>');

                    $.each(data, function(key, value) {
                    console.log(key);
                    console.log(value);


                        $('select[name="Milk_type"]').append('<option value="'+ value +'">'+ value+'</option>');


                        });
                    }
                });


          });

    </script>

@endsection    