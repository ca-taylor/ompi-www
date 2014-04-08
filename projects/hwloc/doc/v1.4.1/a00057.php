<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.7.6.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Cache-specific Finding Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
Functions</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00057.php#ga2f936fd9a9c62f6d9b9951de3062e889">hwloc_get_cache_covering_cpuset</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set) </td></tr>
<tr><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00057.php#ga000e08a1da039130daa072e77713bb43">hwloc_get_shared_cache_covering_obj</a> (<a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology , <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj) </td></tr>
</table>
<hr/><h2>Function Documentation</h2>
<a class="anchor" id="ga2f936fd9a9c62f6d9b9951de3062e889"></a><!-- doxytag: member="helper.h::hwloc_get_cache_covering_cpuset" ref="ga2f936fd9a9c62f6d9b9951de3062e889" args="(hwloc_topology_t topology, hwloc_const_cpuset_t set) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> <a class="el" href="a00057.php#ga2f936fd9a9c62f6d9b9951de3062e889">hwloc_get_cache_covering_cpuset</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the first cache covering a cpuset <code>set</code>. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no cache matches.</dd></dl>
<dl class="note"><dt><b>Note:</b></dt><dd>This function cannot work if the root object does not have a CPU set, e.g. if the topology is made of different machines. </dd></dl>

</div>
</div>
<a class="anchor" id="ga000e08a1da039130daa072e77713bb43"></a><!-- doxytag: member="helper.h::hwloc_get_shared_cache_covering_obj" ref="ga000e08a1da039130daa072e77713bb43" args="(hwloc_topology_t topology , hwloc_obj_t obj) " -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> <a class="el" href="a00057.php#ga000e08a1da039130daa072e77713bb43">hwloc_get_shared_cache_covering_obj</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00039.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology&#160;</td>
          <td class="paramname"><em></em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00042.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td><code> [static]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get the first cache shared between an object and somebody else. </p>
<dl class="return"><dt><b>Returns:</b></dt><dd><code>NULL</code> if no cache matches or if an invalid object is given. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");