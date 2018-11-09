// Statistics Main JS file

var CHART = '';
var DATA = {
    page: $('input[name="page"]').val() || 'detail',
    formUrl: {},

    startDate: $('input[name="startDate"]').val() ? moment($('input[name="startDate"]').val()) : moment().startOf('week'),
    endDate: $('input[name="endDate"]').val() ? moment($('input[name="endDate"]').val()) : moment().endOf('week'),
    storeIDs: JSON.parse($('input[name="storeIDs"]').val()),

    ajaxData: (anotherData = {}) => {
        let data = {
            storeIDs: DATA.storeIDs,
            dateStart: DATA.startDate.format('YYYY-MM-DD HH:mm'),
            dateEnd: DATA.endDate.format('YYYY-MM-DD HH:mm')
        };

        return $.extend(data, anotherData);
    }
}

$('input[name="DRPicker"]').daterangepicker({
    timePicker: true,
    opens: "right",
    startDate: DATA.startDate,
    endDate: DATA.endDate,
    autoApply: true,
    ranges: {
        "本日": [moment().startOf('day'), moment().endOf('day')],
        "本週": [moment().startOf('week'), moment().endOf('week')],
        "本月": [moment().startOf('month'), moment().endOf('month')]
    },
    locale: {
        format: "YYYY-MM-DD HH:mm",
        applyLabel: "確定",
        cancelLabel: "取消",
        customRangeLabel: "自訂日期區間",
        daysOfWeek: ["日", "一", "二", "三", "四", "五", "六"],
        monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"]
    }
}, (startDate, endDate) => {
    DATA.startDate = startDate;
    DATA.endDate = endDate;

    let url = $('input[name="SAurl"]').val() + '/' + DATA.page + '/' + DATA.startDate.format('YYYY-MM-DD HH:mm') + '/' + DATA.endDate.format('YYYY-MM-DD HH:mm');

    window.history.pushState("", "", url);
});

$('input[name="DRPicker"] + div.btn-group .dropdown-menu > a.dropdown-item').on('click', (e) => {
    e.preventDefault();

    location.replace($(e.target).attr('href') + '/' + DATA.startDate.format('YYYY-MM-DD HH:mm') + '/' + DATA.endDate.format('YYYY-MM-DD HH:mm'));
});

$(document).ready(() => {
    $('input[name^="formUrl-"]').each((key, element) => {
        let e = $(element);

        DATA.formUrl[e.attr('name').substr(8)] = e.val();
    });

    $('input[name="DRPicker"]').on('apply.daterangepicker', applyDRP);

    // Start
    CHART = new Chart($('#chart'), CONFIG);
    $('input[name="DRPicker"]').trigger('apply.daterangepicker', {
        startDate: DATA.startDate,
        endDate: DATA.endDate
    });
});
