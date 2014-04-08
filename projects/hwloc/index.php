<?php
$topdir = "../..";
$title = "Portable Hardware Locality (hwloc)";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<div style="float: right; padding-left: 6px">
 <a href="devel09-pci.png">
  <img src="devel09-pci.png" width="405px" alt="Sample hwloc output">
</a></div>

<div style="float: right; clear: both"><!-- "clear: both" prevents news from going near the float image above -->
<?php 
# Lists are not mirrored - use an absolute URL
news("hwloc v1.9 released",
     "New feature release",
     "http://www.open-mpi.org/community/lists/hwloc-announce/2014/03/0068.php");
news("Network Locality (netloc)",
     "New hwloc companion",
     "http://blogs.cisco.com/performance/the-network-locality-project-netloc/");
news("hwloc tutorial material",
     "Slides and code available",
     "$topdir/projects/hwloc/tutorials");
?>
</div>

<p> The Portable Hardware Locality (hwloc) software package provides a
portable abstraction (across OS, versions, architectures, ...)  of the
hierarchical topology of modern architectures, including NUMA memory
nodes, sockets, shared caches, cores and simultaneous
multithreading. It also gathers various system attributes such as
cache and memory information as well as the locality of I/O devices
such as network interfaces, InfiniBand HCAs or GPUs.
It primarily aims at helping
applications with gathering information about modern computing
hardware so as to exploit it accordingly and efficiently.</p>

<!------------------------------------------------------------------------->

<h3>Portability and support</h3>

<p> hwloc supports the following operating systems:</p>

<p><ul>
<li>Linux (including old kernels not having sysfs topology
information, with knowledge of cpusets, offline CPUs, ScaleMP vSMP,
NumaScale NumaConnect, and Kerrighed support)</li>
<li>Solaris</li>
<li>AIX</li>
<li>Darwin / OS X</li>
<li>FreeBSD and its variants (such as kFreeBSD/GNU)</li>
<li>NetBSD</li>
<li>OSF/1 (a.k.a., Tru64)</li>
<li>HP-UX</li>
<li>Microsoft Windows</li>
<li>IBM BlueGene/Q Compute Node Kernel (CNK)</li>
</ul></p>

<p>Additionally hwloc can detect the locality PCI devices as well as OpenCL,
CUDA and Xeon Phi accelerators, network and InfiniBand interfaces,
etc.</p>

<p>Since it uses standard Operating System information, hwloc's support is
almost always independent from the processor type (x86, powerpc, ia64, ...),
and just relies on the Operating System support. The only exception to this is
kFreeBSD, which does not support topology information, and hwloc thus uses an
x86-only CPUID-based backend (which could be used for other OSes too).</p>

<p>To check whether hwloc works on a particular machine, just try to build
it and run <tt>lstopo</tt> If some things do not look right (e.g. bogus or
missing cache information), see Questions and bugs below</p>

<p> hwloc may display the topology in multiple convenient formats (see
<a href="doc/v<?php print($ver_current); ?>/#cli_examples">v<?php
print($ver_current); ?> examples</a>).
It also offers a powerful programming interface to gather information
about the hardware, bind processes, and much more.</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p> More details are available in the <a href="doc/">Documentation</a>
(in both PDF and HTML).  The documentation for each version contains
<a href="doc/v<?php print($ver_current); ?>/#cli_examples">examples of
outputs</a> and an <a href="doc/v<?php print($ver_current);
?>/#interface">API interface example</a> (these links are for v<?php
print($ver_current); ?>).</p>

<p>The materials from several hwloc tutorials is
<a href="<?php print "$topdir/projects/hwloc/tutorials" ?>">available online</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Getting and using hwloc</h3>

<p> The latest hwloc releases are available on the
<a href="../../software/hwloc/<?php print($ver_current_dir); ?>/">download page</a>.
The GIT repository is also accessible for
<a href="https://github.com/open-mpi/hwloc">online browsing</a>
or <a href="git.php">checkout</a>.
<br />
Perl bindings are available from Bernd Kallies
<a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/">on CPAN</a>.
<br />
Python bindings are available from Guy Streeter
as <a href="http://people.redhat.com/streeter/">Fedora RPM and tarball</a>
or within their <a href="git://git.fedorahosted.org/python-hwloc.git">git tree</a>
(<a href="http://git.fedorahosted.org/git/python-hwloc.git">html</a>).
</p>

<p> The following software already benefit from hwloc or are being
ported to it:<ul>
<li>MPI implementations and tools</li><ul>
 <li><a href="http://www.open-mpi.org">Open MPI</a></li>
 <li>The <a
 href="http://www.mcs.anl.gov/research/projects/mpich2/">MPICH2</a>
 process launcher Hydra</li>
 <li><a href="http://mvapich.cse.ohio-state.edu/">MVAPICH2</a></li>
 <li>The parallel job inspector <a
 href="http://padb.pittman.org.uk/">Padb</a></li>
</ul>
<li>Runtime systems and compilers</li><ul>
 <li>The <a
 href="http://runtime.bordeaux.inria.fr/forestgomp">ForestGOMP</a>
 OpenMP platform for hierarchical architectures</li>
 <li>The <a href="http://runtime.bordeaux.inria.fr/StarPU">StarPU</a>
 runtime system for heterogeneous multicore architectures</li>
 <li>The Directed Acyclic Graph Unified Environment
 (<a href="http://icl.cs.utk.edu/dague/">DAGuE</a>) project</li>
 <li>The Qthreads project (<a
 href="http://www.cs.sandia.gov/qthreads/">site 1</a>, <a
 href="http://code.google.com/p/qthreads/">site 2</a>)</li>
 <li> The <a href="http://www.rosecompiler.org/">Rose compiler</a></li>
</ul>
<li>Parallel scientific libraries</li><ul>
 <li>The <a href="http://pastix.gforge.inria.fr/">Parallel Sparse matriX</a>
 package (PaStiX)</li>
 <li>The Parallel Linear Algebra for Scalable Multi-core Architectures
 (<a href="http://icl.cs.utk.edu/plasma/">PLASMA</a>) project</li>
</ul>
<li>Resource manager and job schedulers</li><ul>
 <li>The <a href="http://gridscheduler.sourceforge.net/">Open Grid Scheduler</a></li>
 <li>The <a href="http://www.clusterresources.com/products/torque-resource-manager.php">Torque resource manager</a></li>
 <li>The <a href="http://www.univa.com/products/grid-engine">Univa Grid Engine</a></li>
 <li>The <a href="http://arc.liv.ac.uk/trac/SGE/">Son of Grid Engine</a> project</li>
 <li>Altair's <a href="http://www.pbsworks.com/Product.aspx?id=1">PBS Professional</a> solution (part of PBS Works)</li>
</ul>
<li>and even more!</li><ul>
 <li>The interactive process viewer <a href="http://htop.sourceforge.net/">htop</a> for Linux</a></li>
 <li><a href="http://trafficserver.apache.org/">Apache Traffic Server</a></li>
</ul></ul></p>

<!------------------------------------------------------------------------->

<h3>How do you pronounce "hwloc"?</h3>

<p> When in doubt, say "hardware locality."</p>

<p> Some of the core developers say "H. W. Loke"; others say 
"H. W. Lock".  We've heard several other pronunciations as well.  We
don't really have a strong preference for <em>how</em> you say it; we
chose the name for its Google-ability, not its pronunciation.</p>

<p>  But now at least you know how <em>we</em> pronounce it.  :-)</p>

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/hwloc.php">hwloc mailing lists</a>.  When
appropriate, please attach the <tt>/proc</tt> + <tt>/sys</tt> tarball
generated by the installed script <tt>hwloc-gather-topology</tt> when
submitting problems about Linux, or send the
output of <tt>kstat cpu_info</tt> in the Solaris case, or the output
of <tt>sysctl hw</tt> in the Darwin or BSD cases.  Also make sure you
run a recent OS (e.g. Linux kernel) and possibly a recent BIOS too
since hwloc gathers topology information from them.  Passing
<tt>--enable-debug</tt> to <tt>./configure</tt> also enables a lot of
helpful debugging information.</p>

<p>Also be sure to see the <a
href="https://git.open-mpi.org/trac/hwloc/">hwloc wiki and bug tracking
system</a>.</a>

<!------------------------------------------------------------------------->

<h3>Publications</h3>

<p>
 Many hwloc-related publications are listed at the bottom of the
 <a href="http://runtime.bordeaux.inria.fr/hwloc/">Inria hwloc research page</a>
 and in the
 <a href="http://www.open-mpi.org/papers/">Open MPI publication list</a>.
</p>
<p>
 If you are looking for general-purpose hwloc citations, please use this one:
</p>
<blockquote>
 François Broquedis, Jérôme Clet-Ortega, Stéphanie Moreaud, Nathalie Furmento, Brice Goglin, Guillaume Mercier, Samuel Thibault, and Raymond Namyst.
 <b>hwloc: a Generic Framework for Managing Hardware Affinities in HPC Applications.</b>
 In <em>Proceedings of the 18th Euromicro International Conference on Parallel, Distributed and Network-Based Processing (PDP2010)</em>,
 Pisa, Italia, February 2010.
 IEEE Computer Society Press.
</blockquote>
<p>
 This paper (available <a href="http://hal.inria.fr/inria-00429889">here</a>)
 introduces hwloc, its goals and its implementation.
 It then shows how hwloc may be used by MPI implementations and OpenMP
 runtime systems as a way to carefully place processes and adapt communication
 strategies to the underlying hardware.
</p>

<!------------------------------------------------------------------------->

<h3>History / credits</h3>

<p>hwloc is the evolution and merger of the <a
href="http://runtime.bordeaux.inria.fr/libtopology/">libtopology</a>
project and the <a href="../plpa/">Portable Linux Processor Affinity
(PLPA)</a> project.  Because of functional and ideological overlap,
these two code bases and ideas were merged and released under the name
"hwloc" as an Open MPI sub-project.</p>

<p><a href="http://www.inria.fr/"><img align="right" hspace="10" src="<?php print($topdir); ?>/about/members/inria.jpg"></a></p>

<p>libtopology was initially developed by the <a
href="http://runtime.bordeaux.inria.fr">Inria Runtime Team-Project</a>
(headed by <a href="http://dept-info.labri.fr/~namyst/">Raymond
Namyst</a>).  PLPA was initially developed by the Open MPI development
team as a sub-project.  Both are now deprecated in favor of hwloc,
which is distributed here as an Open MPI sub-project.</p>

<p>Portability tests are performed thanks to
the Inria <a href="https://ci.inria.fr/hwloc/">Continuous Integration</a> platform,
and the Inria <a href="http://pipol.inria.fr/">PIPOL</a> platform.
</p>

<?php
include_once("$topdir/includes/footer.inc");