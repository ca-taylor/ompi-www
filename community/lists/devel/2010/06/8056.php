<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  5 04:27:06 2010" -->
<!-- isoreceived="20100605082706" -->
<!-- sent="Sat, 5 Jun 2010 02:26:56 -0600" -->
<!-- isosent="20100605082656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="FCE6134A-8003-474D-9446-D22B208BA27E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8C7AAB4C-F58E-4A25-9E0A-6AC8896A9259_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-05 04:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8057.php">�ž�: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8054.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8075.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point. I'll only add one more comment/question before crawling back under my rock.
<br>
<p>If you have a failover capability, why would you turn it &quot;off&quot; during a particular phase of the program?
<br>
<p>Imagine you are a user and your job has sat in the queue for an entire day. Just as it finally starts to run, a glitch hits the IB connection on one of the nodes you were assigned - the link was up during the initial setup, but then drops during the modex. Instead of riding thru and letting your job run, OMPI aborts because it happened at the beginning of the job instead of a split-second later. So now my job doesn't run, and I'm back to waiting in the queue again - even though the job -could- have run, and OMPI had the ability to let it do so.
<br>
<p>Note that a similar issue in the OOB would -not- cause the job to fail.
<br>
<p>Seems weird to me...but it is in the MPI layer, so feel free to do whatever you like! :-)
<br>
<p>On Jun 4, 2010, at 6:09 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; A clarification -- this specific issue is during add_procs(), which, for jobs that do not use the MPI-2 dynamics, is during MPI_INIT.  The #3 error detection/abort is not during the dynamic/lazy MPI peer connection wireup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The potential for long timeout delays mentioned in #1 would be during the the dynamic/lazy MPI peer connection wireup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2010, at 3:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think Rolf's reply makes a possibly bad assumption - i.e., that this problem is occurring just as the job is starting to run. Let me give you a real-life example where this wasn't true, and where aborting the job would make a very unhappy user:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We start a long-running job (i.e., days) on a very large cluster that has both IB and TCP connections. OMPI correctly places the IB network at highest priority. During the run, the IB connection on a node begins to have trouble. The node itself is fine, and the procs are fine - it is only the comm link that is having problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we could just abort - but a job this size cannot do checkpoint/restart as the memory consumption is just too large. The app does checkpoint itself (writing critical info to a file) periodically, but the computation is important to complete - rescheduling to get this much of the machine can add weeks of delay.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So we -really- need to have this job continue running, even at a lower performance, for as long as it possibly can.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Lest you think this is infrequent - think again. This happens constantly on large IB clusters. IB is flaky, to say the least, and long runs are constantly facing link problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eventually, we would like the BTL to recover when the IB link is &quot;fixed&quot;. Often, this requires the operator to reset the physical connector, or some other operation that can be done while the node is running. So having a mechanism by which jobs can keep running when a BTL connection &quot;fails&quot; for a period of time is a serious requirement.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2010, at 12:47 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 06/04/10 11:47, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 2, 2010, at 1:36 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We did assume that at least the errors are symmetric, i.e. if A fails to connect to B then B will fail when trying to connect to A. However, if there are other BTL the connection is supposed to smoothly move over some other BTL. As an example in the MX BTL, if two nodes have MX support, but they do not share the same mapper the add_procs will silently fails.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This sounds dodgy and icky.  We have to wait for a connect timeout to fail over to the next BTL?  How long is the typical/default TCP timeout?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After thinking about this more, I still do not think that this is good behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Short version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If a BTL is going to fail, it should do so early in the selection process and therefore disqualify itself.  Failing in add_procs() means that it lied in the selection process and has created a set of difficult implications for the rest of the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps the best compromise is that there should be an MCA parameter to choose between a) the &quot;failover&quot; behavior that George described (i.e., wait for the timeout and then have the PML/BML fail over to a 2nd BTL, if available), and b) abort the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If a BTL has advertised contact information in the modex but then an error in add_procs() causes the BTL to not be able to listen at that advertised contact point, I think that this is a very serious error.  I see a few options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. Current behavior supposedly has the PML fail over to another eligible BTL.  It's not entirely clear whether this functionality works or not, but even if it does, it can cause a lengthy &quot;hang&quot; *potentially for each connection* while we're waiting for the timeout before failing over to another connection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; IMHO: this behavior just invites user questions and bug reports.  It also is potentially quite expensive -- consider that in an MPI_ALLTOALL operation, every peer might have a substantial delay before it fails over to the secondary BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. When a BTL detects that it cannot honor its advertised contact information, either the BTL or the BML can send a modex update to all of the process peers, effectively eliminating that contact information.  This kind of asynchronous update seems racy and difficult -- could be difficult to get this right (indeed, the modex doesn't even currently support an after-the-fact update).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. When a BTL detects that it cannot honor its advertised contact information, it fails upward to the BML and the BML decides to abort the job. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think #2 is a bad idea.  I am leaning towards #3 simply because a BTL should not fail by the time it reaches add_procs().  If a BTL is going to fail, it should do so and disqualify itself earlier in the selection process.  Or, perhaps we can have an MCA parameter to switch between #1 and #3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or maybe someone can think of a #4 that would be better...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I like idea #3.  It is simple, explainable, and the job is aborting just as it is starting to run.  It seems these cases should be infrequent and may signify something is really wrong, so aborting the job is OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8057.php">�ž�: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8054.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8075.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
