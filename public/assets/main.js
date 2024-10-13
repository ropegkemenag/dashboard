
const rupiah = (number)=>{
  return new Intl.NumberFormat('id-ID').format(number)
}

const chartColors = {
  donut: {
    series1: '#24B364',
    series2: '#53D28C',
    series3: '#7EDDA9',
    series4: '#A9E9C5'
  }
};

let cardColor, labelColor, headingColor, borderColor, legendColor;

cardColor = config.colors.cardColor;
labelColor = config.colors.textMuted;
legendColor = config.colors.bodyColor;
headingColor = config.colors.headingColor;
borderColor = config.colors.borderColor;

var tabCarousel = setInterval(function() {
    var tabs = $('.nav-pills > li'),
        tabsb = $('.nav-pills > li > button'),
        active = tabsb.filter('.active'),
        next = active.parent().next('li'),
        toClick = next.length ? next.find('button') : tabs.eq(0).find('button');

    toClick.trigger('click');
}, 10000);

$(document).ready(function() {

   $.getJSON( siteurl+"pengadaan/cpns", function( data ) {
     $('#cpns_jml_pendaftar').html(rupiah(data.data.jml_pendaftar));
     $('#cpns_jml_submit').html(rupiah(data.data.jml_submit));
     $('#cpns_jml_blm_verif').html(rupiah(data.data.jml_blm_verif));
     $('#cpns_jml_formasi').html(rupiah(data.data.jml_formasi));
     $('#cpns_jml_ms').html(rupiah(data.data.jml_ms));
     $('#cpns_jml_tms').html(rupiah(data.data.jml_tms));
   });

   // $.getJSON( siteurl+"pengadaan/pppk", function( data ) {
   //   $('#pppk_jml_pendaftar').html(rupiah(data.data.jml_pendaftar));
   //   $('#pppk_jml_submit').html(rupiah(data.data.jml_submit));
   //   $('#pppk_jml_blm_verif').html(rupiah(data.data.jml_blm_verif));
   //   $('#pppk_jml_formasi').html(rupiah(data.data.jml_formasi));
   //   $('#pppk_jml_ms').html(rupiah(data.data.jml_ms));
   //   $('#pppk_jml_tms').html(rupiah(data.data.jml_tms));
   // });

   $.getJSON( siteurl+"simpeg", function( data ) {
     $('#jumlahpegawai').html(rupiah(parseInt(data.jf.JUMLAH) + parseInt(data.jm.JUMLAH)));
     $('#jumlahpns').html(rupiah(parseInt(data.status[0].JUMLAH) + parseInt(data.status[1].JUMLAH)));
     $('#jumlahpppk').html(rupiah(data.status[2].JUMLAH));
     console.log(data);
     processJson('tableagama',data.agama);
     processJson('tablejabatan',data.jabatan);
   });
});

const generatedLeadsChartEl = document.querySelector('#generatedLeadsChart'),
generatedLeadsChartConfig = {
chart: {
  height: 125,
  width: 120,
  parentHeightOffset: 0,
  type: 'donut'
},
labels: ['Laki-Laki', 'Perempuan'],
series: [123, 321],
colors: [
  chartColors.donut.series1,
  chartColors.donut.series2
],
stroke: {
  width: 0
},
dataLabels: {
  enabled: false,
  formatter: function (val, opt) {
    return parseInt(val) + '%';
  }
},
legend: {
  show: false
},
tooltip: {
  theme: false
},
grid: {
  padding: {
    top: 15,
    right: -20,
    left: -20
  }
},
states: {
  hover: {
    filter: {
      type: 'none'
    }
  }
},
plotOptions: {
  pie: {
    donut: {
      size: '70%',
      labels: {
        show: true,
        value: {
          fontSize: '1.5rem',
          fontFamily: 'Public Sans',
          color: headingColor,
          fontWeight: 500,
          offsetY: -15,
          formatter: function (val) {
            return parseInt(val) + '%';
          }
        },
        name: {
          offsetY: 20,
          fontFamily: 'Public Sans'
        },
        total: {
          show: true,
          showAlways: true,
          color: config.colors.success,
          fontSize: '.4125rem',
          label: 'Total',
          fontFamily: 'Public Sans',
          formatter: function (w) {
            return '<?= rupiah($djk[0]->JUMLAH+$djk[1]->JUMLAH) ?>';
          }
        }
      }
    }
  }
},
responsive: [
  {
    breakpoint: 1025,
    options: {
      chart: {
        height: 172,
        width: 160
      }
    }
  },
  {
    breakpoint: 769,
    options: {
      chart: {
        height: 178
      }
    }
  },
  {
    breakpoint: 426,
    options: {
      chart: {
        height: 147
      }
    }
  }
]
};
if (typeof generatedLeadsChartEl !== undefined && generatedLeadsChartEl !== null) {
const generatedLeadsChart = new ApexCharts(generatedLeadsChartEl, generatedLeadsChartConfig);
generatedLeadsChart.render();
}

const revenueGrowthEl = document.querySelector('#revenueGrowth'),
revenueGrowthConfig = {
chart: {
  height: 170,
  type: 'bar',
  parentHeightOffset: 0,
  toolbar: {
    show: false
  }
},
plotOptions: {
  bar: {
    barHeight: '80%',
    columnWidth: '30%',
    startingShape: 'rounded',
    endingShape: 'rounded',
    borderRadius: 6,
    distributed: true
  }
},
tooltip: {
  enabled: false
},
grid: {
  show: false,
  padding: {
    top: -20,
    bottom: -12,
    left: -10,
    right: 0
  }
},
colors: [
  config.colors_label.success,
  config.colors_label.success,
  config.colors_label.success,
  config.colors_label.success,
  config.colors.success,
  config.colors_label.success,
  config.colors_label.success
],
dataLabels: {
  enabled: false
},
series: [
  {
    data: [25, 40, 55, 70, 85, 70, 55]
  }
],
legend: {
  show: false
},
xaxis: {
  categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
  axisBorder: {
    show: false
  },
  axisTicks: {
    show: false
  },
  labels: {
    style: {
      colors: labelColor,
      fontSize: '13px',
      fontFamily: 'Public Sans'
    }
  }
},
yaxis: {
  labels: {
    show: false
  }
},
states: {
  hover: {
    filter: {
      type: 'none'
    }
  }
},
responsive: [
  {
    breakpoint: 1471,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '50%'
        }
      }
    }
  },
  {
    breakpoint: 1350,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '57%'
        }
      }
    }
  },
  {
    breakpoint: 1032,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '60%'
        }
      }
    }
  },
  {
    breakpoint: 992,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '40%',
          borderRadius: 8
        }
      }
    }
  },
  {
    breakpoint: 855,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '50%',
          borderRadius: 6
        }
      }
    }
  },
  {
    breakpoint: 440,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '40%'
        }
      }
    }
  },
  {
    breakpoint: 381,
    options: {
      plotOptions: {
        bar: {
          columnWidth: '45%'
        }
      }
    }
  }
]
};
if (typeof revenueGrowthEl !== undefined && revenueGrowthEl !== null) {
const revenueGrowth = new ApexCharts(revenueGrowthEl, revenueGrowthConfig);
revenueGrowth.render();
}

// var s=document.querySelector("#swiper-with-pagination-cards"),s=(s&&new Swiper(s,{loop:!0,autoplay:{delay:2500,disableOnInteraction:!1},pagination:{clickable:!0,el:".swiper-pagination"}})

const swiper = new Swiper('#swiper-with-pagination-cards', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
