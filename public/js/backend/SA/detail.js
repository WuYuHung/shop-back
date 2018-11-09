// Detail

// Chart Config
var CONFIG = {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: '營業額(元)',
            backgroundColor: "rgba(54, 162, 235, .7)",
            borderColor: "rgba(54, 162, 235, 1)",
            data: []
        }]
    },
    options: {
        title: {
            display: true,
            fontSize: 16,
            text: '總營業額    $ 0',
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: '日期'
                }
            }],
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                },
                scaleLabel: {
                    display: true,
                    labelString: '金額'
                }
            }]
        }
    }
};

// When Date-Range-Picker apply
var applyDRP = (e, picker) => {
    let labelString = '',
        getTime = '';
    let timeFormat = '';

    if (DATA.endDate.diff(DATA.startDate, 'years', true) > 1) {
        labelString = '年份';
        getTime = 'year';
        timeFormat = 'YY';
    } else if (DATA.endDate.diff(DATA.startDate, 'months', true) > 1) {
        labelString = '月份';
        getTime = 'month';
        timeFormat = 'MM';
    } else if (DATA.endDate.diff(DATA.startDate, 'days', true) > 1) {
        labelString = '日期';
        getTime = 'day';
        timeFormat = 'DD';
    } else {
        labelString = '時間';
        getTime = 'hour';
        timeFormat = 'HH';
    }

    let labels = [],
        start = DATA.startDate.clone(),
        end = DATA.endDate.clone();

    do {
        labels.push(start.format(timeFormat));
    } while (start.add(1, getTime + 's').diff(end, getTime + 's', true) <= 0);

    $.post({
        url: DATA.formUrl.sumDetail,
        data: DATA.ajaxData({ getTime: getTime }),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (allData) {
            let total = new Array(labels.length).fill(0);
            $.each(allData, (k, data) => {
                let key = labels.indexOf(data.purchase_date.substr(-2));
                if (key != -1) total[key] = parseFloat(data.total);
            });

            CONFIG.data.datasets = [{
                label: '營業額(元)',
                backgroundColor: "rgba(54, 162, 235, .7)",
                borderColor: "rgba(54, 162, 235, 1)",
                data: total
            }];

            CONFIG.options.title.text = '總營業額    $ ' + total.reduce((sum, price) => sum + price, 0);
            CONFIG.data.labels = labels;
            CONFIG.options.scales.xAxes[0].scaleLabel.labelString = labelString;
            CHART.update();

            ajaxTable();
        }
    });

    return false;
}

// Modal Event
$('.modal').on('hidden.bs.modal', (e) => {
    $('.modal .modal-body').empty();
});

// Table Event
var ajaxTable = (url = DATA.formUrl.orderList) => {
    $.post({
        url: url,
        data: DATA.ajaxData(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#data-list').html(data);
        }
    });
}
$('#data-list').on('click', '.pagination a', (e) => {
    e.preventDefault();

    let url = $(e.target).attr('href');
    ajaxTable(url);
}).on('click', '.table tbody tr', (e) => {
    $.post({
        url: DATA.formUrl.orderData,
        data: DATA.ajaxData({ orderID: $(e.target).parents('tr').attr('data-target') }),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('.modal-body').html(data);

            $('.modal').modal('show');
        }
    });
});

