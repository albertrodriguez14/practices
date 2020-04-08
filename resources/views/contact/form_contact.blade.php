     
  {{-- Nombre --}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nombre_contacto">Nombre contacto</label>
      <input type="text" class="form-control" value="{{$contacto->nombre_contacto}}" name="Nombre_contacto" id="Nombre_contacto" placeholder="Nombre">
    </div>
    {{-- Apellido --}}
    
    <div class="form-group col-md-6">
      <label for="apellido_contacto">Apellido</label>
      <input type="text" class="form-control" value="{{$contacto->apellido_contacto}}" name="apellido_contacto" id="apellido_contacto" placeholder="Apellido">
    </div>
     {{-- Tipo identificacion --}}
     
     <div class="form-group col-md-6">
      <label for="dni_id">Tipo ID</label>
       <select class="form-control" id="dni_id" name="dni_id" >
         <option {{$contacto->dni_id}}></option>
        @foreach ($dnis as $item)
        <option value="{{$item->id }} ">{{$item->dni}}</option>
        @endforeach 
         
       </select>
         

    </div>
    {{-- numero Identificacion --}}
    
    <div class="form-group col-md-6">
      <label for="cedula_contacto">Numero Identificcaion</label>
    <input type="text" class="form-control" name="cedula_contacto" id="cedula_contacto" value="{{$contacto->cedula_contacto}}" placeholder="Numero Identificcaion">
    </div>
    {{-- telefono --}}
    
    <div class="form-group col-md-6">
      <label for="telefono_contacto">Telefono</label>
    <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" value="{{$contacto->telefono_contacto}}" placeholder="Telefono">
    </div>
    {{-- botton --}}
    <div class="offset-md-5"> 
    <button type="submit"  class="btn btn-primary">Enviar Datos</button>
    </div>
      
  {{$contacto->id}}
 