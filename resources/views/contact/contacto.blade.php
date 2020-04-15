@extends('template\main')


    
@section('tilte',"Contacto")
    
@section('title_section','Registro contacto')

@section('title_two','ingresar ')
    
@section('Contect_section')

   @include('message\message')
      
<form  method="POST" action="{{route('contacto.store')}}"  >
   @csrf  
   {{-- {{dd($contacto)}} --}}
   
               
               
               
     @include('contact\form_contact')

     </form>
            
      
     @endsection
@section('Footer')
      
    <table class=" table  text-center table-responsive-md">
     <tr>
      <th>ID</th>
     <th>Nombre</th>
     <th>Apellido Contacto</th>
     <th>Identificacion Contacto</th>
     <th>Telefono</th>
     <th>Accion</th>
    </tr>
    @foreach ($contact as $item)
        <tr>
        <td>{{$item->id}}</td>
            <td>{{$item->nombre_contacto}}</td>
            <td>{{$item->apellido_contacto}}</td>
            <td>{{$item->cedula_contacto}}</td>
            <td>{{$item->telefono_contacto}}</td>
        <td>  <a href="{{route("contacto.edit",$item->id)}}" class="btn btn-outline-primary btn-sm  fas fa-edit"> Actualizar</a> <a href="{{route('contacto.destroy',$item->id)}}" class="btn btn-sm btn-outline-danger fas fa-trash-alt"> Eliminar</a></td>
          
         </tr>
        
     @endforeach
     
     
    
    </table>
    <div class="offset-md-5">{{$contact->links()}}</div>
    
    
 
@endsection
   