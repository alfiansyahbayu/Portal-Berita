<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Detail Withdraw</title>
     @include ('layouts.navbar-menu')
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
     <script type="text/javascript"
       src="https://app.sandbox.midtrans.com/snap/snap.js"
       data-client-key="{{config('midtrans.client_key')}}"></script>
     <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="text-center">
                        <h1 class="h4 subhead text-blue-100 mb-3" >Detail Withdraw</h1>
                    </div>

                    <div>
                        <h1 class="h4 subhead  mb-3" >Kode Request : {{$details->kode_request}}</h1>
                    </div>

                    <form class="user" action='/detail-withdraw' method='POST'>
                        @csrf
                       
                        <input type="hidden" name="withdraw_id" value="{{ $details->id }}">

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nama Pemilik Kartu</h6>
                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name='name' readonly placeholder="Masukkan nama Anda" value="{{$details->nama_pemilik_kartu}}"  autocomplete="name" autofocus>
                            @error('name')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nomor Rekening</h6>
                            <input type="text" class="form-control form-control-user @error('no_rek') is-invalid @enderror" id="no_rek" readonly name="no_rek" value="{{$details->no_rekening}}" placeholder="Masukkan nomor rekening anda"  autocomplete="no_rek">
                            @error('no_rek')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Negara</h6>
                            <input type="text" class="form-control form-control-user @error('negara') is-invalid @enderror" readonly id="negara" negara='negara' placeholder="Masukkan nama negara Anda" value="{{$details->negara}}"  autocomplete="negara" autofocus>
                            @error('negara')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                            <input type="text" class="form-control form-control-user @error('nominal') is-invalid @enderror" readonly id="nominal" nominal='nominal' placeholder="Masukkan nominal" value="{{$details->nominal}}"  autocomplete="nominal" autofocus>
                            @error('nominal')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Tanggal Pengajuan</h6>
                            <input type="text" class="form-control form-control-user @error('tanggal-pengajuan') is-invalid @enderror"   id="tanggal-pengajuan" name='tanggal-pengajuan' value="{{$details->created_at}}" placeholder="Masukkan tanggal-pengajuan"  autocomplete="tanggal-pengajuan" autofocus readonly>
                            @error('tanggal-pengajuan')
                            <div class="error">
                                <p style="font-size: 13px;color: red;"> {{$message}} </p>
                            </div>
                            @enderror
                        </div>

                        <div class="">

                            <button class="btn btn-login btn-user btn-regist9" type="submit">
                                Selesai
                            </button>
                            
                            </div>
                    </form>
                    <button class="btn btn-login btn-user btn-regist10" id="pay-button">
                        Proses
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    </div>

</body>

@include ('layouts.footer-menu')
@include ('layouts.script')
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
          
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>

</html>
