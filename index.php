<?php
$static_title = 'Khronos OpenMAX AL Registry';
$static_breadcrumb = array(
    '/registry/' => 'Registry',
    'NOLINK' => 'OpenMAX AL Registry'
);
include_once("../../assets/static_pages/khr_page_top.php");
?>

<h1 class="pagetitle">Khronos OpenMAX&trade; AL Registry</h1>
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenMAX&trade; AL Registry </h1>

<p> The OpenMAX AL registry contains specifications of the core API;
    specifications of Khronos- and vendor-approved OpenMAX AL
    extensions; header files corresponding to the specifications; and
    other related documentation. </p>

<h6> OpenMAX AL Core API Specification and Headers </h6>

<p> The current version of OpenMAX AL is 1.1 </p>

<ul>
<li> <a href="specs/OpenMAX_AL_1_1_Specification.pdf"> OpenMAX AL 1.1
     Specification  (January 18, 2011)</a>. </li>
<li> OpenMAX AL 1.1 Header Files
     <ul>
     <li> <a href="api/1.1/OpenMAXAL.h"> OpenMAXAL.h </a>. </li>
     <li> <a href="api/1.1/OpenMAXAL_Platform.h"> OpenMAXAL_Platform.h </a>. </li>
     <li> <a href="api/1.1/OpenMAXAL_IID.c"> OpenMAXAL_IID.c </a>. </li>
     </ul> </li>
</ul>

<h6> OpenMAX Content Pipes API Specification </h6>

<!-- Lives in the OpenMAX IL registry, for now -->
<p> The current version of OpenMAX Content Pipes is 1.0 </p>

<ul>
<li> <a href="http://www.khronos.org/registry/omxil/specs/OpenMAX_Content_Pipe_1_0_Specification.pdf"> OpenMAX
     Content Pipes 1.0 Specification </a> (updated March 22, 2011). </li>
<li> Content Pipes <a href="http://www.khronos.org/registry/omxil/api/cpipes/1.0/CPA_ContentPipe.h">
     CPA_ContentPipe.h </a> header file. </li>
</ul>

<h6> Older Specifications </h6>

<p> Older versions of OpenMAX AL provided for reference. </p>

<ul>
<li> <a href="specs/OpenMAX_AL_1_0_1_Specification.pdf"> OpenMAX AL 1.0.1
     Specification  (March 12, 2010)</a>. </li>
<li> OpenMAX AL 1.0.1 Header Files

     <ul>
     <li> <a href="api/1.0.1/OpenMAXAL.h"> OpenMAXAL.h </a>. </li>
     <li> <a href="api/1.0.1/OpenMAXAL_Platform.h"> OpenMAXAL_Platform.h </a>. </li>
     <li> <a href="api/1.0.1/OpenMAXAL_IID.c"> OpenMAXAL_IID.c </a>. </li>
     </ul> </li>
</ul>

<ul>
<li> <a href="specs/OpenMAX_AL_1_0_Specification.pdf"> OpenMAX AL 1.0
     Specification </a> (July 2009). </li>
<li> <a href="api/1.0/OpenMAX_AL_1_0_Header.zip"> OpenMAX AL 1.0 Header
     Files </a> (single .zip file, or individually below).

     <ul>
     <li> <a href="api/1.0/OpenMAXAL.h"> OpenMAXAL.h </a>. </li>
     <li> <a href="api/1.0/OpenMAXAL_Platform.h"> OpenMAXAL_Platform.h </a>. </li>
     <li> <a href="api/1.0/OpenMAXAL_IID.c"> OpenMAXAL_IID.c </a>. </li>
     </ul> </li>
</ul>
<h6> <a name="otherextspecs"></a>
     Extension Specifications</h6>
<ol>
<li value=1> <a href="extensions/KHR/OpenMAX_AL_Digital_TV_Extension_Specification.pdf">OpenMAX AL Digital TV</a> (<a href="api/KHR/OpenMAX_AL_Digital_TV_Extension_Headers.zip">OpenMAX_AL_Digital_TV_Extension_Headers.zip</a>)
</li>
<li value=2> <a href="extensions/KHR/OpenMAX_AL_EGLStream_DataLocator_Extension_1_0_Specification.pdf">OpenMAX AL EGLStream DataLocator</a> (<a href="api/KHR/OpenMAXAL_EGL_Ext.h">OpenMAXAL_EGL_Ext.h</a>)
</li>
</ol>
<?php include_once("../../assets/static_pages/khr_page_bottom.php"); ?>
</body>
</html>
