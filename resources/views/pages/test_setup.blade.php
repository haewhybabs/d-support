@extends('layouts.main')
@section('content')
<div class="row">
    <form method="post" action="{{ URL::to('test_details') }}">
        @csrf
        <div class="form-group col-sm-12">
            <label>Select Diagnosis Test</label>
            <select class="form-control select2" style="width: 100%;" name="test" id="mySelect">
                @if($test_detail !=null)

                    <option selected="selected">{{ $test_detail->sub_test_name }}</option>
                @else
                    <option selected="selected">Select</option>
                @endif
                @foreach($tests as $test)
                    <option value="{{ $test->sub_test_id }}">{{ $test->sub_test_name }}</option>
                @endforeach
            </select><br>
            <button class="btn btn-info">Submit</button>
        </div>

    </form>
</div>
@if($test_detail !=null)
<div class="row">
    <div class="box-body pad col-sm-12" id="editor">
        <form method="POST" action="{{ URL::to('test_update_action') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $test_detail->sub_test_id }}">
            <label>Test Name</label>
            <div class="form-group">
                <input type="text" value="{{ $test_detail->sub_test_name }}" class="form-control" name="test_name">
            </div>
            <textarea class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="detail">
                {{ $test_detail->detail }}
            </textarea>
            <button class="btn btn-success btn-lg">Update</button>
        </form>
    </div>
</div>
@endif







@endsection

{{-- <script>

    function testUpdate()

    {

        var id=document.getElementById("mySelect").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("editor").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", "{{ URL::to('test_details') }}/" + id, true);
        xhttp.send();

    }
</script> --}}
