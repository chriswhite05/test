var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', ['$scope', '$http',
  function ($scope, $http) {
    $http.get('phones.json').success(function(data) {
      $scope.phones = data.splice(0, 5);
    });

    $scope.orderProp = 'age';
  }]);