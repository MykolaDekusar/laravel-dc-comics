 @extends('layouts.main')
 @section('header')
     <header>
         <div class="title">
             <h1>{{ $comic->title }}</h1>
         </div>
     </header>
 @endsection
 @section('main')
     <div class="card-extended">
         <div class="card-type">
             <p>Type: {{ $comic->type }}</p>
         </div>
         <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
         <div class="card-price">
             <h3>Price: {{ $comic->price }}</h3>
         </div>
         <div class="card-description">
             <h4>{{ $comic->description }}
                 <br>
                 <br>
                 First sale date: {{ $comic->sale_date }}
             </h4>
         </div>
         <div class="card-styled">
             <h3>Styled by: {{ $comic->artists }}</h3>
         </div>
         <div class="card-written">
             <h3>Written by: {{ $comic->writers }}</h3>
         </div>

         <div class="content">
             <button onclick="window.location='{{ route('comics.index') }}'">Home</button>
             <button onclick="window.location='{{ route('comics.create') }}'">Create new Comic</button>
             <button onclick="window.location='{{ route('comics.edit', $comic->id) }}'">Modify Comic</button>
             <button id="myBtn">Delete Comic</button>
         </div>
     </div>
     <!-- The Modal -->
     <div id="myModal" class="modal">
         <!-- Modal content -->
         <div class="modal-content">
             <p>Are you sure you want to delete this precious comic?</p>
             <div class="modal-buttons">
                 <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button>Confirm</button>
                 </form>
                 <button class="close">Close</button>
             </div>
         </div>
     </div>
 @endsection
