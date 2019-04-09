// navigation common to entire site
var app = angular.module('navApp', ['ngRoute', 'ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/homeapp/home/home.html',
            controller: 'pageController'
        })
        .when('/Home', {
            templateUrl: '/homeapp/home/home.html',
            controller: 'pageController'
        })
        .when('/Portfolio', {
            templateUrl: '/homeapp/portfolio/portfolio.html',
            controller: 'pageController'
        })
        .when('/About', {
            templateUrl: '/homeapp/about/about.html',
            controller: 'pageController'
        })
        .when('/Bio', {
            templateUrl: '/homeapp/bio/bio.html',
            controller: 'pageController'
        })
        .when('/Contact', {
            templateUrl: '/homeapp/contact/contact.html',
            controller: 'pageController'
        })
        .when('/Resume', {
            templateUrl: '/homeapp/contact/resume.html',
            controller: 'pageController'
        })
        .when('/Progress', {
            templateUrl: '/homeapp/underconstruction/inprogresspage.html',
            controller: 'inprogressController'
        })
        .otherwise({
            redirectTo: '/Home'
        })
});

app.directive('titlebar', function() {
    return {
      templateUrl: '/homeapp/home/titlebar.home.html' 
    };
  });

app.directive('aboutpage', function() {
    return {
      templateUrl: '/homeapp/about/about.html' 
    };
  });

  app.directive('portfoliopage', function() {
    return {
      templateUrl: '/homeapp/portfolio/portfolio.html' 
    };
  });

  app.directive('resumepage', function() {
    return {
      templateUrl: '/homeapp/resume/resume.html' 
    };
  });

  app.directive('contactpage', function() {
    return {
      templateUrl: '/homeapp/contact/contact.html' 
    };
  });

// $scope.onClick=function(index,row){
//     $scope.div_[index+'_'+row]=true;

//     $scope.toggle = function() {
//         $scope.collapsible = ! $scope.collapsible;
//     };
//     // Default the blocks to be visible.
//     $scope.isVisible = true;
