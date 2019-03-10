var app = angular.module("MyApplication", []);

app.controller("homeController", function ($scope) {
	$scope.myName = "VinodhRaja";
});

app.directive("navigationMenu", function () {
	var directive = {};
	directive.restrict = 'E';
	directive.template = '<div id="main-nav" class="collapse navbar-collapse"><ul class="nav navbar-nav" id="mainNav"><li class="active"><a href="#home" class="scroll-link">Home</a></li><li><a href="#aboutUs" class="scroll-link">About Us</a></li><li><a href="#skills" class="scroll-link">Skills</a></li><li><a href="#experience" class="scroll-link">Experience</a></li><li><a href="#portfolio" class="scroll-link">Portfolio</a></li><li><a href="#contactUs" class="scroll-link">Contact Me</a></li></ul></div>';
	return directive;

});
