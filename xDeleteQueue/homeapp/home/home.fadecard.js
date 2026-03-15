$(document).ready(function () {
    setTimeout(function () { $('.messages.status').fadeOut(); }, 15000);
    $(window).click(function () { $('.messages.status').fadeOut(); });
});

var fadeApp = angular.module("fadeApp", []);
	    fadeApp.controller('fadeController', function($scope, $timeout) {
			$scope.isCheck = false;
			$scope.testFadeMessage = 'fade is working';
	      	$timeout(function () { $scope.isCheck = true; }, 4000);
	    });