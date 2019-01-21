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
        .when('/About', {
            templateUrl: 'partials/about.html',
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
        .when('/Progress', {
            templateUrl: 'partials/inprogresspage.html',
            controller: 'inprogressController'
        })
        .otherwise({
            redirectTo: '/Home'
        })
});