<div class="bg-orange-50 border-l-4 border-orange-300 text-orange-600 p-4" role="alert">
  <p class="font-bold">Be Warned</p>
  <p>Something not ideal might be happening.</p>
</div>

<!-- con valores pasados de titulo, mensaje($slot) y colores  -->
<div class="bg-{{$color}}-50 border-l-4 border-{{$color}}-300 text-{{$color}}-600 p-4" role="alert">
  <p class="font-bold">{{$titulo}}</p>
  <p>{{$slot}}</p>
</div>

<!--con valores pasados de titulo, mensaje($slot), colores y classes adicionales que se agregan a la existentes, ademas invoco al metodo prueba() creado dentro de la clase -->
<div {{$attributes->merge(['class' => "bg-$color-50 border-l-4 border-$color-300 text-$color-600 p-4"])}} role="alert">
  <p class="font-bold">{{$titulo}}</p>
  <p>{{$slot}}</p>
  {{$prueba()}}
</div>