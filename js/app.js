/*global angular*/

var app = angular.module("armitageTemplate", ["ngRoute"])
                .config(["$routeProvider", function ($routeProvider) {
                  $routeProvider
                    .when("/about-us",
                    {
                        templateUrl: "templates/about-us.html"
                    })
                    .when("/loan-origination",
                    {
                        templateUrl: "templates/loan-origination.html"
                    })
                    .when("/note-purchases",
                    {
                        templateUrl: "templates/note-purchases.html"
                    })
                    .when("/lender-services",
                    {
                        templateUrl: "templates/lender-services.html"
                    })
                    .when("/contact-us",
                    {
                        templateUrl: "templates/contact-us.html"
                    })
                    .otherwise({redirectTo: "/about-us"});
}]);