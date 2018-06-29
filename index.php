<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet"  href="style.css">
	
</head>
<body>
	<div class="container" id="phot">
		<div class="row" v-if="logs.length !== 0">
			<div class="col-sm-12">
				<ul class="list-group">
					<li v-for="log of logs" class="list-group-item list-group-item-success mt-2 Approved" >{{ log.text }} {{ log.date | date }}</li>
				</ul>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-5">
				<h2>Nissan Qashqai</h2>
				<div class="row">
					<div class="col-sm-9">
						<img :src="photo.imag" class="rounded car-img m mb-3">
						<button class="btn btn-outline-info btn-block btn-lg " @click="ModalVisibility = true">Заказать сейчас</button>
					</div>
					<div class="col-sm-3">
						<div 
						v-for="(photo, index) of photos" 
						v-on:click="SelectPhoto(index)" 
						:class="{'active': selectPhotoIndex === index}">
							<img :src="photo.imag" class="slider mt-1" >
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7 pt-3">
				<h5>Car Details</h5>
				<button class="btn btn-secondary" v-on:click="DCar = true, TCar = false"> Описание</button>
				<button class="btn btn-secondary" v-on:click="TCar = true, DCar = false"> Тех. Характеристики</button>
				<hr>
				<p v-if="DCar">Небольшое описание</p>
					<p v-if="TCar">Тех. характеристики</p>
			</div>
		</div>
		<!-- Модальное окно-->
		<div class="modal fade show" v-if="ModalVisibility"  tabindex="-1" role="dialog">
 		 	<div class="modal-dialog" role="document">
    			<div class="modal-content">
		      		<div class="modal-header">
		       			<h5 class="modal-title">Заказать</h5>
		       			<button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="ModalVisibility = false">
		          		<span aria-hidden="true">&times;</span>
		        		</button>
		     		</div>
		      		<div class="modal-body">
		        		<p><?php require('form.php');?></p>
		      		</div>
    			</div>
  			</div>
		</div>
		<div class="modal-backdrop fade show" v-if="ModalVisibility"></div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="js/index.js"></script>
</body>
</html>
				<!--<?php
					//require('form.php');
				?>