<?
$subject_val = "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 04:12:27 2014" -->
<!-- isoreceived="20140625081227" -->
<!-- sent="Wed, 25 Jun 2014 03:12:26 -0500" -->
<!-- isosent="20140625081226" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality" -->
<!-- id="CAMD57ofCYukKiGEFbVGx=yJQ-keUEGX==h3dGQwD_4bCzTZ4tw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53AA3917.5070702_at_iferc.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 04:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saw it and will review - thanks!
<br>
<p><p><p>On Tue, Jun 24, 2014 at 9:51 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i pushed the change (r32079) and updated the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the RFC can be now closed and the consensus is semantic of
</span><br>
<span class="quotelev1">&gt; opal_hwloc_base_get_relative_locality
</span><br>
<span class="quotelev1">&gt; will not be changed since this is not needed : the hang is a coll/ml bug,
</span><br>
<span class="quotelev1">&gt; so it will be fixed within coll/ml.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/06/25 1:12, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, we should make that change, if you wouldn't mind doing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 24, 2014 at 9:43 AM, Gilles GOUAILLARDET &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That makes perfect sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about FCA_IS_LOCAL_PROCESS ?
</span><br>
<span class="quotelev1">&gt; Shall we keep it or shall we use directly OPAL_PROC_ON_LOCAL_NODE directly
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We discussed this at the devel conference this morning. The root cause of
</span><br>
<span class="quotelev1">&gt; the problem is a test in coll/ml that we feel is incorrect - it basically
</span><br>
<span class="quotelev1">&gt; checks to see if the proc itself is bound, and then assumes that all other
</span><br>
<span class="quotelev1">&gt; procs are similarly bound. This in fact is never guaranteed to be true as
</span><br>
<span class="quotelev1">&gt; someone could use the rank_file method to specify that some procs are to be
</span><br>
<span class="quotelev1">&gt; left unbound, while others are to be bound to specified cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan has looked at that check before and believes it isn't necessary.
</span><br>
<span class="quotelev1">&gt; All coll/ml really needs to know is that the two procs share the same node,
</span><br>
<span class="quotelev1">&gt; and the current locality algorithm will provide that information. We have
</span><br>
<span class="quotelev1">&gt; asked him to &quot;fix&quot; the coll/ml selection logic to resolve that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After then discussing the various locality definitions, it was our feeling
</span><br>
<span class="quotelev1">&gt; that the current definition is probably the better one unless you have a
</span><br>
<span class="quotelev1">&gt; reason for changing it other than coll/ml. If so, we'd be happy to revisit
</span><br>
<span class="quotelev1">&gt; the proposal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 24, 2014 at 3:24 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  WHAT: semantic change of opal_hwloc_base_get_relative_locality
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:  make is closer to what coll/ml expects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Currently, opal_hwloc_base_get_relative_locality means &quot;at what
</span><br>
<span class="quotelev1">&gt; level do these procs share cpus&quot;
</span><br>
<span class="quotelev1">&gt;       however, coll/ml is using it as &quot;at what level are these procs
</span><br>
<span class="quotelev1">&gt; commonly bound&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       it is important to note that if a task is bound to all the
</span><br>
<span class="quotelev1">&gt; available cpus, locality should
</span><br>
<span class="quotelev1">&gt;       be set to OPAL_PROC_ON_NODE only.
</span><br>
<span class="quotelev1">&gt;       /* e.g. on a single socket Sandy Bridge system, use
</span><br>
<span class="quotelev1">&gt; OPAL_PROC_ON_NODE instead of OPAL_PROC_ON_L3CACHE */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       This has been initially discussed in the devel mailing list
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       as advised by Ralph, i browsed the source code looking for how the
</span><br>
<span class="quotelev1">&gt; (ompi_proc_t *)-&gt;proc_flags is used.
</span><br>
<span class="quotelev1">&gt;       so far, it is mainly used to figure out wether the proc is on the
</span><br>
<span class="quotelev1">&gt; same node or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       notable exceptions are :
</span><br>
<span class="quotelev1">&gt;        a) ompi/mca/sbgp/basesmsocket/sbgp_basesmsocket_component.c :
</span><br>
<span class="quotelev1">&gt; OPAL_PROC_ON_LOCAL_SOCKET
</span><br>
<span class="quotelev1">&gt;        b) ompi/mca/coll/fca/coll_fca_module.c and
</span><br>
<span class="quotelev1">&gt; oshmem/mca/scoll/fca/scoll_fca_module.c : FCA_IS_LOCAL_PROCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       about a) the new definition fixes a hang in coll/ml
</span><br>
<span class="quotelev1">&gt;       about b) FCA_IS_LOCAL_SOCKET looks like legacy code /* i could only
</span><br>
<span class="quotelev1">&gt; found OMPI_PROC_FLAG_LOCAL in v1.3 */
</span><br>
<span class="quotelev1">&gt;       so this macro can be simply removed and replaced with
</span><br>
<span class="quotelev1">&gt; OPAL_PROC_ON_LOCAL_NODE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       at this stage, i cannot find any objection not to do the described
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev1">&gt;       please report if any and/or feel free to comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: see the two attached patches
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: June 30th, after the Open MPI developers meeting in Chicago,
</span><br>
<span class="quotelev1">&gt; June 24-26.
</span><br>
<span class="quotelev1">&gt;          The RFC will become final only after the meeting.
</span><br>
<span class="quotelev1">&gt;          /* Ralph already added this topic to the agenda */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15046.php">http://www.open-mpi.org/community/lists/devel/2014/06/15046.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/06/15049.php">http://www.open-mpi.org/community/lists/devel/2014/06/15049.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15050.php">http://www.open-mpi.org/community/lists/devel/2014/06/15050.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15052.php">http://www.open-mpi.org/community/lists/devel/2014/06/15052.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
