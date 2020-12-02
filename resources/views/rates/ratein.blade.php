 @extends('layouts.app')
@section('content')
{{-- <form action="{{url('api/rate')}}" method="post">
    <select name="type" id="">
        <option value="_" selected="true" disabled>Select Type</option>
        <option value="cow">Cow</option>
        <option value="buffalo">Buffalo</option>
    </select>
    <select name="fata" id="fat">
        <option value=" " disabled selected>
            Select Fat
        </option>
        @foreach ($rates as $rate)
        <option value="{{$rate->Fat}}">
            {{$rate->Fat}}
        </option>
        @endforeach

    </select>
    <input type="text" name="rate" id="rate" placeholder="Enter Rate">
    <input type="submit" onclick="alert('Rate added')">

</form> --}}
{{-- <form action="{{url('api/rate')}}" method="post"> --}}

<table>
    <th>Fat</th>
    <th>Cow Rate</th>
    <th>Buffalo Rate</th>
    @foreach ($rates as $item)

  <script>
      
  </script>
        <form action="#">
        <tr>
            <td>
            <input type="text" name="" value="{{$item->Fat}}" disabled> 
            </td>
        <td>
        
           <input type="text" value=" {{$item->Cow_Rates}}"disabled>
        </td>
        <td>
        
            <input type="text" value="{{$item->Buffalo_Rates}}" disabled>

        </td>
        <td>
            <input type="submit" class="button bg-gray-100" value="Edit">
        </td>
        </tr>
        </form>
    @endforeach
</table>

    {{$rates->links()}}


@endsection