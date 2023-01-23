<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row my-5">
                    <div class="col-4">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-8">
                        <form action="" method="">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="nama">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="subject">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="pesan" rows="3" placeholder="pesan"></textarea>
                            </div>
                            <button class="btn btn-success btn-sm text-end" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
