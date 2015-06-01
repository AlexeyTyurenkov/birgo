    <div class="panel">
        <h4 class="list-group-item-heading">Index: {{$index}}</h4>
        <p class="list-group-item-text">Data {{$theme->name}}</p>
        <a href="{{url("/vote/".$theme->id."/up")}}"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></a>
        <a href="{{url("/vote/".$theme->id."/down")}}"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span></a>
    </div>