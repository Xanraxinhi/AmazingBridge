<div class="footer {{ $hideFooter ?? '' }}" id="footer">
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ $message }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="p-5 mt-5">
            <div class="row">
                <div class=" col-4">
                    <h2>Contact</h2>
                    <p>Join Our Mailling List</p>
                    <hr>
                    <form action="{{ route('contact.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Your Name" value="{{ old('name') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Your Email" value="{{ old('email') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="number" placeholder="Your Number" value="{{ old('number') ?? '' }}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn-form">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <div class=" col-4">

                </div>
                <div class=" col-4 align-self-center">
                    <div class="">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, assumenda consectetur culpa dolores eveniet optio porro quod quos sunt ut!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
