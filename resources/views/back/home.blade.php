 @extends('back.layouts.master')
 @section('content')
     <div class="col-md-12 col-sm-12 col-xs-12">
         @if (session('success'))
             <div class="alert alert-success">
                 {{ session('success') }}
             </div>
         @endif
         <div class="x_panel">
asd
         </div>
     </div>
 @stop
