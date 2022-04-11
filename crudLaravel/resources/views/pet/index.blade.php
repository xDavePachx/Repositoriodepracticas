<center><h1>Lista de mascotas</h1></center>
<center>
<table border="2" >
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>

            <form action="{{url ('/pet/'.$pet->id) }}" method="post" >
                @csrf
                {{ method_field('DELETE') }}
                <td><input type="submit"
                onclick= "return confirm('Desea eliminar el registro')" 
                value="Delete"/> </td>

            </form>
        </tr>
        @endforeach
    </tbody>

</table></center>