<?
$subject_val = "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 11:23:53 2015" -->
<!-- isoreceived="20150313152353" -->
<!-- sent="Fri, 13 Mar 2015 08:23:51 -0700" -->
<!-- isosent="20150313152351" -->
<!-- name="Chris Paciorek" -->
<!-- email="paciorek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4" -->
<!-- id="CAG=M9LqNn0J52z_zK-_DVPW4bxUjOiqZ-ajo2FentPWCuC4rPQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG=M9LqqEbp8rUv5fV-c4gFe8nvPFkLkiEvi9hwaCqsmPwHLtw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4<br>
<strong>From:</strong> Chris Paciorek (<em>paciorek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-13 11:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26467.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>In reply to:</strong> <a href="26463.php">Chris Paciorek: "[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And the promised attachment.
<br>
<p>On Thu, Mar 12, 2015 at 6:11 PM, Chris Paciorek
<br>
&lt;paciorek_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm having an issue with MPI_Comm_spawn not starting workers on the
</span><br>
<span class="quotelev1">&gt; nodes provided via -machinefile or -host. This is occurring on Ubuntu
</span><br>
<span class="quotelev1">&gt; 14.04/14.10 with openMPI 1.6.5. However, I do not have the problem on
</span><br>
<span class="quotelev1">&gt; Ubuntu 12.04 with openMPI 1.4.3 nor is there a problem when I install
</span><br>
<span class="quotelev1">&gt; openMPI 1.8.4 from source on Ubuntu 14.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions as to what is going on? We can install from source to
</span><br>
<span class="quotelev1">&gt; deal with this, but Ubuntu 14.04/14.10/15.04 (and I think the current
</span><br>
<span class="quotelev1">&gt; Debian) are all relying on 1.6.5 so this issue might affect many
</span><br>
<span class="quotelev1">&gt; others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I can tell there aren't any threads on the mailing lists or
</span><br>
<span class="quotelev1">&gt; info in the NEWS file that relate to this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a reproducible test case. In the attached zip file, parent.cpp
</span><br>
<span class="quotelev1">&gt; generates an executable that simply tries to spawn workers using
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn and the child executable simply reports what nodes the
</span><br>
<span class="quotelev1">&gt; workers are operating on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compile and run the program as:
</span><br>
<span class="quotelev1">&gt; mpicxx -o child child.cpp
</span><br>
<span class="quotelev1">&gt; mpicxx -o parent parent.cpp
</span><br>
<span class="quotelev1">&gt; mpirun -host smeagol,arwen,smeagol,arwen -np 1 parent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the result is as follows with all children on the original node:
</span><br>
<span class="quotelev1">&gt; Starting: I'm process 0 and we are 1
</span><br>
<span class="quotelev1">&gt; Finishing: I'm process 0 and we are 1
</span><br>
<span class="quotelev1">&gt; I'm child process 0 on smeagol and we are 3
</span><br>
<span class="quotelev1">&gt; I'm child process 1 on smeagol and we are 3
</span><br>
<span class="quotelev1">&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev1">&gt; I'm child process 2 on smeagol and we are 3
</span><br>
<span class="quotelev1">&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev1">&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is all on pretty standard Ubuntu 14.04, with openMPI installed
</span><br>
<span class="quotelev1">&gt; from Ubuntu (libopenmpi-dev, libopenmpi1.6, openmpi-bin)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've included in the zip file:
</span><br>
<span class="quotelev1">&gt; * parent.cpp and child.cpp
</span><br>
<span class="quotelev1">&gt; * ompi_info --all on the master
</span><br>
<span class="quotelev1">&gt; * ompi_info -v ompi full --parsable on all nodes
</span><br>
<span class="quotelev1">&gt; * PATH and LD_LIBRARY_PATH info
</span><br>
<span class="quotelev1">&gt; * ifconfig information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Chris Paciorek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Statistical Computing Consultant
</span><br>
<span class="quotelev1">&gt; Statistical Computing Facility, Econometrics Laboratory, Berkeley
</span><br>
<span class="quotelev1">&gt; Research Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office: 495 Evans Hall                      Email: paciorek_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Mailing Address:                            Voice: 510-842-9056
</span><br>
<span class="quotelev1">&gt; Department of Statistics                    Fax:   510-642-7892
</span><br>
<span class="quotelev1">&gt; 367 Evans Hall                              Skype: cjpaciorek
</span><br>
<span class="quotelev1">&gt; University of California, Berkeley          WWW:
</span><br>
<span class="quotelev1">&gt; www.stat.berkeley.edu/~paciorek
</span><br>
<span class="quotelev1">&gt; Berkeley, CA 94720 USA                      Permanent forward:
</span><br>
<span class="quotelev1">&gt; paciorek_at_[hidden]
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26468/mpi_comm_spawn_problem.tgz">mpi_comm_spawn_problem.tgz</a>
</ul>
<!-- attachment="mpi_comm_spawn_problem.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26467.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>In reply to:</strong> <a href="26463.php">Chris Paciorek: "[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26469.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
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
