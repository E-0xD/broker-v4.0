var colors = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
    dataColors = $("#revenue-chart").data("colors"),
    options1 = {
        chart: { type: "area", height: 50, sparkline: { enabled: !0 } },
        series: [{ data: [25, 28, 32, 38, 43, 55, 60, 48, 42, 51, 35] }],
        stroke: { width: 2, curve: "smooth" },
        markers: { size: 0 },
        colors: (colors = dataColors ? dataColors.split(",") : colors),
        tooltip: {
            fixed: { enabled: !1 },
            x: { show: !1 },
            y: {
                title: {
                    formatter: function (o) {
                        return "";
                    },
                },
            },
            marker: { show: !1 },
        },
        fill: {
            opacity: [1],
            type: ["gradient"],
            gradient: {
                type: "vertical",
                inverseColors: !1,
                opacityFrom: 0.5,
                opacityTo: 0,
                stops: [0, 100],
            },
        },
    },
    colors =
        (new ApexCharts(
            document.querySelector("#revenue-chart"),
            options1
        ).render(),
        ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"]),
    dataColors = $("#expenses-chart").data("colors"),
    options4 = {
        chart: { type: "bar", height: 60, sparkline: { enabled: !0 } },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "60%", borderRadius: 4 },
        },
        colors: (colors = dataColors ? dataColors.split(",") : colors),
        series: [{ data: [47, 45, 74, 14, 56, 74, 14, 11, 7, 39, 82] }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: { crosshairs: { width: 1 } },
        tooltip: {
            fixed: { enabled: !1 },
            x: { show: !1 },
            y: {
                title: {
                    formatter: function (o) {
                        return "";
                    },
                },
            },
            marker: { show: !1 },
        },
    },
    colors =
        (new ApexCharts(
            document.querySelector("#expenses-chart"),
            options4
        ).render(),
        ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"]),
    dataColors = $("#balance-overview").data("colors"),
    options = {
        series: [
            {
                name: "ROI Earnings",
                type: "area",
                data: chartData.monthly.map(data => data.roi),
            },
            {
                name: "Deposits",
                type: "bar",
                data: chartData.monthly.map(data => data.deposits),
                
            
            },
            {
                name: "Withdrawals",
                type: "bar",
                data: chartData.monthly.map(data => data.withdrawals),
            },
        ],
        chart: { height: 375, type: "line", toolbar: { show: !1 } },
        stroke: { dashArray: [0, 6, 0], width: [0, 2, 0], curve: "smooth" },
        fill: { opacity: [1, 0.1, 1] },
        markers: { size: [0, 0, 0, 0], strokeWidth: 2, hover: { size: 4 } },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            axisTicks: { show: !1 },
            axisBorder: { show: !1 },
        },
        yaxis: {
            min: 0,
            labels: {
                formatter: function (o) {
                    return o +' '+ chartData.currency;
                },
            },
            axisBorder: { show: !1 },
        },
        grid: {
            show: !0,
            xaxis: { lines: { show: !1 } },
            yaxis: { lines: { show: !0 } },
            padding: { top: 0, right: -2, bottom: 15, left: 10 },
        },
        legend: {
            show: !0,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: { width: 9, height: 9, radius: 6 },
            itemMargin: { horizontal: 10, vertical: 0 },
        },
        plotOptions: {
            bar: { columnWidth: "30%", barHeight: "70%", borderRadius: 3 },
        },
        colors: (colors = dataColors ? dataColors.split(",") : colors),
        tooltip: {
            shared: !0,
            y: [
                {
                    formatter: function (o) {
                        return void 0 !== o ? + ' ' + o.toFixed(2) : o;
                    },
                },
                {
                    formatter: function (o) {
                        return void 0 !== o ? chartData.currency + ' ' + o.toFixed(2) : o;
                    },
                },
                {
                    formatter: function (o) {
                        return void 0 !== o ? chartData.currency + ' ' + o.toFixed(2) : o;
                    },
                },
                {
                    formatter: function (o) {
                        return void 0 !== o ? chartData.currency + ' ' + o.toFixed(2) : o;
                    },
                },
            ],
        },
    },
    chart = new ApexCharts(
        document.querySelector("#balance-overview"),
        options
    );
chart.render();


