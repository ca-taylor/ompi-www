<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 15:11:29 2015" -->
<!-- isoreceived="20150611191129" -->
<!-- sent="Thu, 11 Jun 2015 13:11:35 -0600" -->
<!-- isosent="20150611191135" -->
<!-- name="Douglas L Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="94EAF2BA-C3A1-4B7E-9438-4DBBFDCC33B0_at_centurylink.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3338D43B4B3406468B642ACE86F41E7E3AE801DF_at_ucolhpks.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted segmentation fault in pmix on master<br>
<strong>From:</strong> Douglas L Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 15:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27106.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken,
<br>
<p>Why are the qsub ncpus and mpiirun -np different values.
<br>
<p>Doug
<br>
On Jun 11, 2015, at 12:08 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My qsub command is:
</span><br>
<span class="quotelev1">&gt; qsub -l select=10:ncpus=32:mpiprocs=32 -q debug -l walltime=01:00:00 -I
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also tried using ccm mode with no change in outcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My mpirun command is:
</span><br>
<span class="quotelev1">&gt; mpirun -np 9 -debug-daemons  ./parent child
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also attached the debug output for the particular daemon that crashes to this message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have access to a few other cray machines I can try this on, an XE6 and XC30.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ken Leiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 11, 2015 12:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Ken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you give the details of the allocation request (qsub args) as well as the mpirun command line args? I'm trying to reproduce on the nersc system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be interesting if you have access to a similar size non-cray cluster if you get the same problems. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I don&#146;t have a Cray, but let me see if I can reproduce this on something else
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev2">&gt; 	&gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden] &lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; Hello,
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; I am attempting to use the openmpi development master for a code that uses
</span><br>
<span class="quotelev2">&gt; 	&gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev2">&gt; 	&gt; Army Research Laboratory. After reading through the mailing list I came to
</span><br>
<span class="quotelev2">&gt; 	&gt; the conclusion that the master branch is the only hope for getting this to
</span><br>
<span class="quotelev2">&gt; 	&gt; work on the newer Cray machines.
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev2">&gt; 	&gt; when executing on a small number of processors, five or less, but begins to
</span><br>
<span class="quotelev2">&gt; 	&gt; fail with segmentation faults in orted when using more processors. Even with
</span><br>
<span class="quotelev2">&gt; 	&gt; five or fewer processors, I am spreading the computation to more than one
</span><br>
<span class="quotelev2">&gt; 	&gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev2">&gt; 	&gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev2">&gt; 	&gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev2">&gt; 	&gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev2">&gt; 	&gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
</span><br>
<span class="quotelev2">&gt; 	&gt; done the the else branch.
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; I have debug output dumped for the failing runs. I can provide the output
</span><br>
<span class="quotelev2">&gt; 	&gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; - Ken Leiter
</span><br>
<span class="quotelev2">&gt; 	&gt;
</span><br>
<span class="quotelev2">&gt; 	&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; 	&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; 	&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; 	&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; 	&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	_______________________________________________
</span><br>
<span class="quotelev1">&gt; 	users mailing list
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; 	Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 	Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;error_output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27102.php">http://www.open-mpi.org/community/lists/users/2015/06/27102.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27106.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27102.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27108.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
