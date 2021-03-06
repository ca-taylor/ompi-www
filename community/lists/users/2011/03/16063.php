<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 08:31:28 2011" -->
<!-- isoreceived="20110331123128" -->
<!-- sent="Thu, 31 Mar 2011 08:30:55 -0400" -->
<!-- isosent="20110331123055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="3B495735-88FA-4505-9C5E-DDC69EB416B7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinxVti+JT3nR6dn1iZEsyKX3p4rZdYh9j78wvPE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 08:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16064.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16062.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>In reply to:</strong> <a href="16059.php">Nehemiah Dacres: "[OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error message seems to imply that you don't have OMPI installed on all your nodes (because it didn't find /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted on a remote node).
<br>
<p><p>On Mar 30, 2011, at 4:24 PM, Nehemiah Dacres wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to figure out why my jobs aren't getting distributed and need some help. I have an install of sun cluster tools on Rockscluster 5.2 (essentially centos4u2). this user's account has its home dir shared via nfs. I am getting some strange errors. here's an example run 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun -np 3 -hostfile list ./job2.sh 
</span><br>
<span class="quotelev1">&gt; bash: /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 20362) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/
</span><br>
<span class="quotelev1">&gt; bin/        examples/   instrument/ man/        
</span><br>
<span class="quotelev1">&gt; etc/        include/    lib/        share/      
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orte
</span><br>
<span class="quotelev1">&gt; orte-clean  orted       orte-iof    orte-ps     orterun     
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted 
</span><br>
<span class="quotelev1">&gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orted/orted_main.c at line 325
</span><br>
<span class="quotelev1">&gt; [jian_at_therock ~]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator 
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16064.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16062.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>In reply to:</strong> <a href="16059.php">Nehemiah Dacres: "[OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
