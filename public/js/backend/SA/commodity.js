// Commodity

// Chart Config
var CONFIG = {
    type: 'pie',
    data: {
        labels: [],
        datasets: [{
            label: '營業額(元)',
            backgroundColor: ['#3e95cd', '#8e5ea2', '#3cba9f', '#e8c3b9', '#c45850'],
            data: []
        }]
    },
    options: {
        title: {
            display: true,
            fontSize: 16,
            text: '熱門排行',
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        }
    }
};

// When Date-Range-Picker apply
var applyDRP = (e, picker) => {
    $.post({
        url: DATA.formUrl.dietQuantity,
        data: DATA.ajaxData(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (allData) {
            let labels = [],
                data = [],
                colors = ['#3e95cd', '#8e5ea2', '#3cba9f', '#e8c3b9', '#c45850'];
            $.each(allData, (key, d) => {
                labels.push(d.diet);
                data.push(d.total);
            });

            // Shuffle color array
            for (let i = colors.length - 1; i > 0; i--) {
                let j = Math.floor(Math.random() * (i + 1));

                [colors[i], colors[j]] = [colors[j], colors[i]];
            }

            CONFIG.data.datasets = [{
                label: '營業額(元)',
                backgroundColor: colors,
                data: data
            }];

            CONFIG.options.title.text = '熱門餐點排行';
            CONFIG.data.labels = labels;
            CHART.update();
        },
        error: function (log) {
            console.log(log)
        }
    });

    return false;
}
