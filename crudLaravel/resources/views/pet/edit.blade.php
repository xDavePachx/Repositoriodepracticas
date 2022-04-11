<center><h1>Edit pet</h1></center> 
<center>
<form action="{{ url('/pet/'.$pet->id) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    @include('pet.form')
</form>
</center>
