<html lang="en" ng-app="demo">
<head>
  <meta charset="UTF-8">
  <title>Dock modal demo.</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rawgit.com/rguruprakash/angular-dockmodal/master/dockModal/dockModal.css">
</head>
<body ng-controller="demoCtrl">
  
  <script type="text/ng-template" id="_demoDock.html">
    <dock-modal>
      <dock-modal-header>
        <span class="flex"></span>
        <i class="fa dock-modal-icon" ng-class="{'fa-window-maximize': isMinimized, 'fa-window-minimize': !isMinimized}" aria-hidden="true" ng-click="toggle()"></i>
        <i class="fa fa-times dock-modal-icon" aria-hidden="true" ng-click="close()"></i>
      </dock-modal-header>
      <dock-modal-content>
        <h3> ID: @{{id}} </h3>
        <a href="javascript:void(0)" ng-click="restore()">Maximize</a><br/> 
        <a href="javascript:void(0)" ng-click="minimize()">Minimize</a><br/>
        <a href="javascript:void(0)" ng-click="close('data')">Close and Resolve</a><br/>
        <a href="javascript:void(0)" ng-click="close()">Close and Reject</a><br/>
      </dock-modal-content>
      <dock-modal-footer>
      </dock-modal-footer>
    </dock-modal>
  </script>
  
  <a href="javascript:void(0)" ng-click="openDockModal('One')">Open Dock Modal - One</a><br/>
  <a href="javascript:void(0)" ng-click="openDockModal('Two')">Open Dock Modal - Two</a><br/>
  <a href="javascript:void(0)" ng-click="openDockModal()">Open Dock Modal - Random ID</a>
  
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
  <script src="https://rawgit.com/rguruprakash/angular-dockmodal/master/demo/demo.js"></script>
  <script src="https://rawgit.com/rguruprakash/angular-dockmodal/master/dockModal/dockModal.js"></script>
</body>
</html>