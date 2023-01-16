@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
    <div class="mt-5 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="card bg-white shadow-lg">
                <div class="card-body p-5">
                  <form class="mb-3 mt-md-4" id="form">
                    <h2 class="fw-bold mb-5 text-uppercase text-center">Send notification</h2>
                    <div class="mb-3">
                      <label for="title" class="form-label ">Title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Input titlle">
                    </div>
                    <div class="mb-3">
                      <label for="body" class="form-label ">Body</label>
                      <input type="text" class="form-control" name="body" id="body" placeholder="Input body">
                    </div>
                    <div class="d-grid">
                      <button class="btn mt-3 w-100 btn-primary" type="submit">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script>
        const form = document.getElementById('form')

        form.addEventListener('submit', function(e){
            e.preventDefault();

            var title = document.getElementById('title').value
            var body = document.getElementById('body').value

            fetch('https://fcm.googleapis.com/fcm/send',{
                method:"POST",
                headers:{
                    'Content-Type':'application/json',
                    'Authorization':'key=AAAA-AbMLjg:APA91bFf5fyADA8EaIMs5xPkxdd0AJxfk_0Yhr7ur5brSEctisTEpP9Kdq6bxqBbJ5hMx78mggcJeB5qEVS2v6t9QS9JKa2-HaMNzo0wYYqt-vJ0pqHtqOoBMzkRNp93Jq-WZ64CpBwb'
                },
                body: JSON.stringify({
                    "to":"dEkZUMLGTbumzwUOElj1Ao:APA91bGU5SJilIn3EIgQ7e1WPr_A3h4UXE3nzJewXGVStrZw9zsM1CRBdd7yQ-0X_KXugHCsS1asILk8qVWu8-N8HCGCJ6Yu8dt6IFUPdzIkox1NV4_31Wcfl9fro3WBTiFc5f6hu5JR",
                    "priority":"high",
                    "soundName":"default",
                    "notification": {
                        "title": title,
                        "body": body
                    }
                })
                
                // payload
            })
            .then(response => response.json())
            .then(response => console.log(JSON.stringify(response)))
            .then(data=>console.log(data))
            .catch(err=>console.log(err))
        })
    </script>
@endsection