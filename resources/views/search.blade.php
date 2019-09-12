@extends('main')

@section('content')

<body>

	<div class="container">

		<form action= "/check" method= "POST" >
      @csrf

			<div class="input-group">

				<input type="text" class="form-control" name="name"
					placeholder="Search Company">

          <span class="input-group-btn">
					       <button type="submit" class="btn btn-secondary">
                   Search
                 </button>
          </span>

        </div>

    </form>

	</div>

  <div class ="container">

    <table>

      <tr>

        <th>
          Company Name
        </th>

        <th>
          Registration Number
        </th>

  			<th>
          Added Date
        </th>

  			<th>
          Websites
        </th>

      </tr>

      @if(isset($response))

        @foreach($response->data as $row)

        <tr>

          <td>
            {{ $row->name }}
          </td>

          <td>
            {{ $row->regisration_number ?: '-' }}
          </td>

          <td>
            {{ $row->added_date }}
          </td>

          <td>
            @foreach($row->websites  as $website)
              {{$website }}<br>
            @endforeach
            </td>
          </tr>

        @endforeach

      @endif

    </table>

  </div>

</body>
@endsection
