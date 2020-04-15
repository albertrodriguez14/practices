
    {{-- Registrado--}}
    @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{session('success')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

{{-- Eliminado --}}
 @if (session('warning'))
     

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('warning')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
 @endif
 {{-- Actualizado --}}
 @if (session('delete'))
    
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('delete')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 @endif

  

     