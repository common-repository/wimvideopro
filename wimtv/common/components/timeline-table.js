angular.module('wimtvApp').component('timelineTable', {
	templateUrl: wimtv_plugin_path + '/common/components/timeline-table.html',
	bindings: {
		items: '='
	},
	controllerAs: 'vm',
	controller: ['$scope', function($scope){
		var vm = this;
		vm.recalcTable = recalcTable;
		init();

		function recalcTable() {
			// orderItems();
			$scope.$evalAsync();
		}
		
		function init() {
		}


		function orderItems() {
			var map = {};
			for (var k in vm.items) {
				if(vm.items.hasOwnProperty(k)) {
					var item = vm.items[k];
					var time = item.start.getTime();
					while(map[time]) {
						time++;
					}
					map[time] = item;
				}
			}
			// 1b. get the array
			var keys = Object.keys(map);
			// 1c. order it
			keys.sort();
			var newMap = {};
			for (var i = 0; i < keys.length; i++) {
				var key = keys[i];
				newMap[map[key].id] = map[key];
			}

			vm.items = newMap;
		}

	}]

});