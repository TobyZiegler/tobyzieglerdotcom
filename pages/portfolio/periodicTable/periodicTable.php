<!DOCTYPE html>

<html>

<!-- Toby Ziegler -->
<!-- 14SP-CIS-130-W01-WEB SITE DEVELOPMENT I -->
<!-- Midterm Periodic Table Independent Project - Graphics, Tables & CSS 3 Module -->
<!-- Assignment Due March 20th, 2014 -->

<head>
    <meta name="keywords" content="CIW, HTML5, CSS, School, Midterm, Periodic Table, Independent Project" />
    <meta name="description" content="Assignment: Develop a web page that displays the periodic table of elements." />
    <title>Toby Ziegler - Periodic Table of the Elements</title>
    <link rel="stylesheet" type="text/css" href="periodicStyle.css" />
    <link rel="stylesheet" href="../../../css/navbarstyle.css" />
    <link rel="stylesheet" href="../../../css/standardstyles.css" />
</head>

<body>
    <!-- The top of page is marked here for easy link access. -->
    <a id="TopofPage"></a>

    <nav>
        <?php include("../../templates/navbar.php");?>
    </nav>


    <h1 class="center">Toby Ziegler&#x27;s Periodic Table of the Elements</h1>
    <article class="standout">
        <p>This page was a class assignment to show table and CSS style proficiency.</p>
        <p> It scales with the viewing window down to a minimum width and relies only on pure HTML and CSS.</p>
        <p>Looking over the code to post it in this portfolio just a few years later, I am amazed by just how much I would do differently now to achieve the identical look.</p>
    </article>

    <!-- Thus, the beast begins... -->
    <table class="center">
        <tr>
            <td class="alkali">
                <div class="number">1</div>
                <div class="weight">1.01</div>
                <div class="symbol">H</div>
                <div class="name">Hydrogen</div>
                <div class="year">1776</div>
            </td>
            <td colspan=16></td>
            <td class="noble">
                <div class="number">2</div>
                <div class="weight">4.00</div>
                <div class="symbol">He</div>
                <div class="name">Helium</div>
                <div class="year">1895</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">3</div>
                <div class="weight">6.94</div>
                <div class="symbol">Li</div>
                <div class="name">Lithium</div>
                <div class="year">1817</div>
            </td>
            <td class="earth">
                <div class="number">4</div>
                <div class="weight">9.01</div>
                <div class="symbol">Be</div>
                <div class="name">Beryllium</div>
                <div class="year">1797</div>
            </td>
            <td colspan=10></td>
            <td class="nonmetal">
                <div class="number">5</div>
                <div class="weight">10.81</div>
                <div class="symbol">B</div>
                <div class="name">Boron</div>
                <div class="year">1808</div>
            </td>
            <td class="nonmetal">
                <div class="number">6</div>
                <div class="weight">12.01</div>
                <div class="symbol">C</div>
                <div class="name">Carbon</div>
                <div class="year"> ancient</div>
            </td>
            <td class="nonmetal">
                <div class="number">7</div>
                <div class="weight">14.01</div>
                <div class="symbol">N</div>
                <div class="name">Nitrogen</div>
                <div class="year">1772</div>
            </td>
            <td class="nonmetal">
                <div class="number">8</div>
                <div class="weight">16.00</div>
                <div class="symbol">O</div>
                <div class="name">Oxygen</div>
                <div class="year">1774</div>
            </td>
            <td class="nonmetal">
                <div class="number">9</div>
                <div class="weight">19.00</div>
                <div class="symbol">F</div>
                <div class="name">Fluorine</div>
                <div class="year">1886</div>
            </td>
            <td class="noble">
                <div class="number">10</div>
                <div class="weight">20.18</div>
                <div class="symbol">Ne</div>
                <div class="name">Neon</div>
                <div class="year">1898</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">11</div>
                <div class="weight">22.99</div>
                <div class="symbol">Na</div>
                <div class="name">Sodium</div>
                <div class="year">1807</div>
            </td>
            <td class="earth">
                <div class="number">12</div>
                <div class="weight">24.31</div>
                <div class="symbol">Mg</div>
                <div class="name">Magnesium</div>
                <div class="year">1755</div>
            </td>
            <td colspan=10></td>
            <td class="inner">
                <div class="number">13</div>
                <div class="weight">26.98</div>
                <div class="symbol">Al</div>
                <div class="name">Aluminum</div>
                <div class="year">1825</div>
            </td>
            <td class="nonmetal">
                <div class="number">14</div>
                <div class="weight">28.09</div>
                <div class="symbol">Si</div>
                <div class="name">Silicon</div>
                <div class="year">1824</div>
            </td>
            <td class="nonmetal">
                <div class="number">15</div>
                <div class="weight">30.97</div>
                <div class="symbol">P</div>
                <div class="name">Phosphorus</div>
                <div class="year">1669</div>
            </td>
            <td class="nonmetal">
                <div class="number">16</div>
                <div class="weight">32.07</div>
                <div class="symbol">S</div>
                <div class="name">Sulfur</div>
                <div class="year"> ancient</div>
            </td>
            <td class="nonmetal">
                <div class="number">17</div>
                <div class="weight">35.45</div>
                <div class="symbol">Cl</div>
                <div class="name">Chlorine</div>
                <div class="year">1774</div>
            </td>
            <td class="noble">
                <div class="number">18</div>
                <div class="weight">39.95</div>
                <div class="symbol">Ar</div>
                <div class="name">Argon</div>
                <div class="year">1894</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">19</div>
                <div class="weight">39.10</div>
                <div class="symbol">K</div>
                <div class="name">Potassium</div>
                <div class="year">1807</div>
            </td>
            <td class="earth">
                <div class="number">20</div>
                <div class="weight">40.08</div>
                <div class="symbol">Ca</div>
                <div class="name">Calcium</div>
                <div class="year">1808</div>
            </td>
            <td class="transitional">
                <div class="number">21</div>
                <div class="weight">44.96</div>
                <div class="symbol">Sc</div>
                <div class="name">Scandium</div>
                <div class="year">1879</div>
            </td>
            <td class="transitional">
                <div class="number">22</div>
                <div class="weight">47.87</div>
                <div class="symbol">Ti</div>
                <div class="name">Titanium</div>
                <div class="year">1791</div>
            </td>
            <td class="transitional">
                <div class="number">23</div>
                <div class="weight">50.94</div>
                <div class="symbol">V</div>
                <div class="name">Vanadium</div>
                <div class="year">1830</div>
            </td>
            <td class="transitional">
                <div class="number">24</div>
                <div class="weight">52.00</div>
                <div class="symbol">Cr</div>
                <div class="name">Chromium</div>
                <div class="year">1797</div>
            </td>
            <td class="transitional">
                <div class="number">25</div>
                <div class="weight">54.94</div>
                <div class="symbol">Mn</div>
                <div class="name">Manganese</div>
                <div class="year">1774</div>
            </td>
            <td class="transitional">
                <div class="number">26</div>
                <div class="weight">55.85</div>
                <div class="symbol">Fe</div>
                <div class="name">Iron</div>
                <div class="year"> ancient</div>
            </td>
            <td class="transitional">
                <div class="number">27</div>
                <div class="weight">58.93</div>
                <div class="symbol">Co</div>
                <div class="name">Cobalt</div>
                <div class="year">1735</div>
            </td>
            <td class="transitional">
                <div class="number">28</div>
                <div class="weight">58.69</div>
                <div class="symbol">Ni</div>
                <div class="name">Nickel</div>
                <div class="year">1751</div>
            </td>
            <td class="transitional">
                <div class="number">29</div>
                <div class="weight">63.55</div>
                <div class="symbol">Cu</div>
                <div class="name">Copper</div>
                <div class="year"> ancient</div>
            </td>
            <td class="transitional">
                <div class="number">30</div>
                <div class="weight">65.39</div>
                <div class="symbol">Zn</div>
                <div class="name">Zinc</div>
                <div class="year"> ancient</div>
            </td>
            <td class="inner">
                <div class="number">31</div>
                <div class="weight">69.72</div>
                <div class="symbol">Ga</div>
                <div class="name">Gallium</div>
                <div class="year">1875</div>
            </td>
            <td class="inner">
                <div class="number">32</div>
                <div class="weight">72.64</div>
                <div class="symbol">Ge</div>
                <div class="name">Germanium</div>
                <div class="year">1886</div>
            </td>
            <td class="nonmetal">
                <div class="number">33</div>
                <div class="weight">74.92</div>
                <div class="symbol">As</div>
                <div class="name">Arsenic</div>
                <div class="year"> ancient</div>
            </td>
            <td class="nonmetal">
                <div class="number">34</div>
                <div class="weight">78.96</div>
                <div class="symbol">Se</div>
                <div class="name">Selenium</div>
                <div class="year">1817</div>
            </td>
            <td class="nonmetal">
                <div class="number">35</div>
                <div class="weight">79.90</div>
                <div class="symbol">Br</div>
                <div class="name">Bromine</div>
                <div class="year">1826</div>
            </td>
            <td class="noble">
                <div class="number">36</div>
                <div class="weight">83.80</div>
                <div class="symbol">Kr</div>
                <div class="name">Krypton</div>
                <div class="year">1898</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">37</div>
                <div class="weight">85.47</div>
                <div class="symbol">Rb</div>
                <div class="name">Rubidium</div>
                <div class="year">1861</div>
            </td>
            <td class="earth">
                <div class="number">38</div>
                <div class="weight">87.62</div>
                <div class="symbol">Sr</div>
                <div class="name">Strontium</div>
                <div class="year">1790</div>
            </td>
            <td class="transitional">
                <div class="number">39</div>
                <div class="weight">88.91</div>
                <div class="symbol">Y</div>
                <div class="name">Yttrium</div>
                <div class="year">1794</div>
            </td>
            <td class="transitional">
                <div class="number">40</div>
                <div class="weight">91.22</div>
                <div class="symbol">Zr</div>
                <div class="name">Zirconium</div>
                <div class="year">1789</div>
            </td>
            <td class="transitional">
                <div class="number">41</div>
                <div class="weight">92.91</div>
                <div class="symbol">Nb</div>
                <div class="name">Niobium</div>
                <div class="year">1801</div>
            </td>
            <td class="transitional">
                <div class="number">42</div>
                <div class="weight">95.94</div>
                <div class="symbol">Mo</div>
                <div class="name">Molybdenum</div>
                <div class="year">1781</div>
            </td>
            <td class="transitional">
                <div class="number">43</div>
                <div class="weight">98.00</div>
                <div class="symbol">Tc</div>
                <div class="name">Technetium</div>
                <div class="year">1937</div>
            </td>
            <td class="transitional">
                <div class="number">44</div>
                <div class="weight">101.07</div>
                <div class="symbol">Ru</div>
                <div class="name">Ruthenium</div>
                <div class="year">1844</div>
            </td>
            <td class="transitional">
                <div class="number">45</div>
                <div class="weight">102.91</div>
                <div class="symbol">Rh</div>
                <div class="name">Rhodium</div>
                <div class="year">1803</div>
            </td>
            <td class="transitional">
                <div class="number">46</div>
                <div class="weight">106.42</div>
                <div class="symbol">Pd</div>
                <div class="name">Palladium</div>
                <div class="year">1803</div>
            </td>
            <td class="transitional">
                <div class="number">47</div>
                <div class="weight">107.87</div>
                <div class="symbol">Ag</div>
                <div class="name">Silver</div>
                <div class="year"> ancient</div>
            </td>
            <td class="transitional">
                <div class="number">48</div>
                <div class="weight">112.41</div>
                <div class="symbol">Cd</div>
                <div class="name">Cadmium</div>
                <div class="year">1817</div>
            </td>
            <td class="inner">
                <div class="number">49</div>
                <div class="weight">114.82</div>
                <div class="symbol">In</div>
                <div class="name">Indium</div>
                <div class="year">1863</div>
            </td>
            <td class="inner">
                <div class="number">50</div>
                <div class="weight">118.71</div>
                <div class="symbol">Sn</div>
                <div class="name">Tin</div>
                <div class="year"> ancient</div>
            </td>
            <td class="inner">
                <div class="number">51</div>
                <div class="weight">121.76</div>
                <div class="symbol">Sb</div>
                <div class="name">Antimony</div>
                <div class="year"> ancient</div>
            </td>
            <td class="nonmetal">
                <div class="number">52</div>
                <div class="weight">127.60</div>
                <div class="symbol">Te</div>
                <div class="name">Tellurium</div>
                <div class="year">1783</div>
            </td>
            <td class="nonmetal">
                <div class="number">53</div>
                <div class="weight">126.90</div>
                <div class="symbol">I</div>
                <div class="name">Iodine</div>
                <div class="year">1811</div>
            </td>
            <td class="noble">
                <div class="number">54</div>
                <div class="weight">131.29</div>
                <div class="symbol">Xe</div>
                <div class="name">Xenon</div>
                <div class="year">1898</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">55</div>
                <div class="weight">132.91</div>
                <div class="symbol">Cs</div>
                <div class="name">Cesium</div>
                <div class="year">1860</div>
            </td>
            <td class="earth">
                <div class="number">56</div>
                <div class="weight">137.33</div>
                <div class="symbol">Ba</div>
                <div class="name">Barium</div>
                <div class="year">1808</div>
            </td>
            <td class="transitional">
                <div class="number">57</div>
                <div class="weight">138.91</div>
                <div class="symbol">La</div>
                <div class="name">Lanthanum</div>
                <div class="year">1839</div>
            </td>
            <td class="transitional">
                <div class="number">72</div>
                <div class="weight">178.49</div>
                <div class="symbol">Hf</div>
                <div class="name">Hafnium</div>
                <div class="year">1923</div>
            </td>
            <td class="transitional">
                <div class="number">73</div>
                <div class="weight">180.95</div>
                <div class="symbol">Ta</div>
                <div class="name">Tantalum</div>
                <div class="year">1802</div>
            </td>
            <td class="transitional">
                <div class="number">74</div>
                <div class="weight">183.84</div>
                <div class="symbol">W</div>
                <div class="name">Tungsten</div>
                <div class="year">1783</div>
            </td>
            <td class="transitional">
                <div class="number">75</div>
                <div class="weight">186.21</div>
                <div class="symbol">Re</div>
                <div class="name">Rhenium</div>
                <div class="year">1925</div>
            </td>
            <td class="transitional">
                <div class="number">76</div>
                <div class="weight">190.23</div>
                <div class="symbol">Os</div>
                <div class="name">Osmium</div>
                <div class="year">1803</div>
            </td>
            <td class="transitional">
                <div class="number">77</div>
                <div class="weight">192.22</div>
                <div class="symbol">Ir</div>
                <div class="name">Iridium</div>
                <div class="year">1803</div>
            </td>
            <td class="transitional">
                <div class="number">78</div>
                <div class="weight">195.08</div>
                <div class="symbol">Pt</div>
                <div class="name">Platinum</div>
                <div class="year">1735</div>
            </td>
            <td class="transitional">
                <div class="number">79</div>
                <div class="weight">196.97</div>
                <div class="symbol">Au</div>
                <div class="name">Gold</div>
                <div class="year"> ancient</div>
            </td>
            <td class="transitional">
                <div class="number">80</div>
                <div class="weight">200.59</div>
                <div class="symbol">Hg</div>
                <div class="name">Mercury</div>
                <div class="year"> ancient</div>
            </td>
            <td class="inner">
                <div class="number">81</div>
                <div class="weight">204.38</div>
                <div class="symbol">Tl</div>
                <div class="name">Thallium</div>
                <div class="year">1861</div>
            </td>
            <td class="inner">
                <div class="number">82</div>
                <div class="weight">207.20</div>
                <div class="symbol">Pb</div>
                <div class="name">Lead</div>
                <div class="year"> ancient</div>
            </td>
            <td class="inner">
                <div class="number">83</div>
                <div class="weight">208.98</div>
                <div class="symbol">Bi</div>
                <div class="name">Bismuth</div>
                <div class="year"> ancient</div>
            </td>
            <td class="inner">
                <div class="number">84</div>
                <div class="weight">209.00</div>
                <div class="symbol">Po</div>
                <div class="name">Polonium</div>
                <div class="year">1898</div>
            </td>
            <td class="nonmetal">
                <div class="number">85</div>
                <div class="weight">210.00</div>
                <div class="symbol">At</div>
                <div class="name">Astatine</div>
                <div class="year">1940</div>
            </td>
            <td class="noble">
                <div class="number">86</div>
                <div class="weight">222.00</div>
                <div class="symbol">Rn</div>
                <div class="name">Radon</div>
                <div class="year">1900</div>
            </td>
        </tr>
        <tr>
            <td class="alkali">
                <div class="number">87</div>
                <div class="weight">223.00</div>
                <div class="symbol">Fr</div>
                <div class="name">Francium</div>
                <div class="year">1939</div>
            </td>
            <td class="earth">
                <div class="number">88</div>
                <div class="weight">226.00</div>
                <div class="symbol">Ra</div>
                <div class="name">Radium</div>
                <div class="year">1898</div>
            </td>
            <td class="transitional">
                <div class="number">89</div>
                <div class="weight">227.00</div>
                <div class="symbol">Ac</div>
                <div class="name">Actinium</div>
                <div class="year">1899</div>
            </td>
            <td class="transitional">
                <div class="number">104</div>
                <div class="weight">261.00</div>
                <div class="symbol">Rf</div>
                <div class="name">Rutherfordium</div>
                <div class="year">1964</div>
            </td>
            <td class="transitional">
                <div class="number">105</div>
                <div class="weight">262.00</div>
                <div class="symbol">Db</div>
                <div class="name">Dubnium</div>
                <div class="year">1967</div>
            </td>
            <td class="transitional">
                <div class="number">106</div>
                <div class="weight">266.00</div>
                <div class="symbol">Sg</div>
                <div class="name">Seaborgium</div>
                <div class="year">1974</div>
            </td>
            <td class="transitional">
                <div class="number">107</div>
                <div class="weight">264.00</div>
                <div class="symbol">Bh</div>
                <div class="name">Bohrium</div>
                <div class="year">1981</div>
            </td>
            <td class="transitional">
                <div class="number">108</div>
                <div class="weight">277.00</div>
                <div class="symbol">Hs</div>
                <div class="name">Hassium</div>
                <div class="year">1984</div>
            </td>
            <td class="transitional">
                <div class="number">109</div>
                <div class="weight">268.00</div>
                <div class="symbol">Mt</div>
                <div class="name">Meitnerium</div>
                <div class="year">1982</div>
            </td>
            <td colspan=9></td>
        </tr>
        <tr>
            <td colspan=2></td>
            <td colspan=16>
                <h3>Lanthanide series</h3></td>
        </tr>
        <tr>
            <td colspan=2></td>
            <td class="transitional">
                <div class="number">58</div>
                <div class="weight">140.12</div>
                <div class="symbol">Ce</div>
                <div class="name">Cerium</div>
                <div class="year">1803</div>
            </td>
            <td class="transitional">
                <div class="number">59</div>
                <div class="weight">140.91</div>
                <div class="symbol">Pr</div>
                <div class="name">Praseodymium</div>
                <div class="year">1885</div>
            </td>
            <td class="transitional">
                <div class="number">60</div>
                <div class="weight">144.24</div>
                <div class="symbol">Nd</div>
                <div class="name">Neodymium</div>
                <div class="year">1885</div>
            </td>
            <td class="transitional">
                <div class="number">61</div>
                <div class="weight">145.00</div>
                <div class="symbol">Pm</div>
                <div class="name">Promethium</div>
                <div class="year">1945</div>
            </td>
            <td class="transitional">
                <div class="number">62</div>
                <div class="weight">150.36</div>
                <div class="symbol">Sm</div>
                <div class="name">Samarium</div>
                <div class="year">1879</div>
            </td>
            <td class="transitional">
                <div class="number">63</div>
                <div class="weight">151.96</div>
                <div class="symbol">Eu</div>
                <div class="name">Europium</div>
                <div class="year">1901</div>
            </td>
            <td class="transitional">
                <div class="number">64</div>
                <div class="weight">157.25</div>
                <div class="symbol">Gd</div>
                <div class="name">Gadolinium</div>
                <div class="year">1880</div>
            </td>
            <td class="transitional">
                <div class="number">65</div>
                <div class="weight">158.93</div>
                <div class="symbol">Tb</div>
                <div class="name">Terbium</div>
                <div class="year">1843</div>
            </td>
            <td class="transitional">
                <div class="number">66</div>
                <div class="weight">162.50</div>
                <div class="symbol">Dy</div>
                <div class="name">Dysprosium</div>
                <div class="year">1886</div>
            </td>
            <td class="transitional">
                <div class="number">67</div>
                <div class="weight">164.93</div>
                <div class="symbol">Ho</div>
                <div class="name">Holmium</div>
                <div class="year">1867</div>
            </td>
            <td class="transitional">
                <div class="number">68</div>
                <div class="weight">167.26</div>
                <div class="symbol">Er</div>
                <div class="name">Erbium</div>
                <div class="year">1842</div>
            </td>
            <td class="transitional">
                <div class="number">69</div>
                <div class="weight">168.93</div>
                <div class="symbol">Tm</div>
                <div class="name">Thulium</div>
                <div class="year">1879</div>
            </td>
            <td class="transitional">
                <div class="number">70</div>
                <div class="weight">173.04</div>
                <div class="symbol">Yb</div>
                <div class="name">Ytterbium</div>
                <div class="year">1878</div>
            </td>
            <td class="transitional">
                <div class="number">71</div>
                <div class="weight">174.97</div>
                <div class="symbol">Lu</div>
                <div class="name">Lutetium</div>
                <div class="year">1907</div>
            </td>
            <td colspan=2></td>
        </tr>
        <tr>
            <td colspan=2></td>
            <td colspan=16>
                <h3>Actinide series</h3></td>
        </tr>
        <tr>
            <td colspan=2></td>
            <td class="transitional">
                <div class="number">90</div>
                <div class="weight">232.04</div>
                <div class="symbol">Th</div>
                <div class="name">Thorium</div>
                <div class="year">1829</div>
            </td>
            <td class="transitional">
                <div class="number">91</div>
                <div class="weight">231.04</div>
                <div class="symbol">Pa</div>
                <div class="name">Protactinium</div>
                <div class="year">1913</div>
            </td>
            <td class="transitional">
                <div class="number">92</div>
                <div class="weight">238.03</div>
                <div class="symbol">U</div>
                <div class="name">Uranium</div>
                <div class="year">1789</div>
            </td>
            <td class="transitional">
                <div class="number">93</div>
                <div class="weight">237.00</div>
                <div class="symbol">Np</div>
                <div class="name">Neptunium</div>
                <div class="year">1940</div>
            </td>
            <td class="transitional">
                <div class="number">94</div>
                <div class="weight">244.00</div>
                <div class="symbol">Pu</div>
                <div class="name">Plutonium</div>
                <div class="year">1940</div>
            </td>
            <td class="transitional">
                <div class="number">95</div>
                <div class="weight">243.00</div>
                <div class="symbol">Am</div>
                <div class="name">Americium</div>
                <div class="year">1944</div>
            </td>
            <td class="transitional">
                <div class="number">96</div>
                <div class="weight">247.00</div>
                <div class="symbol">Cm</div>
                <div class="name">Curium</div>
                <div class="year">1944</div>
            </td>
            <td class="transitional">
                <div class="number">97</div>
                <div class="weight">247.00</div>
                <div class="symbol">Bk</div>
                <div class="name">Berkelium</div>
                <div class="year">1949</div>
            </td>
            <td class="transitional">
                <div class="number">98</div>
                <div class="weight">251.00</div>
                <div class="symbol">Cf</div>
                <div class="name">Californium</div>
                <div class="year">1950</div>
            </td>
            <td class="transitional">
                <div class="number">99</div>
                <div class="weight">252.00</div>
                <div class="symbol">Es</div>
                <div class="name">Einsteinium</div>
                <div class="year">1952</div>
            </td>
            <td class="transitional">
                <div class="number">100</div>
                <div class="weight">257.00</div>
                <div class="symbol">Fm</div>
                <div class="name">Fermium</div>
                <div class="year">1952</div>
            </td>
            <td class="transitional">
                <div class="number">101</div>
                <div class="weight">258.00</div>
                <div class="symbol">Md</div>
                <div class="name">Mendelevium</div>
                <div class="year">1955</div>
            </td>
            <td class="transitional">
                <div class="number">102</div>
                <div class="weight">259.00</div>
                <div class="symbol">No</div>
                <div class="name">Nobelium</div>
                <div class="year">1958</div>
            </td>
            <td class="transitional">
                <div class="number">103</div>
                <div class="weight">262.00</div>
                <div class="symbol">Lr</div>
                <div class="name">Lawrencium</div>
                <div class="year">1961</div>
            </td>
            <td colspan=2></td>
        </tr>
    </table>

    <!-- Every index page needs a horizontal rule, right? -->
    <br/>
    <hr style="width:90%; height:5px;" />

    <!-- Toby Ziegler, March 20th, 2014. This code validates to HTML5 and CSS3 -->

    <p style="text-align:center">&copy; - copyright 2015, Toby Ziegler</p>

    <p style="text-align:center"><a href="#TopofPage">Back to the top...</a></p>

    <!-- This code validates to HTML5, the W3C validation icons only list as high as 4.01 -->
    <!-- W3C validation icons located at http://www.w3.org/QA/Tools/Icons -->
    <!-- W3C validation icons code adapted from http://validator.w3.org/docs/help.html#icon-usage -->
    <p>
        <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401.gif" alt="Valid XHTML 4.01!" height="31" width="88" /></a>
    </p>
    <!-- This code validates to CSS level 3, the code below is taken from the link provided -->
    <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
        </a>
    </p>
</body>

</html>
