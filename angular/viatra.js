(function () {
	'use strict';
	var app = angular.module('viatra', []);
	app.controller('main', ['$rootScope', function ($rootScope) {
		
		$rootScope.$on('$includeContentLoaded', function() {
			$('.cloak').removeClass('cloak');
		});
		
		$rootScope.date = new Date();
		$rootScope.popupTooltip = false;

		$('.btn.read-more').on('click', function(){
			$('.highlight_banner .more').slideToggle('slow');
		});

		$('a[href*="#"]:not([href="#"])').click(function() {
			 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			   var target = $(this.hash);
			   target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			   if (target.length) {
				 $('html, body').animate({
				   scrollTop: target.offset().top
				 }, 1000);
				 return false;
			   }
			 }
		});
		 
	}]);

	app.controller('header', ['$rootScope', function ($rootScope) {	
		$('.menu-icon').on('click', function(){
			$('#menu_wrapper').slideToggle(300);
		});
	}]);

	app.controller('NewsCtrl', function($scope, $http, $sce) {
	  $http.get('angular/news.json')
		   .then(function(res){
			  $scope.news = res.data;
			  $scope.$sce = $sce;
			  //console.log($scope.news);
			});
	});



})();

