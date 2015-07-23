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
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Distributing items over a topology</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:ga8b835295a52b6768a5e6c8abb1f9c54d"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00093.php#ga8b835295a52b6768a5e6c8abb1f9c54d">hwloc_distrib_flags_e</a> { <a class="el" href="a00093.php#gga8b835295a52b6768a5e6c8abb1f9c54da2ca08404bfbebe9ed5f34c3d7635425a">HWLOC_DISTRIB_FLAG_REVERSE</a>
 }</td></tr>
<tr class="separator:ga8b835295a52b6768a5e6c8abb1f9c54d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga2e3db06f766509ae2004ee4c8bbf5204"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00093.php#ga2e3db06f766509ae2004ee4c8bbf5204">hwloc_distrib</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *roots, unsigned n_roots, <a class="el" href="a00075.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *set, unsigned n, unsigned until, unsigned long flags)</td></tr>
<tr class="separator:ga2e3db06f766509ae2004ee4c8bbf5204"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="ga8b835295a52b6768a5e6c8abb1f9c54d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00093.php#ga8b835295a52b6768a5e6c8abb1f9c54d">hwloc_distrib_flags_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Flags to be given to <a class="el" href="a00093.php#ga2e3db06f766509ae2004ee4c8bbf5204" title="Distribute n items over the topology under roots. ">hwloc_distrib()</a>. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="gga8b835295a52b6768a5e6c8abb1f9c54da2ca08404bfbebe9ed5f34c3d7635425a"></a>HWLOC_DISTRIB_FLAG_REVERSE&#160;</td><td class="fielddoc">
<p>Distrib in reverse order, starting from the last objects. </p>
</td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga2e3db06f766509ae2004ee4c8bbf5204"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_distrib </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *&#160;</td>
          <td class="paramname"><em>roots</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>n_roots</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00075.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>n</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>until</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned long&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Distribute <code>n</code> items over the topology under <code>roots</code>. </p>
<p>Array <code>set</code> will be filled with <code>n</code> cpusets recursively distributed linearly over the topology under objects <code>roots</code>, down to depth <code>until</code> (which can be INT_MAX to distribute down to the finest level).</p>
<p><code>n_roots</code> is usually 1 and <code>roots</code> only contains the topology root object so as to distribute over the entire topology.</p>
<p>This is typically useful when an application wants to distribute <code>n</code> threads over a machine, giving each of them as much private cache as possible and keeping them locally in number order.</p>
<p>The caller may typically want to also call <a class="el" href="a00098.php#ga36d802130aa5d96bc1b5a90d2f0f3765" title="Keep a single index among those set in bitmap bitmap. ">hwloc_bitmap_singlify()</a> before binding a thread so that it does not move at all.</p>
<p><code>flags</code> should be 0 or a OR'ed set of <a class="el" href="a00093.php#ga8b835295a52b6768a5e6c8abb1f9c54d" title="Flags to be given to hwloc_distrib(). ">hwloc_distrib_flags_e</a>.</p>
<dl class="section note"><dt>Note</dt><dd>This function requires the <code>roots</code> objects to have a CPU set.</dd>
<dd>
This function replaces the now deprecated hwloc_distribute() and hwloc_distributev() functions. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");