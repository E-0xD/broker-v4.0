 <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
     <div class="flex-grow-1">
         <h4 class="fs-18 fw-semibold mb-0">{{ $title }}</h4>
     </div>

     @isset($breadcrums)
         <div class="text-end">
             <ol class="breadcrumb m-0 py-0">

                 @foreach ($breadcrums as $breadcrum)
                     @if ($loop->last)
                         <li class="breadcrumb-item active">{{ $breadcrum }}</li>
                     @else
                         <li class="breadcrumb-item"><a href="{{ $breadcrum->url ?? '#' }}">{{ $breadcrum }}</a></li>
                     @endif
                 @endforeach

             </ol>
         </div>
     @endisset
 </div>
