<x-layout>
    <form method="post" action="{{ route('register') }}">

        @csrf


        <div class="row  mt-5 mx-5">
            <div class="col-4">
                <div>
                    <label class="form-label">Username</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
        </div>

        <div class="row  mt-5 mx-5">
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria_describedby="emailHelp">

                </div>
            </div>
        </div>

        <div class="row  mt-5 mx-5">
            <div class="col-4">

                <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">

                </div>
            </div>
        </div>
        <div class="row  mt-5 mx-5">
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">

                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mx-4 mt-5">Submit</button>

    </form>

</x-layout>