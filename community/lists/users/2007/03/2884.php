<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 14:38:51 2007" -->
<!-- isoreceived="20070322183851" -->
<!-- sent="Thu, 22 Mar 2007 12:38:43 -0600" -->
<!-- isosent="20070322183843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes  swapping out" -->
<!-- id="C2282953.2234%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C228356B.127C%heywood_at_cshl.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 14:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/22/07 11:30 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, according to the FAQ, aggressive mode can be &quot;forced&quot; so I did try
</span><br>
<span class="quotelev1">&gt; setting OMPI_MCA_mpi_yield_when_idle=0 before running. I also tried turning
</span><br>
<span class="quotelev1">&gt; processor/memory affinity on. Efffects were minor. The MPI tasks still cycle
</span><br>
<span class="quotelev1">&gt; bewteen run and sleep states, driving up system time well over user time.
</span><br>
<p>Yes, that's true - and we do (should) respect any such directive.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mpstat shows SGE is indeed giving 4 or 2 slots per node as approporiate
</span><br>
<span class="quotelev1">&gt; (depending on memory) and the MPI tasks are using 4 or 2 cores, but to be
</span><br>
<span class="quotelev1">&gt; sure, I also tried running directly with a hostfile with slots=4 or slots=2.
</span><br>
<span class="quotelev1">&gt; The same behavior occurs.
</span><br>
<p>Okay - thanks for trying that!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This behavior is a function of the size of the job. I.e. As I scale from 200
</span><br>
<span class="quotelev1">&gt; to 800 tasks the run/sleep cycling increases, so that system time grows from
</span><br>
<span class="quotelev1">&gt; maybe half the user time to maybe 5 times user time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is for TCP/gigE.
</span><br>
<p>What version of OpenMPI are you using? This sounds like something we need to
<br>
investigate.
<br>
<p>Thanks for the help!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Todd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/22/07 12:19 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just for clarification: ompi_info only shows the *default* value of the MCA
</span><br>
<span class="quotelev2">&gt;&gt; parameter. In this case, mpi_yield_when_idle defaults to aggressive, but
</span><br>
<span class="quotelev2">&gt;&gt; that value is reset internally if the system sees an &quot;oversubscribed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; condition.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The issue here isn't how many cores are on the node, but rather how many
</span><br>
<span class="quotelev2">&gt;&gt; were specifically allocated to this job. If the allocation wasn't at least 2
</span><br>
<span class="quotelev2">&gt;&gt; (in your example), then we would automatically reset mpi_yield_when_idle to
</span><br>
<span class="quotelev2">&gt;&gt; be non-aggressive, regardless of how many cores are actually on the node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/22/07 7:14 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I'm using SGE. I also just noticed that when 2 tasks/slots run on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4-core node, the 2 tasks are still cycling between run and sleep, with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; higher system time than user time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ompi_info shows the MCA parameter mpi_yield_when_idle to be 0 (aggressive),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that suggests the tasks aren't swapping out on bloccking calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Still puzzled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/22/07 7:36 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you using a scheduler on your system?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More specifically, does Open MPI know that you have for process slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on each node?  If you are using a hostfile and didn't specify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;slots=4&quot; for each host, Open MPI will think that it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oversubscribing and will therefore call sched_yield() in the depths
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of its progress engine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 21, 2007, at 5:08 PM, Heywood, Todd wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.s. I should have said this this is a pretty course-grained
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and netstat doesn't show much communication going on (except in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stages).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 3/21/07 4:21 PM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I noticed that my OpenMPI processes are using larger amounts of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; system time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than user time (via vmstat, top). I'm running on dual-core, dual-CPU
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Opterons, with 4 slots per node, where the program has the nodes to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; themselves. A closer look showed that they are constantly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; switching between
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run and sleep states with 4-8 page faults per second.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Why would this be? It doesn't happen with 4 sequential jobs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; running on a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node, where I get 99% user time, maybe 1% system time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The processes have plenty of memory. This behavior occurs whether
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processor/memory affinity or not (there is no oversubscription).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Todd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>In reply to:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Reply:</strong> <a href="2885.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
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
