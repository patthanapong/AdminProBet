@extends('masterprobet')

@section('content')
          <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($user as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->fullname }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                        
                        <a href="/edit/{{ $u->id }}" class="btn btn-default">Edit</a></td>
                       <td>
                       <form action="/index/{{ $u->id }}" method="POST">
                        {{ csrf_field() }}
            
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" value="Delete">
            
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
@endsection