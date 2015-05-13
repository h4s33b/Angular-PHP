/*Main Controller*/

/*Module Start*/
var app = angular.module('myApp', []);
/*Module End*/

/*Controller Start*/
app.controller('customersCtrl', function($scope, $http) {
    /*Using http Service for data request and getting its response back*/
    $http.get("customers_mysql.php") 
    .success(function (response) {$scope.names = response.records})
    .error(console.log("error"));
});

/*Controller End*/
