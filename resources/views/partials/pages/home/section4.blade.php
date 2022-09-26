<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<img src="{{ url('images/about/img-4.jpg') }}" alt="" class="img-fluid">
					<div class="emergency">
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+228 90010203</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Prenez rendez-vous</h2>
					<p class="mb-4">Nous mettons à votre disposition nos meilleurs gynécologues</p>
					     <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Selectionnez un Département</option>
                                  <option>salle de Travail</option>
                                  <option>Réanimation</option>
                                  <option>CPN</option>
                                  <option>Maternité</option>
                                  <option>Service des prématurés</option>
                                  <option>Suite des couches</option>
                                  <option>Planning Familial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect2">
                                  <option>Selectionnez un médecin </option>
                                  <option>Dr Danklou</option>
                                  <option>Dr Kili</option>
                                  <option>Dr Kombate</option>
                                  <option>Dr beauty</option>
                                  <option>Dr jean-philip</option>
                                  <option>Dr Anani</option>
                                  <option>Dr bruce</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Heure">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Votre Nom">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="N° Téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Votre Message"></textarea>
                    </div>

                    <a class="btn btn-main btn-round-full" href="{{ url('appoinment.html') }}" >Envoyer<i class="icofont-simple-right ml-2  "></i></a>
                </form>
            </div>
			</div>
		</div>
	</div>
</section>