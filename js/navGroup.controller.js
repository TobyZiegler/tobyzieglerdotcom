app.controller('pageController', function ($scope) {
    $scope.message = "Welcome to Toby's pages";
    $scope.sayHello = 'pageController says, "Hello World."'
    $scope.shortName = "Toby's Pages"
    $scope.plusName = "Welcome to "
    console.log("Page Controller reporting for duty.");
});

app.controller('inprogressController', function ($scope) {
    $scope.message01 = "Under construction since 1995.";
    $scope.message02 = "Rebuilt from scratch many times.";
    $scope.message03 = "Welcome to The Work in Progress.";
    $scope.sayHello = 'pageController says, "Hello World, inprogress."'
    console.log("Inprogress Controller reporting for duty.");
});

app.controller('aboutController', function ($scope) {
    $scope.subpart = {
        id : "about",
        toggle: true,
        title: "About Me",
        clickmsg: "click each to "
    };
        $scope.test = "confirm about";
});

app.controller('bioController', function ($scope) {
    $scope.subpart = {
        id : "bio",
        toggle: true,
        title: "Bio",
        clickmsg: "click each to "
    };
        $scope.test = "confirm bio";
});

app.controller('contactController', function ($scope) {
    $scope.subpart = {
        id : "contact",
        toggle: true,
        title: "Contact",
        clickmsg: "click here to "
    };
    $scope.test = "confirm contact";
});

app.controller('portfolioController', function ($scope) {
    $scope.subpart = {
        id : "portfolio",
        toggle: true,
        title: "Portfolio",
        clickmsg: "click each to "
    };
    $scope.test = "confirm portfolio";
});

app.controller('resumeController', function ($scope) {
    $scope.subpart = {
        id : "resume",
        toggle: true,
        title: "Resume",
        clickmsg: "click each to "
    };
    $scope.test = "confirm resume";
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