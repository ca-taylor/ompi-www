<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 17:37:19 2012" -->
<!-- isoreceived="20121206223719" -->
<!-- sent="Thu, 6 Dec 2012 22:37:08 +0000" -->
<!-- isosent="20121206223708" -->
<!-- name="Paul Hatton" -->
<!-- email="p.s.hatton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="F0658F4E7C8A084AB7E7895A257838CC5AB7C01AED_at_ADMMBX5.adf.bham.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C46B47ADFA319D40ACFA4CDBB76AC2BF099C06D8_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2<br>
<strong>From:</strong> Paul Hatton (<em>p.s.hatton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 17:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20912.php">Joseph Farran: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20912.php">Joseph Farran: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. This is obviously (now) a problem with my gcc build which isn't appropriate for this list. I'll re-visit this and post a solution once I've (hopefully) got this working. I don't have any shared libraries (*.so.*) in my gcc tree so something went badly wrong ...
<br>
<p>Thanks for your help.
<br>
<p><pre>
-- 
Paul Hatton
High Performance Computing and Visualisation Specialist
IT Services, The University of Birmingham
Ph: 0121-414-3994&#160; Mob: 07785-977340&#160; Skype: P.S.Hatton
[Service Manager, Birmingham Environment for Academic Research]
[Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
&gt; Behalf Of Gunter, David O
&gt; Sent: 06 December 2012 22:27
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; 4.7.2
&gt; 
&gt; My gcc 4.7.2 build appears to be ignoring the one in /usr/lib64 and
&gt; using the one in its own install tree:
&gt; /usr/projects/hpcsoft/moonlight/gcc/4.7.2/lib64/libgfortran.so.3
&gt; 
&gt; -david
&gt; 
&gt; --
&gt; David Gunter
&gt; HPC-3: Infrastructure Team
&gt; Los Alamos National Laboratory
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On Dec 6, 2012, at 2:50 PM, Paul Hatton wrote:
&gt; 
&gt; &gt; Ahh, it's looking in /usr/lib64 and finding libgfortran.so.3 which is
&gt; older than the one expected by gcc 4.7 (system gcc is 4.4.6). Looking
&gt; at my gcc installation I don't have any shared libraries in there, just
&gt; static ones.
&gt; &gt;
&gt; &gt; David - if you don't mind a slight diversion, where is your
&gt; libgfortran.so.3? Does your system have one in /usr/lib64 (assuming
&gt; you're on a 64-bit system) or in
&gt; /usr/projects/hpcsoft/moonlight/gcc/4.7.2/somewhere?
&gt; &gt;
&gt; &gt; I'll have a play with my setup as well. Should have spotted this
&gt; myself.
&gt; &gt;
&gt; &gt; Thanks for your help
&gt; &gt;
&gt; &gt; --
&gt; &gt; Paul Hatton
&gt; &gt; High Performance Computing and Visualisation Specialist
&gt; &gt; IT Services, The University of Birmingham
&gt; &gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;
&gt; &gt;
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On
&gt; &gt;&gt; Behalf Of Jeff Squyres
&gt; &gt;&gt; Sent: 06 December 2012 21:30
&gt; &gt;&gt; To: Open MPI Users
&gt; &gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; &gt;&gt; 4.7.2
&gt; &gt;&gt;
&gt; &gt;&gt; It looks like your gfortran compiler is broken...?
&gt; &gt;&gt;
&gt; &gt;&gt; configure:53489: checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt;&gt; (selected_int_kind(9))
&gt; &gt;&gt; configure:53507: gfortran   -o conftest conftestf.f90
&gt; &gt;&gt; configure:53514: $? = 0
&gt; &gt;&gt; configure:53554: ./conftest
&gt; &gt;&gt; ./conftest: /usr/lib64/libgfortran.so.3: version `GFORTRAN_1.4' not
&gt; &gt;&gt; found (required by ./conftest)
&gt; &gt;&gt; configure:53561: $? = 1
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Dec 6, 2012, at 1:22 PM, Paul Hatton wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; failed one attached.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; --
&gt; &gt;&gt;&gt; Paul Hatton
&gt; &gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; mpi.org]
&gt; &gt;&gt; On
&gt; &gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
&gt; &gt;&gt;&gt;&gt; Sent: 06 December 2012 21:17
&gt; &gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; &gt;&gt;&gt;&gt; 4.7.2
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; This does not appear to be the right config.log -- the test in
&gt; &gt;&gt; question
&gt; &gt;&gt;&gt;&gt; passed:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; configure:53489: checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt;&gt;&gt;&gt; (selected_int_kind(9))
&gt; &gt;&gt;&gt;&gt; configure:53507: gfortran   -o conftest conftestf.f90
&gt; &gt;&gt;&gt;&gt; configure:53514: $? = 0
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; On Dec 6, 2012, at 1:11 PM, Paul Hatton wrote:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Thanks. zip-ed config.log attached
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt;&gt; Paul Hatton
&gt; &gt;&gt;&gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt;&gt;&gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt;&gt;&gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt;&gt;&gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt;&gt;&gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology
&gt; Centre]
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; &gt;&gt; mpi.org]
&gt; &gt;&gt;&gt;&gt; On
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Jeff Squyres
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Sent: 06 December 2012 20:54
&gt; &gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with
&gt; gcc
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 4.7.2
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; I have not tested with gfortran 4.7.2.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Can you send the config.log file? (please compress)
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Dec 6, 2012, at 12:42 PM, Paul Hatton wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I've searched the FAQ but not come up with anything about this
&gt; &gt;&gt; ...
&gt; &gt;&gt;&gt;&gt;&gt;&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib
&gt; \
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-openib \
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; configure fails with
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; &gt;&gt;&gt;&gt;&gt;&gt; (selected_int_kind(9))...
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: Could not determine kind of
&gt; &gt;&gt;&gt;&gt;&gt;&gt; selected_int_kind(MPI_INTEGER_KIND)
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc which
&gt; is
&gt; &gt;&gt;&gt;&gt;&gt;&gt; 4.4.6
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I've attached the output from the configure command.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Paul Hatton
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; High Performance Computing and Visualisation Specialist
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; IT Services, The University of Birmingham
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [Also Technical Director, IBM Visual and Spatial Technology
&gt; &gt;&gt; Centre]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;configure-
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt; 12_12_06_19h48m.log&gt;_______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
&gt; &gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;
&gt; ***********************************************************************
&gt; &gt;&gt;&gt;&gt; ******
&gt; &gt;&gt;&gt;&gt;&gt; **
&gt; &gt;&gt;&gt;&gt; **
&gt; &gt;&gt;&gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very
&gt; suspicious
&gt; &gt;&gt;&gt;&gt; type.  **
&gt; &gt;&gt;&gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are
&gt; &gt;&gt;&gt;&gt; absolutely     **
&gt; &gt;&gt;&gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause
&gt; &gt;&gt;&gt;&gt; irreparable   **
&gt; &gt;&gt;&gt;&gt;&gt; ** damage to your computer and your files.  If you have any
&gt; &gt;&gt; questions
&gt; &gt;&gt;&gt;&gt; **
&gt; &gt;&gt;&gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
&gt; &gt;&gt;&gt;&gt; OPENING IT. **
&gt; &gt;&gt;&gt;&gt;&gt; **
&gt; &gt;&gt;&gt;&gt; **
&gt; &gt;&gt;&gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail
&gt; &gt;&gt;&gt;&gt; scanner.   **
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;
&gt; ***********************************************************************
&gt; &gt;&gt;&gt;&gt; ******
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; &lt;config.zip&gt;_______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt; Jeff Squyres
&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
&gt; &gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;
&gt; ***********************************************************************
&gt; &gt;&gt; ******
&gt; &gt;&gt;&gt; **
&gt; &gt;&gt; **
&gt; &gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious
&gt; &gt;&gt; type.  **
&gt; &gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are
&gt; &gt;&gt; absolutely     **
&gt; &gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause
&gt; &gt;&gt; irreparable   **
&gt; &gt;&gt;&gt; ** damage to your computer and your files.  If you have any
&gt; questions
&gt; &gt;&gt; **
&gt; &gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
&gt; &gt;&gt; OPENING IT. **
&gt; &gt;&gt;&gt; **
&gt; &gt;&gt; **
&gt; &gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail
&gt; &gt;&gt; scanner.   **
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;
&gt; ***********************************************************************
&gt; &gt;&gt; ******
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; &lt;config.zip&gt;_______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; --
&gt; &gt;&gt; Jeff Squyres
&gt; &gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt; For corporate legal information go to:
&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20902.php">Jeff Squyres: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20900.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20912.php">Joseph Farran: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20912.php">Joseph Farran: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
