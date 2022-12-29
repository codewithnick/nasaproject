<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="main.css">
	</head>
<body>
<?php
/* initialisations */
$limit=50000;

?>
<h1>My first PHP page</h1>
<div>
<div class="filters hidden" id="dashboard-filters" data-component="Filters" aria-hidden="false" style="position: relative; overflow: visible; display: block; height: auto;">
        <div class="filters__box" style="position: relative; overflow: visible;">
            <form onchange="this.submit()" id="filters" data-api="{&quot;url&quot;: &quot;/api/&quot;, &quot;beforeCall&quot;: &quot;urlFormat&quot;, &quot;form&quot;: &quot;#filters&quot;, &quot;action&quot;: &quot;GET&quot;, &quot;callback&quot;: &quot;insertData&quot;, &quot;endpoints&quot;: [&quot;/api/dashboard_sector?&quot;, &quot;/api/dashboard_country?&quot;, &quot;/api/dashboard_trends?&quot;, &quot;/api/dashboard_data?&quot;], &quot;templates&quot;: [&quot;dashboard-tab-sector&quot;, &quot;dashboard-tab-country&quot;, &quot;dashboard-tab-trends&quot;, &quot;dashboard-tab-data&quot;], &quot;responseContainers&quot;: [&quot;#dashboard-sector&quot;, &quot;#dashboard-country&quot;, &quot;#dashboard-trends&quot;, &quot;#dashboard-data&quot;]}" novalidate="novalidate" method="get" action="index.php" >
                <a href="index.php" class="filters__clear js-clear"><span>clear selection</span></a>
                <div class="filters__panel js-panel">
                    <div class="filters__section filters__section--sector">
                        <div class="filters__flex js-subsector">
                            <h4 class="filters__label filters__label--sector js-return-sector">Choose sector</h4>
                            <div class="filters__label filters__sublabel">
                                <hr class="hr--v">
                                <span class="js-sublabel">Choose subsector</span>
                            </div>
                        </div>
                        <div class="filters__flex filters__flex--relative js-subsector">
                            <div class="filters__item filters__item--static js-item js-item-all" data-item="all-sectors">
                                <input type="radio" name="sector" id="d-all-sectors" value="all">
                                <span>All sectors</span>
                            </div>
                            <div class="filters__group js-sector-group">
                                                                <label class="filters__item js-item js-item-sector" data-item="agriculture">
                                    <input type="radio" name="sector" id="d-sector-agriculture" value="agriculture">
                                    <span>Agriculture</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="buildings">
                                    <input type="radio" name="sector" id="d-sector-buildings" value="buildings">
                                    <span>Buildings</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="fluorinated-gases">
                                    <input type="radio" name="sector" id="d-sector-fluorinated-gases" value="fluorinated-gases" checked="">
                                    <span>Fluorinated gases</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="fossil-fuel-operations">
                                    <input type="radio" name="sector" id="d-sector-fossil-fuel-operations" value="fossil-fuel-operations">
                                    <span>Fossil fuel operations</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="forestry-and-land-use">
                                    <input type="radio" name="sector" id="d-sector-forestry-and-land-use" value="forestry-and-land-use">
                                    <span>Forestry and Land Use</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="manufacturing">
                                    <input type="radio" name="sector" id="d-sector-manufacturing" value="manufacturing">
                                    <span>Manufacturing</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="mineral-extraction">
                                    <input type="radio" name="sector" id="d-sector-mineral-extraction" value="mineral-extraction">
                                    <span>Mineral Extraction</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="power">
                                    <input type="radio" name="sector" id="d-sector-power" value="power">
                                    <span>Power</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="transportation">
                                    <input type="radio" name="sector" id="d-sector-transportation" value="transportation">
                                    <span>Transportation</span>
                                </label>
                                                                <label class="filters__item js-item js-item-sector" data-item="waste">
                                    <input type="radio" name="sector" id="d-sector-waste" value="waste">
                                    <span>Waste</span>
                                </label>
                                                            </div>
                            <div class="filters__subsectors">
                                                                <div class="filters__subsectorwrapper" data-itemsector="agriculture">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Agriculture</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="agriculture">
                                            <input type="radio" name="sector" value="agriculture">
                                            <span>Agriculture</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="cropland-fires">
                                                <input type="radio" name="subsector" id="d-sub-cropland-fires" value="cropland-fires">
                                                <span>Cropland fires</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="enteric-fermentation">
                                                <input type="radio" name="subsector" id="d-sub-enteric-fermentation" value="enteric-fermentation">
                                                <span>Enteric fermentation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="manure-management">
                                                <input type="radio" name="subsector" id="d-sub-manure-management" value="manure-management">
                                                <span>Manure Management</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="rice-cultivation">
                                                <input type="radio" name="subsector" id="d-sub-rice-cultivation" value="rice-cultivation">
                                                <span>Rice Cultivation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="synthetic-fertilizer-application">
                                                <input type="radio" name="subsector" id="d-sub-synthetic-fertilizer-application" value="synthetic-fertilizer-application">
                                                <span>Synthetic fertilizer application</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-agricultural-soil-emissions">
                                                <input type="radio" name="subsector" id="d-sub-other-agricultural-soil-emissions" value="other-agricultural-soil-emissions">
                                                <span>Other agricultural soil emissions</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="buildings">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Buildings</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="buildings">
                                            <input type="radio" name="sector" value="buildings">
                                            <span>Buildings</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="residential-and-commercial-onsite-fuel-usage">
                                                <input type="radio" name="subsector" id="d-sub-residential-and-commercial-onsite-fuel-usage" value="residential-and-commercial-onsite-fuel-usage">
                                                <span>Residential and commercial onsite fuel usage</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-onsite-fuel-usage">
                                                <input type="radio" name="subsector" id="d-sub-other-onsite-fuel-usage" value="other-onsite-fuel-usage">
                                                <span>Other onsite fuel usage</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="fluorinated-gases">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Fluorinated gases</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="fluorinated-gases">
                                            <input type="radio" name="sector" value="fluorinated-gases">
                                            <span>Fluorinated gases</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="fluorinated-gases">
                                                <input type="radio" name="subsector" id="d-sub-fluorinated-gases" value="fluorinated-gases">
                                                <span>Fluorinated gases</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="fossil-fuel-operations">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Fossil fuel operations</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="fossil-fuel-operations">
                                            <input type="radio" name="sector" value="fossil-fuel-operations">
                                            <span>Fossil fuel operations</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="coal-mining">
                                                <input type="radio" name="subsector" id="d-sub-coal-mining" value="coal-mining">
                                                <span>Coal mining</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="oil-and-gas-production-and-transport">
                                                <input type="radio" name="subsector" id="d-sub-oil-and-gas-production-and-transport" value="oil-and-gas-production-and-transport">
                                                <span>Oil and gas production and transport</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="oil-and-gas-refining">
                                                <input type="radio" name="subsector" id="d-sub-oil-and-gas-refining" value="oil-and-gas-refining">
                                                <span>Oil and gas refining</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="solid-fuel-transformation">
                                                <input type="radio" name="subsector" id="d-sub-solid-fuel-transformation" value="solid-fuel-transformation">
                                                <span>Solid fuel transformation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-fossil-fuel-operations">
                                                <input type="radio" name="subsector" id="d-sub-other-fossil-fuel-operations" value="other-fossil-fuel-operations">
                                                <span>Other fossil fuel operations</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="forestry-and-land-use">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Forestry and Land Use</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="forestry-and-land-use">
                                            <input type="radio" name="sector" value="forestry-and-land-use">
                                            <span>Forestry and Land Use</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="forest">
                                                <input type="radio" name="subsector" id="d-sub-forest" value="forest">
                                                <span>Net Forest &amp; Mangrove Carbon Stock Change - living biomass</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="grassland">
                                                <input type="radio" name="subsector" id="d-sub-grassland" value="grassland">
                                                <span>Net Grassland Carbon Stock Change - living biomass</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="wetland">
                                                <input type="radio" name="subsector" id="d-sub-wetland" value="wetland">
                                                <span>Net Wetland Carbon Stock Change - living biomass</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="manufacturing">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Manufacturing</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="manufacturing">
                                            <input type="radio" name="sector" value="manufacturing">
                                            <span>Manufacturing</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="aluminum">
                                                <input type="radio" name="subsector" id="d-sub-aluminum" value="aluminum">
                                                <span>Aluminum</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="cement">
                                                <input type="radio" name="subsector" id="d-sub-cement" value="cement">
                                                <span>Cement</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="chemicals">
                                                <input type="radio" name="subsector" id="d-sub-chemicals" value="chemicals">
                                                <span>Chemicals</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="pulp-and-paper">
                                                <input type="radio" name="subsector" id="d-sub-pulp-and-paper" value="pulp-and-paper">
                                                <span>Pulp and paper</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="steel">
                                                <input type="radio" name="subsector" id="d-sub-steel" value="steel">
                                                <span>Steel</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-manufacturing">
                                                <input type="radio" name="subsector" id="d-sub-other-manufacturing" value="other-manufacturing">
                                                <span>Other manufacturing</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="mineral-extraction">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Mineral Extraction</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="mineral-extraction">
                                            <input type="radio" name="sector" value="mineral-extraction">
                                            <span>Mineral Extraction</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="bauxite-mining">
                                                <input type="radio" name="subsector" id="d-sub-bauxite-mining" value="bauxite-mining">
                                                <span>Bauxite mining</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="copper-mining">
                                                <input type="radio" name="subsector" id="d-sub-copper-mining" value="copper-mining">
                                                <span>Copper mining</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="iron-mining">
                                                <input type="radio" name="subsector" id="d-sub-iron-mining" value="iron-mining">
                                                <span>Iron mining</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="rock-quarrying">
                                                <input type="radio" name="subsector" id="d-sub-rock-quarrying" value="rock-quarrying">
                                                <span>Rock quarrying</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="sand-quarrying">
                                                <input type="radio" name="subsector" id="d-sub-sand-quarrying" value="sand-quarrying">
                                                <span>Sand quarrying</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="power">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Power</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="power">
                                            <input type="radio" name="sector" value="power">
                                            <span>Power</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="electricity-generation">
                                                <input type="radio" name="subsector" id="d-sub-electricity-generation" value="electricity-generation">
                                                <span>Electricity generation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-energy-use">
                                                <input type="radio" name="subsector" id="d-sub-other-energy-use" value="other-energy-use">
                                                <span>Other energy use</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="transportation">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Transportation</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="transportation">
                                            <input type="radio" name="sector" value="transportation">
                                            <span>Transportation</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="domestic-aviation">
                                                <input type="radio" name="subsector" id="d-sub-domestic-aviation" value="domestic-aviation">
                                                <span>Domestic aviation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="international-aviation">
                                                <input type="radio" name="subsector" id="d-sub-international-aviation" value="international-aviation">
                                                <span>International aviation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="railways">
                                                <input type="radio" name="subsector" id="d-sub-railways" value="railways">
                                                <span>Railways</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="road-transportation">
                                                <input type="radio" name="subsector" id="d-sub-road-transportation" value="road-transportation">
                                                <span>Road transportation</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="shipping">
                                                <input type="radio" name="subsector" id="d-sub-shipping" value="shipping">
                                                <span>Shipping</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="other-transport">
                                                <input type="radio" name="subsector" id="d-sub-other-transport" value="other-transport">
                                                <span>Other transport</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="filters__subsectorwrapper" data-itemsector="waste">
                                    <div class="filters__subsector js-itemsector">
                                        <div class="filters__returningbutton js-reset-subsector"><span>Waste</span></div>
                                        <label class="filters__item filters__item--main js-item js-item-sector" data-item="waste">
                                            <input type="radio" name="sector" value="waste">
                                            <span>Waste</span>
                                        </label>
                                        <div class="filters__subgroup ">
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="biological-treatment-of-solid-waste">
                                                <input type="radio" name="subsector" id="d-sub-biological-treatment-of-solid-waste" value="biological-treatment-of-solid-waste">
                                                <span>Biological treatment of solid waste</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="incineration-and-open-burning-of-waste">
                                                <input type="radio" name="subsector" id="d-sub-incineration-and-open-burning-of-waste" value="incineration-and-open-burning-of-waste">
                                                <span>Incineration and open burning of waste</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="solid-waste-disposal">
                                                <input type="radio" name="subsector" id="d-sub-solid-waste-disposal" value="solid-waste-disposal">
                                                <span>Solid Waste Disposal</span>
                                            </label>
                                                                                        <label class="filters__item js-item js-item-sector" data-subsector="wastewater-treatment-and-discharge">
                                                <input type="radio" name="subsector" id="d-sub-wastewater-treatment-and-discharge" value="wastewater-treatment-and-discharge">
                                                <span>Wastewater Treatment and Discharge</span>
                                            </label>
                                                                                    </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                    </div>
                    <div class="filters__section">
                        <div class="filters__col">
                            <h4 class="filters__label">Select time</h4>
                           
                                    <div id="filters-timelabel" class="filters__group filters__group--nowrap filters__group--timelabel">
                                                                                                                        <label class="filters__item filters__item--time js-time" data-item="2015">
                                            <input type="checkbox" name="start_time" id="d-time-2015" value="2015">
                                            <span>2015                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2016">
                                            <input type="checkbox" name="start_time" id="d-time-2016" value="2016">
                                            <span>2016                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2017">
                                            <input type="checkbox" name="start_time" id="d-time-2017" value="2017">
                                            <span>2017                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2018">
                                            <input type="checkbox" name="start_time" id="d-time-2018" value="2018">
                                            <span>2018                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2019">
                                            <input type="checkbox" name="start_time" id="d-time-2019" value="2019">
                                            <span>2019                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2020">
                                            <input type="checkbox" name="start_time" id="d-time-2020" value="2020">
                                            <span>2020                                            </span>
                                        </label>
                                                                                                                                                                <label class="filters__item filters__item--time js-time" data-item="2021">
                                            <input type="checkbox" name="start_time" id="d-time-2021" value="2021">
                                            <span>2021                                            </span>
                                        </label>
                                                                                                    <label class="filters__item filters__item--static js-all-time" data-item="all-time" data-item-label="All time">
                                            <input type="checkbox" name="start_time" id="d-time-all" value="2015-2021">
                                            <span>all time</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
						

                            <div class="filters__col">
                                <h4 class="filters__label filters__label--gas">Select greenhouse gas</h4>
                                <div class="filters__flex filters__flex--relative js-f-gas-select">
                                    <div class="filters__group filters__group--gas">
                                        <label class="filters__item filters__item--gas js-item js-item-gas">
                                            <input class="js-item-gas-all" type="radio" name="gas" value="CO2E100">
                                            <span>CO<sub>2</sub>e</span>
                                            <i class="tip is-small">Carbon Dioxide Equivalent. Select 100 Year or 20 year below.</i>
                                        </label>
                                        <label class="filters__item js-item js-item-gas">
                                            <input type="radio" name="gas" value="CO2" checked="">
                                            <span>CO<sub>2</sub></span>
                                            <i class="tip">Carbon Dioxide</i>
                                        </label>
                                        <label class="filters__item js-item js-item-gas">
                                            <input type="radio" name="gas" value="CH4">
                                            <span>CH<sub>4</sub></span>
                                            <i class="tip">Methane</i>
                                        </label>
                                        <label class="filters__item js-item js-item-gas">
                                            <input type="radio" name="gas" value="N2O">
                                            <span>N<sub>2</sub>O</span>
                                            <i class="tip">Nitrous Oxide</i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
			</form>
	</div>
</div>
</div>
<form action="index.php" method="get">
	<div>
	<label>years</label>
<input type="radio" name="years" onchange="this.form.submit()"
<?php if (isset($years) && $years=="20") echo "checked";?>
value="20">20
<input type="radio" name="years" onchange="this.form.submit()"
<?php if (isset($years) && $years=="100") echo "checked";?>
		value="100">100
</form>

	</div>
<?php
echo "var dump post ",var_dump($_GET);
if (($open = fopen("asset_cement_emissions.csv", "r")) !== FALSE)
{

	while (($data = fgetcsv($open, 1000, ",")) !== FALSE)
	{		
	$array[] = $data;
	}

	fclose($open);
}
echo "<pre>";
/* echo var_dump($array); */
?>
<table class="excel">
<tr>
	<?php
	foreach($array[0] as $result) {
		echo '<th>',$result,'</th>';
	}
	?>
</tr>
<tr>
<?php

for ($x = 1; $x <= $limit; $x++) {
	$results=$array[$x];
	$table_id=$results[0];
	$table_asset_name=$results[1];
	$table_iso_3=$results[2];
	$table_country=$results[3];
	$table_year=$results[4];
	$table_gas=$results[5];
	$table_original_inventory_sector=$results[6];
	$table_emission_qty=$results[7];


	/* query to remove table row if year not match */
	if(isset($_GET["start_time"])){
		if($_GET["start_time"] != strval($table_year)){
			continue;
		}
	}
	/* query to remove table row if gas not matched */
	if(isset($_GET["gas"])){
		if($_GET["gas"] != $table_gas){
			continue;
		}
	}
	
	echo "<tr>";
	foreach($results as $result) {
		echo '<td>',$result,'</td>';
	}	
	echo "</tr>";
  }
	?>
</tr>
</table>
<?php
echo "</pre>";

?>
</body>
</html>