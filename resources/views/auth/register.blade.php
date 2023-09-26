<x-layout>

    <div class="row my-4">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-xl-6 ">
        <form method="post" action="{{ route('register') }}">

@csrf


<div class="row  mt-5 ">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-1 col-xl-9 ">
        <div>
            <label class="form-label">Username</label>
            <input type="text" name="name" class="form-control">
        </div>
    </div>
</div>

<div class="row  mt-5 ">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-1 col-xl-9 ">
        <div class="">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria_describedby="emailHelp">

        </div>
    </div>
</div>

<div class="row  mt-5 ">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-1 col-xl-9 ">

        <div class="">

            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

        </div>
    </div>
</div>
<div class="row  my-3 ">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-1 col-xl-9 ">
        <div class="">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">

        </div>
    </div>
</div>
    <div class="container mx-5">
        <button type="submit" class="btn btn-dark  " style="color:yellow" >Submit</button>
    </div>

    

</form>
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-6 col-xl-4  d-none d-xl-block">
    <img src="{{asset('/immagini/caffe.png')}}" alt="" style="height:80vh " class="login">
    </div>
    </div>

    </div>

    
    


   



</x-layout>