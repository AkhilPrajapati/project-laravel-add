<center><br><br><br>
    <form action="/add" method="POST">
        {{-- /add is route ko address --}}
        @csrf
        Name:<br><input type="text" name="name", required><br><br>
        Email:<br><input type="text" name="email", required><br><br>
        {{-- <span>
            @error('name'){{message}}
            @enderror --}}
        </span>
        Password:<br><input type="password" name="password"><br><br>
        <button type="submit">Click to Add</button><br><br>

        @if (session()->has('myKey'))
        <div
        style="color: green"
        class="alert alert-success">
            <h2>{{session()->get('myKey')}}</h2>

            </div>
        @endif
    </form></center>
