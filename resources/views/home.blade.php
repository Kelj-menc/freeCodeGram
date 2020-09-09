@extends('layouts.app')

@section('content')

<!-- glavni div  - kontainer za ono gore gde se nalazi moja kao icona kad sam ulogovan
i desno od nje username followersa kolko postova bio...-->

            <!-- ovaj  row delim na 2 dela 3/12 (icona) i 9/12 (ostalo desno)-->
            <div class="row">
                <!-- icona -->
                <div class="col-3 p-5">
                  <img src="https://dt2sdf0db8zob.cloudfront.net/wp-content/uploads/2019/12/9-Best-Online-Avatars-and-How-to-Make-Your-Own-for-Free-image1-5.png" height="150" class="rounded-circle float-right">
                </div>

                <!-- desno od icone -->
                <div class="col-9 pt-5">
                  <div><h1><strong>freeCodeGram</strong></h1></div>
                  <!-- div sa 3 diva -->
                  <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>215</strong> following</div>
                  </div>
                  <div class="pt-4 font-weight-bold">Keljmenc.organ</div>
                  <div class="pr-5">
                    There comes a time
                    when we heed a certain call,
                    when the world must come together as one,
                    there are people dying...
                    Oh, and it's time to lend a hand to life
                    the greatest gift of all.
                  </div>

                </div>

            </div>






</div>
@endsection
