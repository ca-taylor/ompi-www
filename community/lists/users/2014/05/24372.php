<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 20:56:55 2014" -->
<!-- isoreceived="20140515005655" -->
<!-- sent="Wed, 14 May 2014 20:56:54 -0400" -->
<!-- isosent="20140515005654" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="CAB2ovou7yzse9NTn0jufWoqb0O_iV5aEEb2EkRiZb7bPg1vMfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5373FFB8.1080907_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 20:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24371.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24370.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Maxime's suggestion is sane and reasonable.  Just in case
<br>
you're taking ha'penny's worth from the groundlings.  I think I would
<br>
prefer not to have capability included that we won't use.
<br>
<p>-- bennet
<br>
<p><p><p>On Wed, May 14, 2014 at 7:43 PM, Maxime Boissonneault
<br>
&lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For the scheduler issue, I would be happy with something like, if I ask for
</span><br>
<span class="quotelev1">&gt; support for X, disable support for Y, Z and W. I am assuming that very
</span><br>
<span class="quotelev1">&gt; rarely will someone use more than one scheduler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-05-14 19:09, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff and I have talked about this and are approaching a compromise.  Still
</span><br>
<span class="quotelev2">&gt;&gt; more thinking to do, perhaps providing new configure options to &quot;only build
</span><br>
<span class="quotelev2">&gt;&gt; what I ask for&quot; and/or a tool to support a menu-driven selection of what to
</span><br>
<span class="quotelev2">&gt;&gt; build - as opposed to today's &quot;build everything you don't tell me to
</span><br>
<span class="quotelev2">&gt;&gt; not-build&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tough set of compromises as it depends on the target audience. Sys admins
</span><br>
<span class="quotelev2">&gt;&gt; prefer the &quot;build only what I say&quot;, while users (who frequently aren't that
</span><br>
<span class="quotelev2">&gt;&gt; familiar with the inners of a system) prefer the &quot;build all&quot; mentality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2014, at 3:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, a quick review indicates that the new policy for scheduler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support was not uniformly applied. I'll update it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To reiterate: we will only build support for a scheduler if the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically requests it. We did this because we are increasingly seeing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distros include header support for various schedulers, and so just finding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the required headers isn't enough to know that the scheduler is intended for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use. So we wind up building a bunch of useless modules.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 14, 2014, at 3:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I believe we no longer build the slurm support by default, though
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd have to check to be sure. The intent is definitely not to do so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The plan we adjusted to a while back was to *only* build support for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; schedulers upon request. Can't swear that they are all correctly updated,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but that was the intent.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 14, 2014, at 2:52 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's a bit of our rational, from the README file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Note that for many of Open MPI's --with-&lt;foo&gt; options, Open MPI will,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   by default, search for header files and/or libraries for &lt;foo&gt;.  If
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   the relevant files are found, Open MPI will built support for &lt;foo&gt;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if they are not found, Open MPI will skip building support for &lt;foo&gt;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   However, if you specify --with-&lt;foo&gt; on the configure command line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Open MPI is unable to find relevant support for &lt;foo&gt;, configure will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   assume that it was unable to provide a feature that was specifically
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   requested and will abort so that a human can resolve out the issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In some cases, we don't need header or library files.  For example,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with SLURM and LSF, our native support is actually just fork/exec'ing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SLURM/LSF executables under the covers (e.g., as opposed to using rsh/ssh).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So we can basically *always* build them.  So we do.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In general, OMPI builds support for everything that it can find on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rationale that a) we can't know ahead of time exactly what people want, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b) most people want to just &quot;./configure &amp;&amp; make -j 32 install&quot; and be done
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with it -- so build as much as possible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 14, 2014, at 5:31 PM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oh, I know that, what I am refering to is that slurm and loadleveler
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; support are enabled by default, and it seems that if we're using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Torque/Moab, we have no use for slurm and loadleveler support.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My point is not that it is hard to compile it with torque support, my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; point is that it is compiling support for many schedulers while I'm rather
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; convinced that very few sites actually use multiple schedulers at the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 2014-05-14 16:51, Gus Correa a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 05/14/2014 04:25 PM, Maxime Boissonneault wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was compiling OpenMPI 1.8.1 today and I noticed that pretty much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; every
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; single scheduler has its support enabled by default at configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (except
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the one I need, which is Torque). Is there a reason for that ? Why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have a single scheduler enabled and require to specify it at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; time ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there any reason for me to build with loadlever or slurm if we're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using torque ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maxime Boisssonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I haven't tried 1.8.1 yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, for all previous versions of OMPI I tried, up to 1.6.5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; all it took to configure it with Torque support was to point
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to the Torque installation directory (which is non-standard in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; case):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm=/opt/torque/bla/bla
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<li><strong>Next message:</strong> <a href="24373.php">CANELA-XANDRI Oriol: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24371.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24370.php">Maxime Boissonneault: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
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
