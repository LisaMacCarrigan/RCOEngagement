@extends('layouts/main')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-block">
          <h2 class="card-title">Philadelphia Neighborhood Development</h2>

          <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
          <a routerLink="/faq" class="btn btn-secondary" role="button">Learn More</a>

          <form class="mt-5">
            <h2 class="card-title"><i class="fa fa-search mr-2" aria-hidden="true"></i>Search For RCO's</h2>
            <div class="form-group input-group-lg">
              <input class="form-control" type="text" id="inputAddress" placeholder="Enter street address">
              <small id="inputAddressHelp" class="form-text text-muted">Example: 1401 John F Kennedy Blvd</small>
              <button class="btn search btn-outline-success btn-lg" type="submit">Search</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
