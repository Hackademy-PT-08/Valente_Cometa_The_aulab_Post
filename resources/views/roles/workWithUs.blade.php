<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1> {{__('ui.work')}} </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>{{__('ui.writer')}}</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dicta id ullam mollitia soluta
                    voluptate aut reiciendis unde veniam et.</p>

                <h3>{{__('ui.revisor')}}</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dicta id ullam mollitia soluta
                    voluptate aut reiciendis unde veniam et.</p>

                <h3>{{__('ui.amn')}}</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dicta id ullam mollitia soluta
                    voluptate aut reiciendis unde veniam et.</p>
            </div>

            <div class="col-12 col-md-6">
                <form action="{{route('user.role.request')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label h3"> {{__('ui.position')}}</label>
                        <select class="form-control" name="role" id="">
                            <option value="admin">{{__('ui.amministratore')}}</option>
                            <option value="revisor">{{__('ui.revisore')}}</option>
                            <option value="writer">{{__('ui.scrittore')}}</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label h5"> {{__('ui.send')}}</label>
                        <input type="email" class="form-control" name="email" @auth value="{{Auth::user()->email}}"
                            @endauth>
                    </div>
                    <div class="mb-3">
                        <label class="form-label h5"> {{__('ui.us')}}</label>
                        <textarea name="presentation" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <button class="btn btn-dark" style="color:yellow" type="submit">{{__('ui.cand')}}</button>

                </form>

            </div>
        </div>
    </div>


</x-layout>










































