<div class="section">
<div class="container">
    <div class="section-title">
        <h2>Our<span class="kylin-title"> SERVICES</span></h2>
        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
    </div>
    <div class="row ">
        @for($i=0;$i<6;$i++)
        <div class="col-md-6 col-lg-4 features">
            <div class="card">
                <div class="card-body text-center">
                    <div class="feature">
                        <div class="fea-icon mb-3">
                            <img src="{{ asset('images/icons/icons0'.($i%5+1).'.png') }}" class="img-responsive" alt="icon">
                        </div>
                        <h3>Provide Free Ads</h3>
                        <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        </div>
    </div>
</div>
</div>
