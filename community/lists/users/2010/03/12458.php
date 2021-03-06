<?
$subject_val = "Re: [OMPI users] Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 12:08:26 2010" -->
<!-- isoreceived="20100329160826" -->
<!-- sent="Mon, 29 Mar 2010 12:08:21 -0400" -->
<!-- isosent="20100329160821" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault (11)" -->
<!-- id="D45D0B1F-69B2-4B25-AFA2-716F0BBEE6D6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce1003270317t35e73646y728fda5bd0b35a8c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault (11)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 12:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if this is a bug with BLCR (since the segv stack is in the  
<br>
BLCR thread). Can you try an non-MPI version of this application that  
<br>
uses popen(), and see if BLCR properly checkpoints/restarts it?
<br>
<p>If so, we can start to see what Open MPI might be doing to confuse  
<br>
things, but I suspect that this might be a bug with BLCR. Either way  
<br>
let us know what you find out.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Mar 27, 2010, at 6:17 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure if this is the cause of your problems:
</span><br>
<span class="quotelev1">&gt; You define the constant BUFFER_SIZE, but in the code you use a  
</span><br>
<span class="quotelev1">&gt; constant called BUFSIZ...
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 26, 2010 at 10:29 PM, Jean Potsam  
</span><br>
<span class="quotelev1">&gt; &lt;jeanpotsam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;               I am having a problem with openmpi . I have installed  
</span><br>
<span class="quotelev1">&gt; openmpi 1.4 and blcr 0.8.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written a small mpi application as follows below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #######################
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;limits.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define BUFFER_SIZE PIPE_BUF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char * getprocessid()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     FILE * read_fp;
</span><br>
<span class="quotelev1">&gt;     char buffer[BUFSIZ + 1];
</span><br>
<span class="quotelev1">&gt;     int chars_read;
</span><br>
<span class="quotelev1">&gt;     char * buffer_data=&quot;12345&quot;;
</span><br>
<span class="quotelev1">&gt;     memset(buffer, '\0', sizeof(buffer));
</span><br>
<span class="quotelev1">&gt;   read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;      /*
</span><br>
<span class="quotelev1">&gt;       ...
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;      return buffer_data;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char ** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;    int size;
</span><br>
<span class="quotelev1">&gt; char * thedata;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  thedata=getprocessid();
</span><br>
<span class="quotelev1">&gt;  printf(&quot; the data is %s&quot;, thedata);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ############################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #######################
</span><br>
<span class="quotelev1">&gt; jean_at_sunn32:~$ mpicc pipetest2.c -o pipetest2
</span><br>
<span class="quotelev1">&gt; jean_at_sunn32:~$ mpirun -np 1 -am ft-enable-cr -mca btl ^openib   
</span><br>
<span class="quotelev1">&gt; pipetest2
</span><br>
<span class="quotelev1">&gt; [sun32:19211] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [sun32:19211] Failing at address: 0x4
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 0] [0xb7f3c40c]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb796868b]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free 
</span><br>
<span class="quotelev1">&gt; +0x2a) [0xb7a5925a]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7a5ac72]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7991266]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 5] /lib/libc.so.6(_IO_proc_open+0x7e) [0xb7958b6e]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 6] /lib/libc.so.6(popen+0x6c) [0xb7958dfc]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 7] pipetest2(getprocessid+0x42) [0x8048836]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 8] pipetest2(main+0x4d) [0x8048897]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [ 9] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7912455]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] [10] pipetest2 [0x8048761]
</span><br>
<span class="quotelev1">&gt; [sun32:19211] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; #####################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, If I compile the application using gcc, it works fine. The  
</span><br>
<span class="quotelev1">&gt; problem arises with:
</span><br>
<span class="quotelev1">&gt;   read_fp = popen(&quot;uname -a&quot;, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone has an idea how to resolve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
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
<li><strong>Next message:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12457.php">Josh Hursey: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12444.php">jody: "Re: [OMPI users] Segmentation fault (11)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="12459.php">Jean Potsam: "Re: [OMPI users] Segmentation fault (11)"</a>
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
