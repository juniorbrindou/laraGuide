<a class="button  {{ request()->is($lien)? 'is-dark' : 'is-light'}}" href="{{url($lien)}}">{{$texte}}</a>