@include('header')
<form action="/create" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product name"
      name="name">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Price</label>
      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter price" name="price">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Detail</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter more details" name="info">
      </div><br>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>