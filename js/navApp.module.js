// navigation common to entire site
var app = angular.module('navApp', ['ngRoute', 'ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'partials/home.html',
            controller: 'pageController'
        })
        .when('/Home', {
            templateUrl: 'partials/home.html',
            controller: 'pageController'
        })
        .when('/Portfolio', {
            templateUrl: 'partials/portfolio.html',
            controller: 'pageController'
        })
        .when('/Notes', {
            templateUrl: 'partials/notes.html',
            controller: 'pageController'
        })
        .when('/Bio', {
            templateUrl: 'partials/bio.html',
            controller: 'pageController'
        })
        .when('/Contact', {
            templateUrl: 'partials/contact.html',
            controller: 'pageController'
        })
        .when('/Resume', {
            templateUrl: 'partials/resume.html',
            controller: 'pageController'
        })
        .when('/Holding', {
            templateUrl: 'partials/holdingpage.html',
            controller: 'pageController'
        })
        .otherwise({
            redirectTo: '/Home'
        })
});

app.controller('pageController', function ($scope) {
    $scope.message = "Welcome to Toby's pages";
    $scope.sayHello = 'pageController says, "Hello World."'
    console.log("Page Controller reporting for duty.");
});