



  {{-- Nombre --}}
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <label for="nombre_contacto">Nombre </label>  
      <input type="text" class="form-control" value="{{old('nombre_contacto',$contacto->nombre_contacto)}}" name="nombre_contacto" id="nombre_contacto" placeholder="Nombre">
      {!!$errors->first('nombre_contacto','<small  class ="text-danger" > :message </small>') !!}
    </div>

    {{-- Apellido --}}
        <div class="form-group col-md-6">
      <label for="apellido_contacto">Apellido</label>
      <input type="text" class="form-control" value="{{old('apellido_contacto',$contacto->apellido_contacto)}}" name="apellido_contacto" id="apellido_contacto" placeholder="Apellido">
      {!!$errors->first('apellido_contacto','<small  class ="text-danger" > :message </small>') !!}
    </div>
     {{-- Tipo identificacion --}}
     
     <div class="form-group col-md-6">
      <label for="dni_id">Tipo ID</label>
       <select class="form-control" id="dni_id" name="dni_id" >
       <option >Elija una Opcion </option>
        @foreach ($dnis as $item)
        <option value="{{$item->id }} ">{{$item->dni}}</option>
        @endforeach 
        </select>
        {!!$errors->first('dni_id','<small  class ="text-danger" > :message </small>') !!}

          </div>

    {{-- numero Identificacion --}}
        <div class="form-group col-md-6">
      <label for="cedula_contacto">Numero Identificcaion</label>
    <input type="text" class="form-control" name="cedula_contacto" id="cedula_contacto" value="{{old('cedula_contacto',$contacto->cedula_contacto)}}" placeholder="Numero Identificcaion">
    {!!$errors->first('cedula_contacto','<small  class ="text-danger" > :message </small>') !!}

  </div>

    {{-- telefono --}}
    
    <div class="form-group col-md-6">
      <label for="telefono_contacto">Telefono</label>
    <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" value="{{old('telefono_contacto',$contacto->telefono_contacto)}}" placeholder="Telefono">
    {!!$errors->first('telefono_contacto','<small  class ="text-danger" > :message </small>') !!}

  </div>
    {{-- botton --}}
    <div class="offset-md-5"> 
    <button type="submit"  class="btn btn-primary">Enviar Datos</button>
    </div>
      
  
 