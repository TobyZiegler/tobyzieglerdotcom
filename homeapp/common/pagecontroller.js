app.controller('pageController', function ($scope) {
    $scope.message = "Welcome to Toby's pages";
    $scope.sayHello = 'pageController says, "Hello World."'
    $scope.shortName = "Toby's Pages"
    $scope.plusName = "Welcome to "
    console.log("Page Controller reporting for duty.");
});