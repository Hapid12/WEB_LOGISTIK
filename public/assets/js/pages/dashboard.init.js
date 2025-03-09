var options={series:[{name:"Net Profit",data:[19,36,24,20,34,24,11,36,24,15,21,28]},{name:"Revenue",data:[7,12,10,12,11,10,13,10,12,8,13,13]}],chart:{type:"bar",height:350,stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},plotOptions:{bar:{horizontal:!1,columnWidth:"42%"}},dataLabels:{enabled:!1},legend:{show:!1},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Des"]},colors:["#0c768a","#daeaee"],fill:{opacity:1}},chart=new ApexCharts(document.querySelector("#column-chart"),options),options=(chart.render(),{series:[40405,15552,19824],labels:["Online","Offline","Marketing"],chart:{type:"donut",height:350},plotOptions:{pie:{size:100,offsetX:0,offsetY:0,donut:{size:"77%",labels:{show:!0,name:{show:!0,fontSize:"18px",offsetY:-5},value:{show:!0,fontSize:"24px",color:"#343a40",fontWeight:500,offsetY:10,formatter:function(e){return"$"+e}},total:{show:!0,fontSize:"16px",label:"Total value",color:"#9599ad",fontWeight:400,formatter:function(e){return"$"+e.globals.seriesTotals.reduce(function(e,o){return e+o},0)}}}}}},dataLabels:{enabled:!1},legend:{show:!0,position:"bottom"},yaxis:{labels:{formatter:function(e){return"$"+e}}},stroke:{lineCap:"round",width:2},colors:["#0c768a","#38c786","#daeaee"]}),worldlinemap=((chart=new ApexCharts(document.querySelector("#donut-chart"),options)).render(),new jsVectorMap({map:"world_merc",selector:"#world-map-markers",zoomOnScroll:!1,zoomButtons:!1,markerStyle:{initial:{fill:"#0c768a"},selected:{fill:"#0c768a"}},markers:[{name:"Greenland",coords:[72,-42]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Brazil",coords:[-14.235,-51.9253]},{name:"Egypt",coords:[26.8206,30.8025]},{name:"Russia",coords:[61,105]},{name:"China",coords:[35.8617,104.1954]},{name:"United States",coords:[37.0902,-95.7129]},{name:"Norway",coords:[60.472024,8.468946]},{name:"Ukraine",coords:[48.379433,31.16558]}],lines:[{from:"Canada",to:"Egypt"},{from:"Russia",to:"Egypt"},{from:"Greenland",to:"Egypt"},{from:"Brazil",to:"Egypt"},{from:"United States",to:"Egypt"},{from:"China",to:"Egypt"},{from:"Norway",to:"Egypt"},{from:"Ukraine",to:"Egypt"}],regionStyle:{initial:{stroke:"#daeaee",strokeWidth:.25,fill:"#daeaee",fillOpacity:1}},lineStyle:{animation:!0,strokeDasharray:"6 3 6"}})),options={labels:["E-Commerce","Facebook","Instagram"],series:[38,24,16],chart:{height:402,type:"donut"},plotOptions:{pie:{startAngle:-90,endAngle:90,offsetY:10,donut:{size:"80%"}}},colors:["#0c768a","#38c786","#daeaee"],grid:{padding:{bottom:-190}},legend:{show:!1},responsive:[{breakpoint:320,options:{chart:{width:180},legend:{position:"bottom"}}}]};(chart=new ApexCharts(document.querySelector("#social-source"),options)).render();