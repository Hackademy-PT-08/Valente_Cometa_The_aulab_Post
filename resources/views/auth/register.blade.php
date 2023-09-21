<x-layout>

    <div class="row my-4">
        <div class="col-6">
        <form method="post" action="{{ route('register') }}">

@csrf


<div class="row  mt-5 mx-5">
    <div class="col-8">
        <div>
            <label class="form-label">Username</label>
            <input type="text" name="name" class="form-control">
        </div>
    </div>
</div>

<div class="row  mt-5 mx-5">
    <div class="col-8">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria_describedby="emailHelp">

        </div>
    </div>
</div>

<div class="row  mt-5 mx-5">
    <div class="col-8">

        <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

        </div>
    </div>
</div>
<div class="row  mt-5 mx-5">
    <div class="col-8">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">

        </div>
    </div>
</div>
    <div class="container mx-5">
        <button type="submit" class="btn btn-dark  mt-5" style="color:yellow" >Submit</button>
    </div>

    

</form>
        </div>
        <div class="col-6 ">
    <img src="{{asset('/immagini/caffe.png')}}" alt="" style="height:80vh " class="login">
    </div>
    </div>

    </div>

    
    


   



</x-layout>