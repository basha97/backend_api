
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      
    </header>

    <!-- Begin page content -->
    <div class="container" ng-app="createOrder" ng-controller="createOrderCtrl"> 
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" ng-model="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" ng-model="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" ng-model="password" class="form-control" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" ng-click="saveData()" class="btn btn-primary">Submit</button>
        </form>
        <div class="well">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $demo)
                <tr>
                    <td>{{ $demo->id }}</td>
                    <td>{{ $demo->name }}</td>
                    <td>{{ $demo->email }}</td>
                    <td>{{ $demo->password }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
        var app = angular.module('createOrder', []);
        app.controller('createOrderCtrl', function($scope,$http,$timeout) {
            $scope.name = "";
            $scope.email = "";
            $scope.password = "";

            $scope.saveData = function(){
                $http.post('saveData',{
                    'name' : $scope.name,
                    'email' : $scope.email,
                    'password' : $scope.password
                }).then(function(res){
                    console.log(res);
                },function(error){
                    console.log(error);
                })
            }
        });
    </script>
  </body>
</html>
