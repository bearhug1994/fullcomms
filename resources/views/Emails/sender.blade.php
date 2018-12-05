@section('content')
<div class="col-12">

        {!! Form::open(['method' => 'get']) !!}


        <table class="table table-hover">
            <tr class="table-head">
                <th>Id</th>
            </tr>
            @foreach ($models as $model)
                <tr>
                    <td><a>{{ $model->id }}</a></td>
                </tr>
            @endforeach
        </table>
     <br>
     <table class="table table-hover">
         <tr class="table-head">
             <th>Name</th>
         </tr>
         @foreach ($models as $model)
             <tr>
                 <td><a>{{ $model->name }}</a></td>
             </tr>
         @endforeach
     </table>
     <br>
     <table class="table table-hover">
         <tr class="table-head">
             <th>Email</th>
         </tr>
         @foreach ($models as $model)
             <tr>
                 <td><a>{{ $model->email }}</a></td>
             </tr>
         @endforeach
     </table>
     <br>
     <table class="table table-hover">
         <tr class="table-head">
             <th>Subject</th>
         </tr>
         @foreach ($models as $model)
             <tr>
                 <td><a>{{ $model->subject }}</a></td>
             </tr>
         @endforeach
     </table>
     <br>
     <table class="table table-hover">
         <tr class="table-head">
             <th>Message</th>
         </tr>
         @foreach ($models as $model)
             <tr>
                 <td><a>{{ $model->message }}</a></td>
             </tr>
         @endforeach
     </table>

        {!! Form::close() !!}
    </div>
