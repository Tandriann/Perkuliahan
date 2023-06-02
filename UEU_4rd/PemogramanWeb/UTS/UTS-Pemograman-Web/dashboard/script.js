const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
// const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');
const switchMode = document.getElementById('switch-mode');

let countInterval = null;
let countIntervalChart = null;
var pauseIndicator = 0;

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

// menuBar.addEventListener('click', function () {
	// sidebar.classList.toggle('hide');
// });

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
});

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
});

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
});

class App{
	constructor(){
		//
	}

	AppSetCountInterval = () => {
		countInterval = setTimeout(() => {
			this.AppLoadPages("COUNT");
			this.AppSetCountInterval();
		}, 10000);
	}

	AppClearCountInterval = () => {
		clearInterval(countInterval);
		countInterval = null;
	}

	AppStartChart = () => {
		clearInterval(countIntervalChart);
		countIntervalChart = null;
		setChart();
	}	

	AppClearChart = () => {
		clearInterval(countIntervalChart);
		countIntervalChart = null;
	}	

	AppLoadPages = (action) => {		
		if(action == "DASHBOARD"){
			let data = {
				title: "Dashboard",
				action: action
			};
			ajaxCallApp("pages/dashboard.php", "GET", data);
		}else if(action == "GENERAL_REPORT"){
			let data = {
				title: "General Report",
				action: action
			};
			ajaxCallApp("pages/general-report.php", "GET", data);
		}else if(action == "SERVICE_MONITORING"){
			let data = {
				title: "Service Monitoring",
				action: action
			};
			ajaxCallApp("pages/service-monitoring.php", "GET", data);
		}else if(action == "PARTNER"){
			let data = {
				title: "Partner",
				action: action
			};
			ajaxCallApp("pages/partner.php", "GET", data);
		}else if(action == "USER"){
			let data = {
				title: "User",
				action: action
			};
			ajaxCallApp("pages/user.php", "GET", data);
		}else if(action == "MERCHANT"){
			let data = {
				title: "Merchant",
				action: action
			};
			ajaxCallApp("pages/merchant.php", "GET", data);
		}else if(action == "BRANCH"){
			let data = {
				title: "Branch",
				action: action
			};
			ajaxCallApp("pages/branch.php", "GET", data);
		}else if(action == "ADMIN"){
			let data = {
				title: "Admin",
				action: action
			};
			ajaxCallApp("pages/admin.php", "GET", data);
		}else if(action == "FINANCE"){
			let data = {
				title: "Finance",
				action: action
			};
			ajaxCallApp("pages/finance.php", "GET", data);
		}else if(action == "BACKUP_RESTORE"){
			let data = {
				title: "Backup Restore",
				action: action
			};
			ajaxCallApp("pages/backup-restore.php", "GET", data);
		}else if(action == "COMPANY_SETTING"){
			let data = {
				title: "Company Setting",
				action: action
			};
			ajaxCallApp("pages/company-setting.php", "GET", data);
		}else if(action == "SYSTEM_SETTING"){
			let data = {
				title: "System Setting",
				action: action
			};
			ajaxCallApp("pages/system-setting.php", "GET", data);
		}else if(action == "LOGOUT"){

		}else if(action == "COUNT"){
			let data = {
				action: "COUNT"
			};
			// ajaxCallApp("system/countdata.php", "POST", data);
		}
	}

	AppPrepareStart = () => {
		$("#btn-dashboard").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("DASHBOARD");
		});
		$("#btn-general-report").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("GENERAL_REPORT");
		});
		$("#btn-service-monitoring").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("SERVICE_MONITORING");
		});
		$("#btn-partner").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("PARTNER");
		});
		$("#btn-user").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("USER");
		});
		$("#btn-merchant").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("MERCHANT");
		});
		$("#btn-branch").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("BRANCH");
		});
		$("#btn-admin").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("ADMIN");
		});
		$("#btn-finance").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("FINANCE");
		});
		$("#btn-backup-restore").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("BACKUP_RESTORE");
		});
		$("#btn-company-setting").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("COMPANY_SETTING");
		});
		$("#btn-system-setting").click((e) => {
			e.stopImmediatePropagation();
			e.preventDefault();
			this.AppLoadPages("SYSTEM_SETTING");
		});

		this.AppSetCountInterval();
		this.AppLoadPages("COUNT");
		this.AppLoadPages("DASHBOARD");
	}

	Call = () => {
		this.AppPrepareStart();
	}
}

const setChart = () => {
	var RealTimeData = function(layers, ranges, bounds) {
        this.layers = layers;
        this.bounds = bounds || [];
        this.ranges = ranges || [];
        this.timestamp = ((new Date()).getTime() / 1000)|0;
    };

    RealTimeData.prototype.rand = function(bound) {
        bound = bound || 1000000;
        return parseInt(Math.random() * bound) + 60;
    };

    RealTimeData.prototype.history = function(entries) {
        if (typeof(entries) != 'number' || !entries) {
            entries = 1;
        }

        var history = [];
        for (var k = 0; k < this.layers; k++) {
            var config = { values: [] };
            if(this.ranges[k]) {
                config.range = this.ranges[k];
            console.log(config);
            }

            history.push(config);
        }

        for (var i = 0; i < entries; i++) {
            for (var j = 0; j < this.layers; j++) {
                history[j].values.push({time: this.timestamp, y: this.rand(this.bounds[j])});
            }
            this.timestamp++;
        }

        return history;
    };

    RealTimeData.prototype.next = function() {
        var entry = [];
        for (var i = 0; i < this.layers; i++) {
            entry.push({ time: this.timestamp, y: this.rand(this.bounds[i]) });
        }
        this.timestamp++;
        return entry;
    }

    window.RealTimeData = RealTimeData;
	
	var data = new RealTimeData(2);

    var chart = $('#realtime-transaction').epoch({
        type: 'time.line',
        data: data.history(),
        axes: ['left', 'bottom', 'right']
    });

    countIntervalChart = setInterval(() => {
		chart.push(data.next()); 
		// console.log(data.history());
	}, 1000);
    chart.push(data.next());
};

var ajaxCallApp = (url, method, data) => {
	$.ajax({
		url		: url,
		type	: method,
		cache	: false,
		data	: data,
		error	: () => {},
		success	: (callback) => {
			$("#main-page").html("");
			if(data.action == "COUNT"){
				let val = callback.split("|");
				$("#count-total-mitra").text(val[0]);
				$("#count-mitra-aktif").text(val[1]);
				$("#count-total-pengguna").text(val[2]);
				$("#count-pengguna-aktif").text(val[3]);
				$("#count-total-order").text(val[4]);
				$("#count-order-berhasil").text(val[5]);
				$("#count-order-berjalan").text(val[6]);
				$("#count-order-batal").text(val[7]);
			}else if(data.action == "DASHBOARD"){
				$("#main-page").html(callback);
				setChart();
			}else if(data.action == "GENERAL_REPORT"){
				$("#main-page").html(callback);
			}else if(data.action == "SERVICE_MONITORING"){
				$("#main-page").html(callback);
			}else if(data.action == "PARTNER"){
				$("#main-page").html(callback);
			}else if(data.action == "USER"){
				$("#main-page").html(callback);
			}else if(data.action == "MERCHANT"){
				$("#main-page").html(callback);
			}else if(data.action == "BRANCH"){
				$("#main-page").html(callback);
			}else if(data.action == "ADMIN"){
				$("#main-page").html(callback);
			}else if(data.action == "FINANCE"){
				$("#main-page").html(callback);
			}else if(data.action == "BACKUP_RESTORE"){
				$("#main-page").html(callback);
			}else if(data.action == "COMPANY_SETTING"){
				$("#main-page").html(callback);
			}else if(data.action == "SYSTEM_SETTING"){
				$("#main-page").html(callback);
			}
		},
		timeout: 15000
	});
};

new App().Call();