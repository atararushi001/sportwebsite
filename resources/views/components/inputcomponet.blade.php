<div class="col-md-6">
    <div class="checkout-form-list">
    <label for="{{$name}}"> {{$label}} </label>
    <input type="{{$type}}"placeholder="Enter {{$name}}"  id="{{$name}}" name="{{$name}}" value="@if(old($name) == ""){{$value}}@endif" class="form-control">
    @error($name)
    <p  class="error">{{ $message }}</p> 
     @enderror
</div>
</div>