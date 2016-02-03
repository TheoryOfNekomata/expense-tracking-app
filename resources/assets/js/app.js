(function () {
    var angular = require('angular');

    require('angular-filter');

    angular.module('app.components', []);

    angular
        .module('app', ['app.components', 'angular.filter'])
        .run(function () {

        });

    require('./components/expense-list');
})();
