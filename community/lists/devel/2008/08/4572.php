<?
$subject_val = "Re: [OMPI devel] Checkpoint/Restart svn trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 12:06:41 2008" -->
<!-- isoreceived="20080812160641" -->
<!-- sent="Tue, 12 Aug 2008 13:06:36 -0300" -->
<!-- isosent="20080812160636" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/Restart svn trunk" -->
<!-- id="4226a8f0808120906m40db12bfn873d9397126608ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC6D3360-8D0C-4E3B-BC1F-CECFF9678ADC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Checkpoint/Restart svn trunk<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 12:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4573.php">Ralph Campbell: "[OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>In reply to:</strong> <a href="4569.php">Jeff Squyres: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. Now it's working.
<br>
<p>On Tue, Aug 12, 2008 at 8:21 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ralph committed a proper fix yesterday; see if that works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2008, at 7:44 PM, Caciano Machado wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an ugly hack that I'm using to get this working in Linux until
</span><br>
<span class="quotelev2">&gt;&gt; Josh returns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ##########################################################
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi-trunk/orte/util/hnp_contact.c  2008-08-12 12:10:07.000000000
</span><br>
<span class="quotelev2">&gt;&gt; +0200
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi-trunk-caciano/orte/util/hnp_contact.c  2008-08-12
</span><br>
<span class="quotelev2">&gt;&gt; 12:08:52.000000000 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -255,7 +255,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;         * See if a contact file exists in this directory and read it
</span><br>
<span class="quotelev2">&gt;&gt;         */
</span><br>
<span class="quotelev2">&gt;&gt;        contact_filename = opal_os_path( false, headdir,
</span><br>
<span class="quotelev2">&gt;&gt; -                                        dir_entry-&gt;d_name, &quot;contact.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +                                        dir_entry-&gt;d_name,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0/contact.txt&quot;, NULL );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        hnp = OBJ_NEW(orte_hnp_contact_t);
</span><br>
<span class="quotelev2">&gt;&gt;        if (ORTE_SUCCESS == (ret =
</span><br>
<span class="quotelev2">&gt;&gt; orte_read_hnp_contact_file(contact_filename, hnp))) {
</span><br>
<span class="quotelev2">&gt;&gt; ##########################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 11, 2008 at 8:28 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is likely to two things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - we just made some minor changes to the session directory stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the checkpoint/restart guy (Josh) is off on vacation for about 3 weeks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll file a ticket about this so that he's aware of it and can fix it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he returns.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the heads-up!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 11, 2008, at 7:16 PM, Caciano Machado wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I found that open mpi is looking for the file contact.txt in the wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory. It always searches the file in the directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/tmp/openmpi-sessions-root_at_debian_0/&lt;MPIRUN PID&gt;/&quot; but this file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exists only in &quot;/tmp/openmpi-sessions-root_at_debian_0/&lt;MPIRUN PID&gt;/0&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I copy contact.txt to the directory where open mpi searches, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ompi-ps&quot; and &quot;ompi-checkpoint&quot; works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Aug 11, 2008 at 4:06 PM, Caciano Machado &lt;caciano_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to run the last checkpoint/restart (rev 19235) but ompi is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; showing the following error in &quot;ompi-checkpoint&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems to be something in function &quot;orte_list_local_hnps&quot; of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file orte/util/hnp_contact.c. I'm using BLCR 0.7.2 and it's working
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correctly with the example applications.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_debian:~/pp# ompi-clean
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_debian:~/pp# mpirun -machinefile machinefile -np 2 -am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ft-enable-cr -v -d pp 1 2 1000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] hostfile: checking hostfile machinefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] hostfile: filtering nodes through
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile machinefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] progressed_wait: base/plm_base_launch_support.c 436
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 400
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] progressed_wait: base/plm_base_launch_support.c 679
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] node[0].name debian daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] node[1].name debian daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1060
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] node[0].name debian daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] node[1].name debian daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; empty!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: base/plm_base_launch_support.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 635
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] Info: Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i, host, exe, pid) = (0, debian, /root/pp/pp, 27941)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i, host, exe, pid) = (1, debian, /root/pp/pp, 27942)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: base/routed_base_receive.c 153
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] progressed_wait: base/routed_base_register_sync.c 104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] progressed_wait: base/routed_base_register_sync.c 104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] [[31810,1],0] node[0].name debian daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] [[31810,1],0] node[1].name debian daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] [[31810,1],1] node[0].name debian daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] [[31810,1],1] node[1].name debian daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] progressed_wait: grpcomm_bad_module.c 394
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],1] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted:comm:message_local_procs delivering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message to job [31810,1] tag 15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted:comm:message_local_procs delivering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message to job [31810,1] tag 15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; empty!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] progressed_wait: grpcomm_bad_module.c 394
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27942] progressed_wait: grpcomm_bad_module.c 270
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],1] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orted:comm:message_local_procs delivering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message to job [31810,1] tag 17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orted:comm:message_local_procs delivering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message to job [31810,1] tag 17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commands completed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; empty!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:27941] progressed_wait: grpcomm_bad_module.c 270
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # ping-pong com MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # msgs from 1 to 2 bytes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # results are the mean of 1000000 repetitions for each msg size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Tue Aug 12 06:26:29 2008
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #   size       lat (us)      bw (MB/s)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27936 pts/1    S+     0:00 mpirun -machinefile machinefile -np 2 -am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ft-enable-cr -v -d pp 1 2 1000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27937 pts/1    S+     0:00 /usr/bin/ssh -x debian  orted --debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --heartbeat 0 -mca ess env -mca orte_ess_jobid 2084700160
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27938 ?        Ss     0:00 sshd: root_at_notty
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27940 ?        Ss     0:00 orted --debug --heartbeat 0 -mca ess env
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca orte_ess_jobid 2084700160 -mca orte_ess_vpid 1 -mc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27941 ?        Rl     0:21 pp 1 2 1000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27942 ?        Rl     0:21 pp 1 2 1000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 28021 pts/0    R+     0:00 ps xa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_debian:~/pp# ompi-checkpoint 27936 -v
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:28022] [[31764,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [debian:28022] HNP with PID 27936 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Caciano Machado
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science Graduate Student/UFRGS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4573.php">Ralph Campbell: "[OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4571.php">Bogdan Costescu: "Re: [OMPI devel] Proposed changes to maximum size of sm btl backing file"</a>
<li><strong>In reply to:</strong> <a href="4569.php">Jeff Squyres: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
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
