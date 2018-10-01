var siteModule = angular.module('siteModule', []);

siteModule.controller('SiteController', function($scope, $http) {
    $scope.sayHello = "Hello World";
})

// navigation common to entire site
// var app = angular.module('navApp', ['ngRoute', 'ngAnimate']);

// app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
//     $routeProvider
//         .when("", { templateUrl: "partials/home.html", controller: "PageController", controllerAS: "page" })
//         .when("/portfolio", { templateUrl: "partials/portfolio.html", controller: "PageController", controllerAS: "page" })
//         .when("/notes", { templateUrl: "partials/notes.html", controller: "PageController", controllerAS: "page" })
//         .when("/bio", { templateUrl: "partials/bio.html", controller: "PageController", controllerAS: "page" })
//         .when("/contact", { templateUrl: "partials/contact.html", controller: "PageController", controllerAS: "page" })
//         .otherwise("/404", { templateUrl: "partials/404.html", controller: "PageController", controllerAS: "page" });

//     $locationProvider.html5Mode(true);
// }]);

// app.controller('PageController', ['$routeParams', function PageController($routeParams, $scope, $location, $http) {
//     console.log("Page Controller reporting for duty.");
//     $scope.testvariable = "functional";
// }]);

