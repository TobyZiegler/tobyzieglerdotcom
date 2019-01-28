$(document).ready(function () {
    setTimeout(function () { $('.messages.status').fadeOut(); }, 15000);
    $(window).click(function () { $('.messages.status').fadeOut(); });
});

var mainApp = angular.module("mainApp", []);
	    mainApp.controller('myController', function($scope, $timeout) {
	      	$scope.myText = "This is for example";
	      	$scope.isCheck = false;


	      	$timeout(function () { $scope.isCheck = true; }, 4000);
	    });