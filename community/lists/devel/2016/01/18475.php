<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 10:33:16 2016" -->
<!-- isoreceived="20160106153316" -->
<!-- sent="Wed, 6 Jan 2016 07:33:12 -0800" -->
<!-- isosent="20160106153312" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab" -->
<!-- id="3ADD729D-479B-4B0F-A398-0507C83EC370_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5s2Xp5QCvo-Mo6e0CspQu7uisyM4ahL6KgcijEaodumgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 10:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>In reply to:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Reply:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;I don&#226;&#128;&#153;t see a second commit message anywhere. Did you perhaps forget to push it?
<br>
<p>Thanks for the explanation!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Jan 6, 2016, at 2:30 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That solves the multiple mtt failures that occurred with inter communicators and mpi_procs_cutoff.
</span><br>
<span class="quotelev1">&gt; You can reproduce this with allgather_inter from ibm/collective, --mca mpi_procs_cutoff 0, 8 tasks and two nodes.
</span><br>
<span class="quotelev1">&gt; Basically, a proc_list[i] can be a sentinel, so it is not always correct to simply dereference proc_list[i] in order to access its proc_name.
</span><br>
<span class="quotelev1">&gt; Note this commit is incomplete and I pushed a second one right after I figured it out.
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
<span class="quotelev1">&gt; On Wednesday, January 6, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please explain this one - I honestly don&#226;&#128;&#153;t understand the change, and haven&#226;&#128;&#153;t encountered a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 5, 2016, at 11:22 PM, gitdub_at_[hidden] &lt;javascript:;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  213b2abde47cf02ba3152a301d3ec0ffeec54438 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  e4bdad09c1bf7f11dada5ae6ac32e052b553ce4b (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438">https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438</a> &lt;<a href="https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438">https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 213b2abde47cf02ba3152a301d3ec0ffeec54438
</span><br>
<span class="quotelev2">&gt; &gt; Author: Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Wed Jan 6 16:21:13 2016 +0900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    dpm: correctly handle procs_cutoff in ompi_dpm_connect_accept()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/dpm/dpm.c b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9a236d0..b1c562e 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2011-2015 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt; &gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * Copyright (c) 2013-2015 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev2">&gt; &gt; - * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt; + * Copyright (c) 2014-2016 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt; &gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt; @@ -167,7 +167,13 @@ int ompi_dpm_connect_accept(ompi_communicator_t *comm, int root,
</span><br>
<span class="quotelev2">&gt; &gt;             dense = false;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         for (i=0; i &lt; size; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; -            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;(proc_list[i]-&gt;super.proc_name));
</span><br>
<span class="quotelev2">&gt; &gt; +            opal_process_name_t proc_name;
</span><br>
<span class="quotelev2">&gt; &gt; +            if (ompi_proc_is_sentinel (proc_list[i])) {
</span><br>
<span class="quotelev2">&gt; &gt; +                proc_name = ompi_proc_sentinel_to_name ((intptr_t) proc_list[i]);
</span><br>
<span class="quotelev2">&gt; &gt; +            } else {
</span><br>
<span class="quotelev2">&gt; &gt; +                proc_name = proc_list[i]-&gt;super.proc_name;
</span><br>
<span class="quotelev2">&gt; &gt; +            }
</span><br>
<span class="quotelev2">&gt; &gt; +            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;proc_name);
</span><br>
<span class="quotelev2">&gt; &gt;             if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt; &gt;                 if (!dense) {
</span><br>
<span class="quotelev2">&gt; &gt;                     free(proc_list);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt; ompi/dpm/dpm.c | 10 ++++++++--
</span><br>
<span class="quotelev2">&gt; &gt; 1 file changed, 8 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18473.php">http://www.open-mpi.org/community/lists/devel/2016/01/18473.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/01/18473.php">http://www.open-mpi.org/community/lists/devel/2016/01/18473.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18474.php">http://www.open-mpi.org/community/lists/devel/2016/01/18474.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18476.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI and NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>In reply to:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Reply:</strong> <a href="18478.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
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
