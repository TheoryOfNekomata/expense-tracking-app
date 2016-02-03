@extends('web')

@section('content')
  <div class="container" id="app__expenses">
    <div data-ng-controller="ExpenseListCtrl as expenses">
      <form name="expensesForm">
        <ul class="list-group expenses__list">
          <li class="list-group-item list__input">
            <div class="row">
              <div class="col-xs-4 col-sm-7 col-lg-7">
                <input type="text" required data-ng-model="expenses.models.name" placeholder="Description" class="form-control" />
              </div>
              <div class="col-xs-3 col-sm-2 col-lg-2 text-right">
                <input type="number" required data-ng-model="expenses.models.value" placeholder="Amount" value="0.00" step="any" class="form-control" />
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-3 text-right">
                <div class="btn-group btn-group-justified">
                  <div class="btn-group"><button type="submit" data-ng-click="expenses.addSpending()" class="btn btn-danger">Spend</button></div>
                  <div class="btn-group"><button type="submit" data-ng-click="expenses.addSaving()" class="btn btn-success">Save</button></div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item" data-ng-repeat-start="(timeDivision, items) in expenses.models.items | orderBy: 'timestamp' | groupBy: 'timeDivision'">
            <div class="row">
              <div class="col-xs-12" data-ng-bind="timeDivision"></div>
            </div>
          </li>
          <li class="list-group-item" data-ng-repeat-end data-ng-repeat="item in items" data-ng-cloak>
            <div class="row">
              <div class="col-xs-5 col-sm-8 col-lg-9">
                <strong data-ng-bind="item.name"></strong>
              </div>
              <div class="col-xs-4 col-sm-2 col-lg-2 text-right">
                <span data-ng-class="{ 'text-success': item.value > 0, 'text-danger': item.value < 0}">
                  <span data-ng-bind="(item.value > 0 ? '+' : (item.value < 0 ? '-' : ''))"></span>
                  <span data-ng-bind="(item.value > 0 ? item.value : (item.value * -1)) | number: 2"></span>
                </span>
              </div>
              <div class="col-xs-3 col-sm-2 col-lg-1">
                <button type="button" class="btn btn-block btn-default" data-ng-click="expenses.remove($index)">Delete</button>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="row">
              <div class="col-xs-5 col-sm-8 col-lg-9">
                <strong>Expense Name</strong>
              </div>
              <div class="col-xs-4 col-sm-2 col-lg-2 text-right">
                <span data-ng-class="{ 'text-info': expenses.getTotal().value > 0, 'text-danger': item.value <= 0 }">
                  <span data-ng-bind="expenses.getTotal() < 0 ? '-' : ''"></span>
                  <span data-ng-bind="expenses.getTotal() | number: 2"></span>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </form>
    </div>
  </div>
@stop
