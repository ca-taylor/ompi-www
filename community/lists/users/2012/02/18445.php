<?
$subject_val = "Re: [OMPI users] MPI orte_init fails on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 13:28:30 2012" -->
<!-- isoreceived="20120213182830" -->
<!-- sent="Mon, 13 Feb 2012 13:28:10 -0500" -->
<!-- isosent="20120213182810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI orte_init fails on remote nodes" -->
<!-- id="92A3059F-B385-4490-8894-8A1BBFFAF2CB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB6A05B478F84E7BA17F96A3880ED48D_at_starfish" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI orte_init fails on remote nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 13:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18444.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18444.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18450.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to fully uninstall the disto-installed version of Open MPI on all the nodes (e.g., Red Hat may have installed a different version of Open MPI, and that version is being found in your $PATH before your custom-installedversion).
<br>
<p><p>On Feb 13, 2012, at 12:12 PM, Richard Bardwell wrote:
<br>
<p><span class="quotelev1">&gt; OK, 1.4.4 is happily installed on both machines. But, I now get a really
</span><br>
<span class="quotelev1">&gt; weird error when running on the 2 nodes. I get
</span><br>
<span class="quotelev1">&gt; Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev1">&gt; even though I am just running with -np 2 -hostfile test.hst
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program runs fine on 2 cores if running locally on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----- From: &quot;Gustavo Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Monday, February 13, 2012 4:22 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 13, 2012, at 11:02 AM, Richard Bardwell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had done a make clean in the 1.2.8 directory if that is what you meant ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or do I need to do something else ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I appreciate your help on this by the way ;-)
</span><br>
<span class="quotelev2">&gt;&gt; Hi Richard
</span><br>
<span class="quotelev2">&gt;&gt; You can install in a different directory, totally separate from 1.2.8.
</span><br>
<span class="quotelev2">&gt;&gt; Create a new work directory [which is not the final installation directory, just work, say /tmp/openmpi/1.4.4/work].
</span><br>
<span class="quotelev2">&gt;&gt; Launch the OpenMPI 1.4.4 configure script from this new work directory with the --prefix pointing to your desired installation directory [e.g. /home/richard/openmpi/1.4.4/].
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming this is NFS mounted on the nodes [if you have a cluster].
</span><br>
<span class="quotelev2">&gt;&gt; [Check all options with 'configure --help'.]
</span><br>
<span class="quotelev2">&gt;&gt; Then do make, make install.
</span><br>
<span class="quotelev2">&gt;&gt; Finally set your PATH and LD_LIBRARY_PATH to point to the new installation directory,
</span><br>
<span class="quotelev2">&gt;&gt; to prevent mixing with the old 1.2.8.
</span><br>
<span class="quotelev2">&gt;&gt; I have a number of OpenMPI versions here, compiled with various compilers,
</span><br>
<span class="quotelev2">&gt;&gt; and they coexist well this way.
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, February 13, 2012 3:41 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to clean out the old attempt - that is a stale file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 13, 2012, at 7:36 AM, &quot;Richard Bardwell&quot; &lt;richard_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, I installed 1.4.4, rebuilt the exec and guess what ...... I now get some weird errors as below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_dash_host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; along with a few other files
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even though the .so / .la files are all there !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, February 13, 2012 2:59 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good heavens - where did you find something that old? Can you use a more recent version?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gentlemen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am struggling to get MPI working when the hostfile contains different nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get the error below. Any ideas ?? I can ssh without password between the two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes. I am running 1.2.8 MPI on both machines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any help most appreciated !!!!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPITEST/v8_mpi_test&gt; mpiexec -n 2 --debug-daemons -hostfile test.hst /home/sharc/MPITEST/v8_mpi_test/mpitest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 10490 on host 192.0.2.67
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open RTE was unable to initialize properly. The error occured while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: A daemon on node 192.0.2.68 failed to start as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: The daemon exited unexpectedly with status 243.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18444.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18444.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18446.php">Gustavo Correa: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18450.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
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
