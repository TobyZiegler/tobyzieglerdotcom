app.controller('pageController', function ($scope) {
    $scope.showPiece = true;
    $scope.sayHello = 'pageController says, "Hello World."'
    $scope.shortName = "Toby's Pages"
    $scope.plusName = "Welcome to "
    console.log("Page Controller reporting for duty.");
});

// app.directive('collapse', function(collapsible) {
//     showPiece = collapsible;
//     $scope.showPiece = ! $scope.showPiece;
// });

app.controller('aboutController', function ($scope) {
    $scope.subpart = {
        id : "about",
        toggle: true,
        title: "About Me",
        clickmsg: "click each to "
    };
        $scope.test = "confirm about";
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

app.controller('contactController', function ($scope) {
    $scope.subpart = {
        id : "contact",
        toggle: true,
        title: "Contact",
        clickmsg: "click here to "
    };
    $scope.test = "confirm contact";
});