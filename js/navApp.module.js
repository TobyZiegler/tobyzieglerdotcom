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

app.controller('pageController', function ($scope) {
    $scope.message = "Welcome to Toby's pages";
    $scope.sayHello = 'pageController says, "Hello World."'
    console.log("Page Controller reporting for duty.");
});

app.controller('inprogressController', function ($scope) {
    $scope.message01 = "Under construction since 1995.";
    $scope.message02 = "Rebuilt from scratch many times.";
    $scope.message03 = "Welcome to The Work in Progress.";
    $scope.sayHello = 'pageController says, "Hello World, inprogress."'
    console.log("Inprogress Controller reporting for duty.");
});

app.controller('LocationController', function ($scope, $location) {
    $scope.$location = {};
    angular.forEach('protocol host port path search hash'.split(' '), function (method) {
        $scope.$location[method] = function () {
            var result = $location[method]();
            return angular.isObject(result) ? angular.toJson(result) : result;
        };
    });
});