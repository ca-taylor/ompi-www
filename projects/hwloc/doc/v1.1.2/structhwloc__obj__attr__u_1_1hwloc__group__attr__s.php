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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
  <div id="nav-path" class="navpath">
    <ul>
      <li class="navelem"><a class="el" href="unionhwloc__obj__attr__u.php">hwloc_obj_attr_u</a>      </li>
      <li class="navelem"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php">hwloc_group_attr_s</a>      </li>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<h1>hwloc_obj_attr_u::hwloc_group_attr_s Struct Reference</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="hwloc_obj_attr_u::hwloc_group_attr_s" -->
<p>Group-specific Object Attributes.  
<a href="#_details">More...</a></p>

<p><code>#include &lt;<a class="el" href="hwloc_8h_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php#ad914eac61c77481e1b7037877bcc5579">depth</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Depth of group object.  <a href="#ad914eac61c77481e1b7037877bcc5579"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<div class="textblock"><p>Group-specific Object Attributes. </p>
</div><hr/><h2>Field Documentation</h2>
<a class="anchor" id="ad914eac61c77481e1b7037877bcc5579"></a><!-- doxytag: member="hwloc_obj_attr_u::hwloc_group_attr_s::depth" ref="ad914eac61c77481e1b7037877bcc5579" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned <a class="el" href="structhwloc__obj__attr__u_1_1hwloc__group__attr__s.php#ad914eac61c77481e1b7037877bcc5579">hwloc_obj_attr_u::hwloc_group_attr_s::depth</a></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Depth of group object. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="hwloc_8h_source.php">hwloc.h</a></li>
</ul>
</div>
<?php
include_once("$topdir/includes/footer.inc");
