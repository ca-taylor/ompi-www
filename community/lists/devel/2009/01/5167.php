<?
$subject_val = "Re: [OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 22:28:41 2009" -->
<!-- isoreceived="20090114032841" -->
<!-- sent="Tue, 13 Jan 2009 22:28:35 -0500" -->
<!-- isosent="20090114032835" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="9F7C6383-D1EA-4A20-93D1-8E5FBBF05050_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E0C0EE09-C374-48BB-A881-28C2DAD040C0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] reduce_scatter bug with hierarch<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 22:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5166.php">William Hachfeld: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>In reply to:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5169.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, this pinpoint the fact that we didn't test enough the  
<br>
collective module mixing thing. I went over the tuned collective  
<br>
functions and changed all instances to use the correct module  
<br>
information. It is now on the trunk, revision 20267. Simultaneously,I  
<br>
checked that all other collective components do the right thing ...  
<br>
and I have to admit tuned was the only faulty one.
<br>
<p>This is clearly a bug in the tuned, and correcting it will allow  
<br>
people to use the hierarch. In the current incarnation 1.3 will mostly/ 
<br>
always segfault when hierarch is active. I would prefer not to give a  
<br>
broken toy out there. How about pushing r20267 in the 1.3?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jan 13, 2009, at 20:13 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for digging into this.  Can you file a bug?  Let's mark it  
</span><br>
<span class="quotelev1">&gt; for v1.3.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I say 1.3.1 instead of 1.3.0 because this *only* affects hierarch,  
</span><br>
<span class="quotelev1">&gt; and since hierarch isn't currently selected by default (you must  
</span><br>
<span class="quotelev1">&gt; specifically elevate hierarch's priority to get it to run), there's  
</span><br>
<span class="quotelev1">&gt; no danger that users will run into this problem in default runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But clearly the problem needs to be fixed, and therefore we need a  
</span><br>
<span class="quotelev1">&gt; bug to track it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 2:09 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just debugged the Reduce_scatter bug mentioned previously. The  
</span><br>
<span class="quotelev2">&gt;&gt; bug is unfortunately not in hierarch, but in tuned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the code snipplet causing the problems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int reduce_scatter (...., mca_coll_base_module_t *module)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;  err = comm-&gt;c_coll.coll_reduce (...., module)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but should be
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; err = comm-&gt;c_coll.coll_reduce (..., comm- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;c_coll.coll_reduce_module);
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem as it is right now is, that when using hierarch, only a  
</span><br>
<span class="quotelev2">&gt;&gt; subset of the function are set, e.g. reduce,allreduce, bcast and  
</span><br>
<span class="quotelev2">&gt;&gt; barrier. Thus, reduce_scatter is from tuned in most scenarios, and  
</span><br>
<span class="quotelev2">&gt;&gt; calls the subsequent functions with the wrong module. Hierarch of  
</span><br>
<span class="quotelev2">&gt;&gt; course does not like that :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, a quick glance through the tuned code reveals a significant  
</span><br>
<span class="quotelev2">&gt;&gt; number of instances where this appears(reduce_scatter, allreduce,  
</span><br>
<span class="quotelev2">&gt;&gt; allgather, allgatherv). Basic, hierarch and inter seem to do that  
</span><br>
<span class="quotelev2">&gt;&gt; mostly correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5166.php">William Hachfeld: "Re: [OMPI devel] OpenMPI Performance Problem with 	Open|SpeedShop"</a>
<li><strong>In reply to:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5169.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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