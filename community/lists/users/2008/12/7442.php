<?
$subject_val = "Re: [OMPI users] pgi and gcc runtime compatability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 22:24:44 2008" -->
<!-- isoreceived="20081208032444" -->
<!-- sent="Mon, 08 Dec 2008 14:24:34 +1100" -->
<!-- isosent="20081208032434" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi and gcc runtime compatability" -->
<!-- id="1228706674.27341.8.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="B952C621-730C-4634-A9EE-973974CCAE2B_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] pgi and gcc runtime compatability<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-07 22:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many of today's compilers for Linux (pgi, intel, etc.) are designed to
<br>
be link-compatible with gcc.  That must extend to calling conventions
<br>
(mangling schemes and argument passing, etc.)
<br>
<p>If it's static link-compatible, surely this applies to dynamic (runtime)
<br>
linking (right?)
<br>
<p>Is there stuff going on internal to OMPI that requires tighter
<br>
integration between app and library than standard function calls tying
<br>
together?  How invasive is the memory management stuff?
<br>
<p><p><p>On Sun, 2008-12-07 at 22:06 -0500, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I did something today that I was happy worked,  but I want to know if  
</span><br>
<span class="quotelev1">&gt; anyone has had problem with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At runtime. (not compiling)  would a OpenMPI built with pgi  work to  
</span><br>
<span class="quotelev1">&gt; run a code that was compiled with the same version but gcc built  
</span><br>
<span class="quotelev1">&gt; OpenMPI ?  I tested a few apps today after I accidentally did this  
</span><br>
<span class="quotelev1">&gt; and found it worked.  They were all C/C++ apps  (namd and gromacs)   
</span><br>
<span class="quotelev1">&gt; but what about fortran apps?   Should we expect problems if someone  
</span><br>
<span class="quotelev1">&gt; does this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not going to encourage this, but it is more if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>Previous message:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<li><strong>In reply to:</strong> <a href="7441.php">Brock Palen: "[OMPI users] pgi and gcc runtime compatability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7443.php">David Singleton: "Re: [OMPI users] pgi and gcc runtime compatability"</a>
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
