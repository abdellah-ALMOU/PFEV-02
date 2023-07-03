
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

 
  
    
  <div class="titre">
        <h2 class="text-center" style="color: grey;"><span>D</span>erniers incidents traités</h2>
    </div>
    <div class="row">
        @foreach ($incidents->slice(-3) as $incident)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title" style="color: black;">Incident N°{{ $incident->id }}</h5>

                    
                    
                      @foreach ($photos as $ph)
                      @if ($ph->incident_id == $incident->id)
                    <img class="d-block" src="{{ asset($ph->path) }}" alt="Card image cap" style="width: 400px; height: 400px;">
                      @endif
                      @endforeach
                    


                    <p class="card-text">{{ $incident->description }}</p>
                    <h4> @foreach ($types as $T)
                        @if($incident->type_id == $T->id)
                        <option style="color: black;">{{$T->name}}</option>
                        @endif
                        @endforeach</h4>

                      <h5 class="card-text" style="color: black;">{{ $incident->date }}</h5>
                        <div class="buttons" style="text-align: right;">
                          @if( session()->get('user')) 
                          
                          <div class="small d-flex justify-content-start">
                                          <a href="#!" class="d-flex align-items-center me-3">
                                            <i class="far fa-thumbs-up me-2"></i>
                                            <p class="mb-0">Like</p>
                                          </a>
                                          <a href="#!" class="d-flex align-items-center me-3">
                                            <i class="fas fa-thumbs-down me-2"></i>
                                            <p class="mb-0">Dislike</p>
                                          </a>
                                          <a href="#!" class="d-flex align-items-center me-3" >
                                            <i class="fas fa-comment me-2"></i>
                                            <p class="mb-0">Comment</p>
                                          </a>
                                          @if(session()->get('user') && !session()->get('user')->cin)
                                          <a href="{{ route('delete',['id'=>$incident->id]) }}" class="d-flex align-items-center me-3" style="text-align: right ;">
                                            <i class="fas fa-trash"></i>
                                            <p class="mb-0">Delete</p>
                                          </a>
                                          @endif
                                           
                                        </div>
                         
                          
                                <div>
                               
                                </div>
                                @endif
                          
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
      
</div>
  