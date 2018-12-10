@extends('layouts.template')

@section('maincontent')

<div class="page-title grey">
   <div class="container">
      <div class="title-area pull-left">
         <h2>Petcare Checkout <small>Please complete your reservation.</small></h2>
         <div class="bread">
            <ol class="breadcrumb">
               <li><a href="#">Home</a></li>
               <li class="active">Petcare</li>
            </ol>
         </div>
      </div>
      <div class="search pull-right">
         <form>
            <div class="input-group">
               <input class="form-control" name="s" type="search" placeholder=" Search... ">
               <span class="input-group-btn">
               <!-- <button  class="btn btn-primary"><i class="fa fa-search"></i></button> -->
               </span>
            </div>
         </form>
      </div>
   </div>
</div>
<section class="section white">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <form action="{{ url('/petcare-checkout/create') }}" method="post" class="shopform" enctype="multipart/form-data">
            @csrf
               <div class="row">
                  <div class="col-md-6">
                     <div class="widget-title">
                        <h4>Billing Details</h4>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <label>Name *</label>
                           <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                        <input type="hidden" name="id_mitra" id="id_mitra" class="form-control" placeholder="Name" value="{{$id}}">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <label>Address *</label>
                           <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Address">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <label>Phone Number *</label>
                           <input type="text" name="telpon" id="telpon" class="form-control" placeholder="Phone Number">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget-title">
                        <h4>Pet *</h4>
                     </div>                     
	              	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <label>Number of Pet *</label>
	                    <input type="number" name="jumlah_binatang" id="kindofpet" class="form-control" placeholder="Number of Pet">
                        @if (($id) == 1)
                            <input style="display: none;" name="jenis_binatang" value="Cat">
                        @elseif (($id) == 2)
                            <input style="display: none;" name="jenis_binatang" value="Dog">
                        @endif
                      
<!--                        <select multiple class="form-control select2" name="jenis_binatang[]">
                        <optgroup label="Select Kind of Pet" >
                          <option value="Bird">Bird</option>
                          <option value="Cat">Cat</option>
                          <option value="Dog">Dog</option>
                        </optgroup>
                      </select> -->
	                </div>
	              	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <label>Duration (Day) *</label>
	                    <input type="Number" name="lama_penitipan" id="duration" class="form-control" placeholder="Duration">

	                </div> 
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     	<label>Other Notes</label>
                     	<textarea rows="6" name="catatan" class="form-control"  placeholder="Add extra notes..."></textarea>
                  	 </div>

                  </div>
               </div>
               <!-- <button type="submit" class="btn btn-primary">Place an order</button> -->
                        <hr class="invis">
               <div class="table-responsive margin-top">
                  <table id="cart-table" class="table table-condensed">
                     <thead>
                        <tr>
                           <!-- <th>Action</th>  -->
                           <th>Image</th>
                           <th>Product</th>
                           <th>Price per Day</th>
                           <!-- <th>Quanity</th> -->
                           <!-- <th>Total</th> -->
                        </tr>
                     </thead>
                     <tbody>
                        @if (($id) == 1)
                           <tr>
                              <!-- <th class="product-remove">
                                 <a class="remove" title="Remove this product" href="#">×</a>
                              </th> -->
                               
                              <th>
                                 <div class="media">
                                    <div class="relative">
                                       <a href="shop-single.html" title="">
                                       <img src="{{ URL::asset('petvet/upload/xshop_05.jpg.pagespeed.ic.7zLQOUZl_L.jpg') }}" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </th>
                              <th>
                                 <a href="shop-single.html">Cat Cage - #000415</a>
                              </th>
                              <td>Rp. 25.000</td>
<!--                               <td>
                                 2
                              </td> -->
<!--                               <td>
                                 Rp. 50.000
                              </td> -->
                           </tr>
                        @elseif (($id)==2)
                           <tr>
                              <th class="product-remove">
                                 <a class="remove" title="Remove this product" href="#">×</a>
                              </th>
                              <th>
                                 <div class="media">
                                    <div class="relative">
                                       <a href="shop-single.html" title="">
                                       <img src="{{ URL::asset('petvet/upload/xshop_03.jpg.pagespeed.ic.IONcGIjklL.jpg') }}" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </th>
                              <th>
                                 <a href="shop-single.html">Small Dog-Cage - #0344</a>
                              </th>
                              <td>Rp. 50.000</td>
<!--                               <td>
                                 1
                              </td> -->
<!--                               <td>
                                 Rp. 50.000
                              </td> -->
                           </tr>
                        @endif
                     </tbody>
                  </table>
               </div>
               <br>
               <!--<div class="couponarea clearfix">
                  <form class="form-inline">
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Coupon code">
                     </div>
                     <button type="submit" class="btn btn-primary">Apply Coupon</button>
                     <button type="submit" class="pull-right btn btn-primary">Update Cart</button>
                  </form>
               </div> -->
<!--                <div class="totalarea margin-top row">

                  <div class="col-md-6">
                     <div class="totalprice">
                        <div class="widget-title">
                           <h4>Order Total</h4>
                        </div>
                        <p>Total : Rp. 100.000</p>
                     </div>
                  </div>
               </div> -->
<!--                <div class="totalarea margin-top row">
                  <form id="payment" class="clearfix">
                     <label class="checkbox payment-method inline">
                     <input type="checkbox" id="customCheck1" value="option1" class=""> Direct Bank Transfer
                     <span class="custom2">Make your payment directly into our bank account. Please use your Order ID as the payment reference. .</span>
                     <span class="custom2"> <strong> BCA 123456789 </strong> </span>
                     </label>
                     <label class="checkbox payment-method inline">
                     <input type="checkbox" id="customCheck2" value="option2"> Cheque Payment
                     </label>
                     <label class="checkbox payment-method inline">
                     <input type="checkbox" id="customCheck4" value="option2"> PayPal Payment
                     </label>
                     <label class="checkbox payment-method inline">
                     <input type="checkbox" id="customCheck3" value="option3"> Google Checkout
                     </label>
                     <a class="btn btn-primary pull-right" href="#">PLACE AN ORDER</a>
                  </form>
               </div> -->
               <div style="text-align: center;">
                  <button style="" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Place an order</button>
               </div>
               <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Syarat & Ketentuan</h4>
        </div>
        <div class="modal-body">
          <h6>Layanan Send Pet dan Pet Care</h6>
          <p>1. Hewan dalam keadaan sehat</p>
          <p>2. Hewan tidak kutuan atau sakit kulit (Kalau memang ada, bisa langsung diinfokan dari awal)</p>
          <p>3. Membawa buku vaksin (Pengecekan vaksin)</p>
          <p>4. Penitipan dihitung dari hari pertama hewan dititipkan</p>
          <p>5. Pelunasan terlebih dahulu saat hewan dititipkan</p>
          <p>6. Apabila hewan sakit saat di penitipan, kami akan konfirmasi sebelum kami bawa ke dokter hewan dan biaya menjadi tanggungan pemilik.</p>
          <p>7. Kami akan melakukan pengecekan buku vaksin dan kondisi hewan terlebih dahulu sebelum dititipkan.</p>
          <p>8. Hewan yang dititipkan bukan hewan buas dan dilindungi.</p>
          <h6>Setuju dengan syarat & ketentuan yang berlaku.</h6>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >Submit</button>
        </div>
      </div>
      
    </div>
  </div>
            </form>
         </div>
      </div>
   </div>
</section>

@endsection