<?
$subject_val = "[OMPI users] Fwd: experiencing some problems in MPI_reduce usage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 01:52:33 2013" -->
<!-- isoreceived="20131105065233" -->
<!-- sent="Tue, 5 Nov 2013 00:52:31 -0600" -->
<!-- isosent="20131105065231" -->
<!-- name="Osman Khalid" -->
<!-- email="osmankhalid2005_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: experiencing some problems in MPI_reduce usage" -->
<!-- id="CAPct32qYg4SkUCxrcVRnFhwcNHr2LSJqz8LgY7a=N1ctiWg0rg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPct32q8218JkcDb0mGboZPY2ZTPf05Y=PgHgYAU2buSNJKX_A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: experiencing some problems in MPI_reduce usage<br>
<strong>From:</strong> Osman Khalid (<em>osmankhalid2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 01:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
<li><strong>In reply to:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kindly discard below email. I have corrected the mistakes after running the
<br>
program in parallel debug mode. Thanks.
<br>
<p>---------- Forwarded message ----------
<br>
From: Osman Khalid &lt;osmankhalid2005_at_[hidden]&gt;
<br>
Date: Mon, Nov 4, 2013 at 11:02 PM
<br>
Subject: experiencing some problems in MPI_reduce usage
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Hi
<br>
<p>I am very new to Open MPI. I have made a small program that computes the
<br>
sum of an array, by splitting array into pieces equal to the number of
<br>
processes. The problem in my program is that each process is computing
<br>
right sum of its share of the array, but the individually computed sums are
<br>
not summed by MPI_reduce function. I tried my best to solve and also
<br>
consulted the Open MPI manual, but there is still something that I might be
<br>
missing. I would be grateful for any kind of guidance. Below is the program
<br>
I made:
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int n, rank, nrofProcs, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int sum, ans;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//  0,1,2, 3,4,5, 6,7,8, 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myarr[] = {1,5,9, 2,8,3, 7,4,6, 10};
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nrofProcs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n = 10;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int remaining = n % nrofProcs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int lower =rank*(n/nrofProcs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int upper = (lower+(n/nrofProcs))-1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i = lower; i &lt;= upper; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + myarr[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(rank==nrofProcs-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(i&lt;=remaining)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + myarr[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* (PROBLEM IS HERE, IT IS NOT COMBINING &quot;sums&quot;) */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;sum, &amp;ans, 1, MPI_INT, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>//  if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;rank: %d, Sum ans: %d\n&quot;, rank, sum);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* shut down MPI */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Output:
<br>
<p>rank: 2, Sum ans: 17
<br>
rank: 1, Sum ans: 13
<br>
rank: 0, Sum ans: 15
<br>
<p>(Output should be rank: 0, Sum ans: 55)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22907/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
<li><strong>In reply to:</strong> <a href="22906.php">Osman Khalid: "[OMPI users] experiencing some problems in MPI_reduce usage"</a>
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
