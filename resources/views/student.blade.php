<x-layout.layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>

    {{-- slot start --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
          @if(session()->has('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
          @endif
    <form action="" method="POST">
        @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                  </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleFormControlInput2" placeholder="title">
                </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">POST</button>
      </div>
    </form>

    <div class="col-8 ps-5">
        <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAME</th>
                  <th scope="col">TITLE</th>
                  <th scope="col">DESCRIPTION</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
              @foreach($students as $key => $value)
                <tr>
                  <th scope="row">
                    {{$key+1}}
                  </th>
                  <td>
                    {{$value->name}}
                  </td>
                  <td>
                    {{$value->title}}
                  </td>
                  <td>
                    {{$value->description}}
                  </td>
                  <td>
                    <a href="{{ url('/update', $value->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ url('/delete', $value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
              @endforeach

              </tbody>
          </table>
    </div>
        </div>
    </div>
    {{-- slot end --}}
</x-layout.layout>
