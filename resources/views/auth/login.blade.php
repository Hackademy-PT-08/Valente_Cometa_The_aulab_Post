<x-layout>
    <div class="container">
    <div class="row">
        <div class="col-6" style="margin-top:15vh">
        <form method="post" action="{{ route('login')}}">
        @csrf



    <div class="row  mt-5 mx-5">
        <div class="col-8">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp">
        </div>
        </div>
    </div>

        
    <div class="row mx-5">
        <div class="col-8">
            <div class="mb-3">
            <label for="exampleInputEPassword1" class="form-label"> Password </label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        </div>
    </div>
     
       
<div class="container mx-1">
    <button type="submit" class="btn btn-dark mx-5">Submit</button>
</div>
   



       


    </form>
    </div>
  
    <div class="col-4 my-2">
    <img src="{{asset('/immagini/LOG.png')}}" alt="" style="height:80vh" class="login">
    </div>
    </div>
  
  
    </div>

</x-layout>




















</form>