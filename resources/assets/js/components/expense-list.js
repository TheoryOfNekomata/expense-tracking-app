(function () {
    var angular, moment;

    angular = require('angular');
    moment = require('moment');

    angular
        .module('app.components')
        .controller('ExpenseListCtrl', function () {
            var ctrl, items, addItem;

            ctrl = this;

            addItem = function (name, value) {
                var date = new Date();

                ctrl.models.items.push({
                    name: name,
                    value: value,
                    timestamp: date.getTime(),
                    timeDivision: moment(date).calendar(null, {
                        sameDay: '[Today], MMMM DD, YYYY',
                        nextDay: '[Tomorrow], MMMM DD, YYYY',
                        nextWeek: 'MMMM DD, YYYY',
                        lastDay: '[Yesterday], MMMM DD, YYYY',
                        lastWeek: '[Last] dddd, MMMM DD, YYYY',
                        sameElse: 'MMMM DD, YYYY'
                    })
                });

                ctrl.models.name = '';
                ctrl.models.value = 0;
            };

            items = [
                {
                    name: 'Expense Name',
                    value: 2000,
                    timestamp: 1454464832831
                },
                {
                    name: 'Expense Name',
                    value: 2000,
                    timestamp: 1454464832833
                },
                {
                    name: 'Expense Name',
                    value: 2000,
                    timestamp: 1454464832835
                },
                {
                    name: 'Expense Name',
                    value: 2000,
                    timestamp: 1454464832839
                },
                {
                    name: 'Expense Name',
                    value: 2000,
                    timestamp: 1454464832841
                }
            ];

            ctrl.models = {
                items: items.map(function (item) {
                    var date = new Date(item.timestamp);
                    item.timeDivision = moment(date).calendar(null, {
                        sameDay: '[Today], MMMM DD, YYYY',
                        nextDay: '[Tomorrow], MMMM DD, YYYY',
                        nextWeek: 'MMMM DD, YYYY',
                        lastDay: '[Yesterday], MMMM DD, YYYY',
                        lastWeek: '[Last] dddd, MMMM DD, YYYY',
                        sameElse: 'MMMM DD, YYYY'
                    });
                    return item;
                }),
                name: '',
                value: 0
            };

            ctrl.addSpending = function () {
                addItem(ctrl.models.name, -ctrl.models.value);
            };

            ctrl.addSaving = function () {
                addItem(ctrl.models.name, +ctrl.models.value);
            };

            ctrl.getTotal = function () {
                return ctrl.models.items.reduce(function (curr, next) {
                    return curr + next.value;
                }, 0);
            };
        });
})();
