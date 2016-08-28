<?
$subject_val = "Re: [OMPI users] ompi-restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 17:42:27 2010" -->
<!-- isoreceived="20100716214227" -->
<!-- sent="Fri, 16 Jul 2010 17:42:25 -0400" -->
<!-- isosent="20100716214225" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart failed" -->
<!-- id="86EE322D-5646-48CE-BBB4-5381752F3657_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilvhMAPGS6X7VIRhn1DGiTl_mpXikD1c9f-j3Ee_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart failed<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 17:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Previous message:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI can restart multi-threaded applications on any number of nodes (I do this routinely in testing).
<br>
<p>If you are still experiencing this problem (sorry for the late reply), can you send me the MCA parameters that you are using, command line, and a backtrace from the corefile generated by the application?
<br>
<p>Those bits of information will help me narrow down what might be going wrong. You might also try testing against the v1.5 series or the development trunk to make sure that the problem is not just v1.4 specific.
<br>
<p>-- Josh
<br>
<p>On Jun 14, 2010, at 2:47 AM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I finally figured out the answer. I just put the parameter &quot;-machinefile host&quot; in the &quot;ompi-restart&quot; command and it restarted correctly. So is it unable to restart multi-threaded application on 1 node in OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nguyen Toan 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 8, 2010 at 12:07 AM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sorry, I just want to add 2 more things:
</span><br>
<span class="quotelev1">&gt; + I tried configure with and without --enable-ft-thread but nothing changed
</span><br>
<span class="quotelev1">&gt; + I also applied this patch for OpenMPI here and reinstalled but I got the same error
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Somebody helps? Thank you very much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 7, 2010 at 11:51 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes but it failed to restart (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; Here are the details concerning my problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + OS: Centos 5.4
</span><br>
<span class="quotelev1">&gt; + OpenMPI configure:
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt; --with-blcr=/home/nguyen/opt/blcr --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; + mpirun -am ft-enable-cr -machinefile host ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the checkpoint file was created successfully. However it failed to restart using ompi-restart:
</span><br>
<span class="quotelev1">&gt; &quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local exited on signal 11 (Segmentation fault)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I miss something in the installation of OpenMPI?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Previous message:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13319.php">Nguyen Toan: "Re: [OMPI users] ompi-restart failed"</a>
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