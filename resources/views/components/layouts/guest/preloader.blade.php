 <div id="preloader">
     <div id="text">
         <p class="active">X</p>

         @foreach (str_split(Config('app.name')) as $letter)
             <p>{{ $letter }}</p>
         @endforeach

     </div>
 </div>
