<x-layout>

<form method="post" action="{{ route('login')}}">
    @csrf 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp">
    </div>

    <div class="mb-3">
    <label for= "exampleInputEPassword1" class= "form-label"> Password </label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

    

</x-layout>




















</form>
    







