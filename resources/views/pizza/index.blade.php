@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                    </ul>


                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <textarea class="form-control" name="description" id="" cols="10" rows="3"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Quantity</label>
                        <input type="number" class="form-control" placeholder="Small pizza">
                        <input type="number" class="form-control" placeholder="Medium pizza">
                        <input type="number" class="form-control" placeholder="Large pizza">
                    </div>
                    <div class="form-group">
                        <label for="name">Category of Pizza</label>
                        <select class="form-control">
                            <option value="Traditional">Traditional</option>
                            <option value="Vegeterian">Vegeterian</option>
                            <option value="Cheezy Crust">Cheezy Crust</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Nicaraguayan">Nicaraguayan</option>
                        </select>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
