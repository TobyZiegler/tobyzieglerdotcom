app.controller('pageController', function ($scope) {
    $scope.showPiece = true;
    $scope.sayHello = 'pageController says, "Hello World."'
    $scope.shortName = "Toby's Pages"
    $scope.plusName = "Welcome to "
    $scope.test = "confirm page"
    console.log("Page Controller reporting for duty.");
});

// app.directive('collapse', function(collapsible) {
//     showPiece = collapsible;
//     $scope.showPiece = ! $scope.showPiece;
// });

app.controller('aboutController', function ($scope) {
    $scope.subpart = {
        id: "about",
        toggle: true,
        title: "About Me",
        clickmsg: "click each to "
    };
    $scope.test = "confirm about";
});

app.controller('portfolioController', function ($scope) {
    $scope.subpart = {
        id: "portfolio",
        toggle: true,
        title: "Portfolio",
        clickmsg: "click each to "
    };
    $scope.test = "confirm portfolio";
});

app.controller('resumeController', function ($scope) {
    $scope.subpart = {
        id: "resume",
        toggle: true,
        title: "Resume",
        clickmsg: "click each to "
    };
    $scope.test = "confirm resume";
});

app.controller('contactController', function ($scope) {
    $scope.subpart = {
        id: "contact",
        toggle: true,
        title: "Contact",
        clickmsg: "click here to "
    };
    $scope.test = "confirm contact";
});

app.controller('fadeController', function ($scope) {
    $scope.subpart = {
        id: "fade",
        toggle: true,
        title: "Fade",
        clickmsg: "click here to "
    };
    $scope.test = "confirm fade";
});

app.controller('locationController', function ($scope, $location) {
    $scope.$location = {};
    angular.forEach('protocol host port path search hash'.split(' '), function (method) {
        $scope.$location[method] = function () {
            var result = $location[method]();
            return angular.isObject(result) ? angular.toJson(result) : result;
        };
    });
});