<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10 col-md-9">
            <div class="shadow py-3 bg-white rounded">
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-3 col-md-5 text-center my-3">
                        <i class="fas fa-phone-alt mb-3"></i>
                        <h4>Phone</h4>
                        <div class="text-muted">
                            +62 0812345679
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 text-center my-3">
                        <i class="fas fa-map-marker-alt mb-3"></i>
                        <h4>Address</h4>
                        <div class="text-muted">
                            JL. Trunojoyo 230 Pasuruan
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 text-center my-3">
                        <i class="fas fa-clock mb-3"></i>
                        <h4>Open Time</h4>
                        <div class="text-muted">
                            24 Hours
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 text-center my-3">
                        <i class="fas fa-envelope mb-3"></i>
                        <h4>Email</h4>
                        <div class="text-muted">
                            e-toko@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10 col-md-9">
            <div class="shadow bg-white rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.281820532224!2d112.91566111403526!3d-7.652815977836047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c6059a34ea01%3A0x8b54a7f0852b0106!2sJl.%20Trunojoyo%2C%20Kec.%20Bugulkidul%2C%20Kota%20Pasuruan%2C%20Jawa%20Timur%2067129!5e0!3m2!1sid!2sid!4v1637640414298!5m2!1sid!2sid"
                    class="w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <div class="shadow bg-white p-3 text-center rounded">
                <div class="alert alert-success alert-dismissible fade show d-none alert-kirim" role="alert">
                    <strong>Thank you!</strong> Your message has been sent.
                </div>
                <h3>Kirim Pesan pada kami</h3>
                <div class="my-5">
                    <form name="submit-to-google-sheet">
                        <div class="row justify-content-between mb-3">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email Anda">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message"
                                    placeholder="Masukkan pesan Anda"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block kirim">Kirim</button>
                                <button class="btn btn-primary btn-block loading d-none" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.component.contact-form')