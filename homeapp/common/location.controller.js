app.controller('LocationController', function ($scope, $location) {
    $scope.$location = {};
    angular.forEach('protocol host port path search hash'.split(' '), function (method) {
        $scope.$location[method] = function () {
            var result = $location[method]();
            return angular.isObject(result) ? angular.toJson(result) : result;
        };
    });
});