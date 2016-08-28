<?
$subject_val = "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 18:47:42 2010" -->
<!-- isoreceived="20100517224742" -->
<!-- sent="Mon, 17 May 2010 16:47:37 -0600" -->
<!-- isosent="20100517224737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode" -->
<!-- id="AANLkTimuiTWzugDfEiGFttrqoVv0qvKk-mx0bUOl7qSC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik3aUw3b2lrTAGQ9CcpE318yPRvMJ5bNfOU6uJq_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 18:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13069.php">Peter Kruse: "[OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>In reply to:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, according to this, it looks like the process ranks are being
<br>
incorrectly assigned. Shouldn't have anything to do with what environ we are
<br>
in (slurm, rsh, etc).
<br>
<p>I'll look into it - thanks!
<br>
<p>On Mon, May 17, 2010 at 4:25 PM, Christopher Maestas &lt;cdmaestas_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; OK.  The -np only run:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; sh-3.1$ mpirun -np 2 --display-allocation --display-devel-map mpi_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
</span><br>
<span class="quotelev1">&gt;  State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51868,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 0
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 0    Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: Not defined     Daemon launched: False
</span><br>
<span class="quotelev1">&gt;         Num slots: 0    Slots in use: 0
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 0    Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0400
</span><br>
<span class="quotelev1">&gt;         Npernode: 0     Oversubscribe allowed: TRUE     CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;         Num new daemons: 1      New daemon starting vpid 1
</span><br>
<span class="quotelev1">&gt;         Num nodes: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
</span><br>
<span class="quotelev1">&gt;  State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51868,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 1
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[51868,1],0]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51868,0],1]   Daemon launched: False
</span><br>
<span class="quotelev1">&gt;         Num slots: 0    Slots in use: 1
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[51868,1],1]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; Hello, I am node cut1n8 with rank 1
</span><br>
<span class="quotelev1">&gt; Hello, I am node cut1n7 with rank 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before the segfault I got (using -npernode):
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; sh-3.1$ mpirun -npernode 1 --display-allocation --display-devel-map
</span><br>
<span class="quotelev1">&gt; mpi_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
</span><br>
<span class="quotelev1">&gt;  State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51942,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 0
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 0    Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: Not defined     Daemon launched: False
</span><br>
<span class="quotelev1">&gt;         Num slots: 0    Slots in use: 0
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 0    Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0400
</span><br>
<span class="quotelev1">&gt;         Npernode: 1     Oversubscribe allowed: TRUE     CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;         Num new daemons: 1      New daemon starting vpid 1
</span><br>
<span class="quotelev1">&gt;         Num nodes: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n7            Launch id: -1   Arch: ffc91200
</span><br>
<span class="quotelev1">&gt;  State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51942,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 1
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[51942,1],0]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: cut1n8            Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[51942,0],1]   Daemon launched: False
</span><br>
<span class="quotelev1">&gt;         Num slots: 0    Slots in use: 1
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 0  Max slots: 0
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[51942,1],0]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 1]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x2aed0f93af8b]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 2]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
</span><br>
<span class="quotelev1">&gt; [0x2aed0f9462f5]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 3]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
</span><br>
<span class="quotelev1">&gt; [0x2aed0f94d31b]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 4]
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
</span><br>
<span class="quotelev1">&gt; [0x2aed107f6ecf]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 5] mpirun [0x40335a]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 6] mpirun [0x4029f3]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x37bce1d8b4]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] [ 8] mpirun [0x402929]
</span><br>
<span class="quotelev1">&gt; [cut1n7:19375] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll look into a slurm version update.  Previously, SLURM 1.0.30 and Open
</span><br>
<span class="quotelev1">&gt; MPI 1.3.2 working together.  Just curious what was giving me heartache here
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 17, 2010 at 4:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a pretty old version of slurm - I don't have access to anything
</span><br>
<span class="quotelev2">&gt;&gt; that old to test against. You could try running it with --display-allocation
</span><br>
<span class="quotelev2">&gt;&gt; --display-devel-map to see what ORTE thinks the allocation is and how it
</span><br>
<span class="quotelev2">&gt;&gt; mapped the procs. It sounds like something may be having a problem there...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, May 17, 2010 at 11:08 AM, Christopher Maestas &lt;
</span><br>
<span class="quotelev2">&gt;&gt; cdmaestas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been having some troubles with OpenMPI 1.4.X and slurm recently.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem to be able to run jobs this way ok:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sh-3.1$ mpirun -np 2 mpi_hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node cut1n7 with rank 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, I am node cut1n8 with rank 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However if I try and use the -npernode option I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sh-3.1$ mpirun -npernode 1 mpi_hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] Failing at address: 0x50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 0] /lib64/libpthread.so.0 [0x37bda0de80]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b73eb84df8b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x655)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b73eb8592f5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x10b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b73eb86031b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/mpi/openmpi/1.4.2-gcc-4.1.2-may.12.10/lib/openmpi/mca_plm_slurm.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2b73ec709ecf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 5] mpirun [0x40335a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 6] mpirun [0x4029f3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x37bce1d8b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] [ 8] mpirun [0x402929]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cut1n7:16368] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is ompi 1.4.2, gcc 4.1.1 and slurm 2.0.9 ... I'm sure it's a rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; silly detail on my end, but figure I should start this thread for any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; insights and feedback I can help provide to resolve this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cdm
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13069.php">Peter Kruse: "[OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
<li><strong>In reply to:</strong> <a href="13067.php">Christopher Maestas: "Re: [OMPI users] running a ompi 1.4.2 job with -np versus -npernode"</a>
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