<x-layout.layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>

    {{-- slot Start --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-5">    
                <form action="" method="POST">
                    @csrf
                    @method('put')
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$student->name}}" id="exampleFormControlInput1" placeholder="Your Name">
                              </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput2" class="form-label">Title</label>
                              <input type="text" name="title" value="{{$student->title}}" class="form-control" id="exampleFormControlInput2" placeholder="title">
                            </div>
                      
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Post">
                                {{$student->description}}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    {{-- slot End --}}

</x-layout.layout>