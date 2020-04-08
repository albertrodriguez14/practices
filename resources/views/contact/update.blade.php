@extends("template\main")

    
@section('tilte',"Contacto")
    
@section('title_section','Actualizar contacto')

@section('title_two','Actualizar ')
    
@section('Contect_section')

@foreach ($contacto as $contacto)
                          
<form  method="POST" action="{{route('contacto.update', $contacto->id)}}">
  @method("PUT")
  @csrf  
         
      
          
      @include('contact\form_contact')
      
     @endforeach
</form>
             


@endsection
    