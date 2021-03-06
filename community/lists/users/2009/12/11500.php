<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 11:04:22 2009" -->
<!-- isoreceived="20091210160422" -->
<!-- sent="Thu, 10 Dec 2009 16:04:13 +0000" -->
<!-- isosent="20091210160413" -->
<!-- name="Mattijs Janssens" -->
<!-- email="m.janssens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="200912101604.13920.m.janssens_at_opencfd.co.uk" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="82dde0912100742m7fe05e76h81d2a5418f381035_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Mattijs Janssens (<em>m.janssens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 11:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11501.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW"</a>
<li><strong>Previous message:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11501.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 10 December 2009 15:42:49 Mark Bolstad wrote:
<br>
<span class="quotelev1">&gt; Just a quick interjection, I also have a dual-quad Nehalem system, HT on,
</span><br>
<span class="quotelev1">&gt; 24GB ram, hand compiled 1.3.4 with options: --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f77=no --with-openib=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With v1.3.4 I see roughly the same behavior, hello, ring work, connectivity
</span><br>
<span class="quotelev1">&gt; fails randomly with np &gt;= 8. Turning on -v increased the success, but still
</span><br>
<span class="quotelev1">&gt; hangs. np = 16 fails more often, and the hang is random in which pair of
</span><br>
<span class="quotelev1">&gt; processes are communicating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it seems to be related to the shared memory layer problem. Running
</span><br>
<span class="quotelev1">&gt; with -mca btl ^sm works consistently through np = 128.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have the same problem, same machine (dual-quad Nehalem system, HT on) - for 
<br>
me the fix was the one from
<br>
<p>(<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>)
<br>
<p>mpirun -np 8 -mca btl_sm_num_fifos 7
<br>
<p><p>Mattijs
<br>
<p><span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 9, 2009 at 8:03 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Matthew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Save any misinterpretation I may have made of the code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello_c has no real communication, except for a final Barrier
</span><br>
<span class="quotelev2">&gt; &gt; synchronization.
</span><br>
<span class="quotelev2">&gt; &gt; Each process prints &quot;hello world&quot; and that's it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ring probes a little more, with processes Send(ing) and
</span><br>
<span class="quotelev2">&gt; &gt; Recv(cieving) messages.
</span><br>
<span class="quotelev2">&gt; &gt; Ring just passes a message sequentially along all process
</span><br>
<span class="quotelev2">&gt; &gt; ranks, then back to rank 0, and repeat the game 10 times.
</span><br>
<span class="quotelev2">&gt; &gt; Rank 0 is in charge of counting turns, decrementing the counter,
</span><br>
<span class="quotelev2">&gt; &gt; and printing that (nobody else prints).
</span><br>
<span class="quotelev2">&gt; &gt; With 4 processes:
</span><br>
<span class="quotelev2">&gt; &gt; 0-&gt;1-&gt;2-&gt;3-&gt;0-&gt;1... 10 times
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In connectivity every pair of processes exchange a message.
</span><br>
<span class="quotelev2">&gt; &gt; Therefore it probes all pairwise connections.
</span><br>
<span class="quotelev2">&gt; &gt; In verbose mode you can see that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These programs shouldn't hang at all, if the system were sane.
</span><br>
<span class="quotelev2">&gt; &gt; Actually, they should even run with a significant level of
</span><br>
<span class="quotelev2">&gt; &gt; oversubscription, say,
</span><br>
<span class="quotelev2">&gt; &gt; -np 128  should work easily for all three programs on a powerful
</span><br>
<span class="quotelev2">&gt; &gt; machine like yours.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Suggestions
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Stick to the OpenMPI you compiled.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) You can run connectivity_c in verbose mode:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c -v
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Note the trailing &quot;-v&quot;.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It should tell more about who's talking to who.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) I wonder if there are any BIOS settings that may be required
</span><br>
<span class="quotelev2">&gt; &gt; (and perhaps not in place) to make the Nehalem hyperthreading to
</span><br>
<span class="quotelev2">&gt; &gt; work properly in your computer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You reach the BIOS settings by typing &lt;DEL&gt; or &lt;F2&gt;
</span><br>
<span class="quotelev2">&gt; &gt; when the computer boots up.
</span><br>
<span class="quotelev2">&gt; &gt; The key varies by
</span><br>
<span class="quotelev2">&gt; &gt; BIOS and computer vendor, but shows quickly on the bootup screen.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You may ask the computer vendor about the recommended BIOS settings.
</span><br>
<span class="quotelev2">&gt; &gt; If you haven't done this before, be careful to change and save only
</span><br>
<span class="quotelev2">&gt; &gt; what really needs to change (if anything really needs to change),
</span><br>
<span class="quotelev2">&gt; &gt; or the result may be worse.
</span><br>
<span class="quotelev2">&gt; &gt; (Overclocking is for gamers, not for genome researchers ... :) )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4) What I read about Nehalem DDR3 memory is that it is optimal
</span><br>
<span class="quotelev2">&gt; &gt; on configurations that are multiples of 3GB per CPU.
</span><br>
<span class="quotelev2">&gt; &gt; Common configs. in dual CPU machines like yours are
</span><br>
<span class="quotelev2">&gt; &gt; 6, 12, 24 and 48GB.
</span><br>
<span class="quotelev2">&gt; &gt; The sockets where you install the memory modules also matter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your computer has 20GB.
</span><br>
<span class="quotelev2">&gt; &gt; Did you build the computer or upgrade the memory yourself?
</span><br>
<span class="quotelev2">&gt; &gt; Do you know how the memory is installed, in which memory sockets?
</span><br>
<span class="quotelev2">&gt; &gt; What does the vendor have to say about it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://en.community.dell.com/blogs/dell_tech_center/archive/2009/04/08/ne">http://en.community.dell.com/blogs/dell_tech_center/archive/2009/04/08/ne</a>
</span><br>
<span class="quotelev2">&gt; &gt;halem-and-memory-configurations.aspx
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5) As I said before, typing &quot;f&quot; then &quot;j&quot; on &quot;top&quot; will add
</span><br>
<span class="quotelev2">&gt; &gt; a column (labeled &quot;P&quot;) that shows in which core each process is running.
</span><br>
<span class="quotelev2">&gt; &gt; This will let you observe how the Linux scheduler is distributing
</span><br>
<span class="quotelev2">&gt; &gt; the MPI load across the cores.
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully it is load-balanced, and different processes go to different
</span><br>
<span class="quotelev2">&gt; &gt; cores.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is very disconcerting when MPI processes hang.
</span><br>
<span class="quotelev2">&gt; &gt; You are not alone.
</span><br>
<span class="quotelev2">&gt; &gt; The reasons are not always obvious.
</span><br>
<span class="quotelev2">&gt; &gt; At least in your case there is no network involved or to troubleshoot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthew MacManes wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Gus and List,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1st of all Gus, I want to say thanks.. you have been a huge help, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when I get this fixed, I owe you big time!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, the problems continue...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I formatted the HD, reinstalled OS to make sure that I was working from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; scratch.  I did your step A, which seemed to go fine:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macmanes_at_macmanes:~$ which mpicc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/macmanes/apps/openmpi1.4/bin/mpicc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macmanes_at_macmanes:~$ which mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/macmanes/apps/openmpi1.4/bin/mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Good stuff there...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I then compiled the example files:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 ring_c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 sending 10 to 1, tag 201 (8 processes in ring)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 2 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 3 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 4 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 5 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 6 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 7 exiting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Connectivity test on 8 processes PASSED.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macmanes_at_macmanes:~/Downloads/openmpi-1.4/examples$
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/macmanes/apps/openmpi1.4/bin/mpirun -np 8 connectivity_c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ..HANGS..NO OUTPUT
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this is maddening because ring_c works.. and connectivity_c worked the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1st time, but not the second... I did it 10 times, and it worked twice..
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here is the TOP screenshot:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BY">http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BY</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;w#5413382182027669394
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What is the difference between connectivity_c and ring_c? Under what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; circumstances should one fail and not the other...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm off to the Linux forums to see about the Nehalem kernel issues..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Dec 9, 2009 at 13:25, Gus Correa &lt;gus_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Hi Matthew
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    There is no point in trying to troubleshoot MrBayes and ABySS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if not even the OpenMPI test programs run properly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    You must straighten them out first.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Suggestions:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    A) While you are at OpenMPI, do yourself a favor,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    and install it from source on a separate directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Who knows if the OpenMPI package distributed with Ubuntu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    works right on Nehalem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Better install OpenMPI yourself from source code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    It is not a big deal, and may save you further trouble.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Recipe:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1) Install gfortran and g++ if you don't have them using apt-get.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    2) Put the OpenMPI tarball in, say /home/matt/downolads/openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    3) Make another install directory *not in the system directory tree*.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Something like &quot;mkdir /home/matt/apps/openmpi-X.Y.Z/&quot; (X.Y.Z=version)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    will work
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    4) cd /home/matt/downolads/openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    5) ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran  \
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --prefix=/home/matt/apps/openmpi-X.Y.Z
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    (Use the prefix flag to install in the directory of item 3.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    6) make
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    7) make install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    8) At the bottom of your /home/matt/.bashrc or .profile file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    put these lines:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    export PATH=/home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    export MANPATH=/home/matt/apps/openmpi-X.Y.Z/share/man:`man -w`
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    export
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    LD_LIBRARY_PATH=home/matt/apps/openmpi-X.Y.Z/lib:${LD_LIBRARY_PATH}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    (If you use csh/tcsh use instead:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    setenv PATH /home/matt/apps/openmpi-X.Y.Z/bin:${PATH}
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    etc)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    9) Logout and login again to freshen um the environment variables.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    10) Do &quot;which mpicc&quot;  to check that it is pointing to your newly
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    installed OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    11) Recompile and rerun the OpenMPI test programs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    with 2, 4, 8, 16, .... processors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Use full path names to mpicc and to mpirun,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if the change of PATH above doesn't work right.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ********
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    B) Nehalem is quite new hardware.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I don't know if the Ubuntu kernel 2.6.31-16 fully supports all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    of Nehalem features, particularly hyperthreading, and NUMA,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    which are used by MPI programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I am not the right person to give you advice about this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I googled out but couldn't find a clear information about
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    minimal kernel age/requirements to have Nehalem fully supported.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Some Nehalem owner in the list could come forward and tell.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    C) On the top screenshot you sent me, please try it again
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    (after you do item A) but type &quot;f&quot; and &quot;j&quot; to show the processors
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    that are running each process.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    D) Also, the screeshot shows 20GB of memory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    This sounds not as a optimal memory for Nehalem,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    which tend to be 6GB, 12GB, 24GB, 48GB.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Did you put together the system, or upgraded the memory yourself,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    of did you buy the computer as is?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    However, this should not break MPI anyway.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    E) Answering your question:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    It is true that different flavors of MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    used to compile (mpicc) and run (mpiexec) a program would probably
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    break right away, regardless of the number of processes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    However, when it comes to different versions of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    same MPI flavor (say OpenMPI 1.3.4 and OpenMPI 1.3.3)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I am not sure it will break.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I would guess it may run but not in a reliable way.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Problems may appear as you stress the system with more cores, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    But this is just a guess.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I hope this helps,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Gustavo Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Matthew MacManes wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Hi Gus,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Interestingly the results for the connectivity_c test... works
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        fine with -np &lt;8. For -np &gt;8 it works some of the time, other
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        times it HANGS. I have got to believe that this is a big clue!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Also, when it hangs, sometimes I get the message &quot;mpirun was
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        below&quot; Note that NO nodes are shown below.   Once, I got -np 250
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        to pass the connectivity test, but I was not able to replicate
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        this reliable, so I'm not sure if it was a fluke, or what.  Here
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        is a like to a screenshop of TOP when connectivity_c is hung
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        with -np 14.. I see that 2 processes are only at 50% CPU usage..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Hmmmm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;RgCLKokNOVqo7BYw&amp;feat=directlink &lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;RgCLKokNOVqo7BYw&amp;feat=directlink
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        &lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;RgCLKokNOVqo7BYw&amp;feat=directlink &lt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s">http://picasaweb.google.com/lh/photo/87zVEucBNFaQ0TieNVZtdw?authkey=Gv1s</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;RgCLKokNOVqo7BYw&amp;feat=directlink
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        The other tests, ring_c, hello_c, as well as the cxx versions of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        these guys with with all values of -np.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Using -mca mpi-paffinity_alone 1 I get the same behavior.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        I agree that I am should worry about the mismatch between where
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        the libraries are installed versus where I am telling my
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        programs to look for them. Would this type of mismatch cause
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        behavior like what I am seeing, i.e. working with  a small
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        number of processors, but failing with larger?  It seems like a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        mismatch would have the same effect regardless of the number of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        processors used. Maybe I am mistaken. Anyway, to address this,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        which mpirun gives me /usr/local/bin/mpirun.. so to configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        ./configure --with-mpi=/usr/local/bin/mpirun and to run
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        /usr/local/bin/mpirun -np X ...  This should
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        uname -a gives me: Linux macmanes 2.6.31-16-generic #52-Ubuntu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        SMP Thu Dec 3 22:07:16 UTC 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Matt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        On Dec 8, 2009, at 8:50 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Hi Matthew
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Please see comments/answers inline below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Matthew MacManes wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Hi Gus, Thanks for your ideas.. I have a few questions,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                and will try to answer yours in hopes of solving this!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            A simple way to test OpenMPI on your system is to run the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            test programs that come with the OpenMPI source code,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            hello_c.c, connectivity_c.c, and ring_c.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Get the tarball from the OpenMPI site, gzip and untar it,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            and look for it in the &quot;examples&quot; directory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Compile it with /your/path/to/openmpi/bin/mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Run it with /your/path/to/openmpi/bin/mpiexec -np X a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            using X = 2, 4, 8, 16, 32, 64, ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            This will tell if your OpenMPI is functional,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            and if you can run on many Nehalem cores,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            even with oversubscription perhaps.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            It will also set the stage for further investigation of your
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            actual programs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Should I worry about setting things like --num-cores
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                --bind-to-cores?  This, I think, gets at your questions
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                about processor affinity.. Am I right? I could not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                exactly figure out the -mca mpi-paffinity_alone stuff...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I use the simple minded -mca mpi-paffinity_alone 1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            This is probably the easiest way to assign a process to a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; core. There more complex  ways in OpenMPI, but I haven't tried. Indeed,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca mpi-paffinity_alone 1 does improve performance of our programs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            There is a chance that without it the 16 virtual cores of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            your Nehalem get confused with more than 3 processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            (you reported that -np &gt; 3 breaks).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Did you try adding just -mca mpi-paffinity_alone 1  to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            your mpiexec command line?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                1. Additional load: nope. nothing else, most of the time
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                not even firefox.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Turn off firefox, etc, to make it even better.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Ideally, use runlevel 3, no X, like a computer cluster node,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            but this may not be required.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                2. RAM: no problems apparent when monitoring through
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                TOP. Interesting, I did wonder about oversubscription,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                so I tried the option --nooversubscription, but this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                gave me an error mssage.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Oversubscription from your program would only happen if
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            you asked for more processes than available cores, i.e.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            -np &gt; 8 (or &quot;virtual&quot; cores, in case of Nehalem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hyperthreading, -np &gt; 16).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Since you have -np=4 there is no oversubscription,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            unless you have other external load (e.g. Matlab, etc),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            but you said you don't.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Yet another possibility would be if your program is threaded
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            (e.g. using OpenMP along with MPI), but considering what you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            said about OpenMP I would guess the programs don't use it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            For instance, you launch the program with 4 MPI processes,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            and each process decides to start, say, 8 OpenMP threads.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            You end up with 32 threads and 8 (real) cores (or 16
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            hyperthreaded
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            ones on Nehalem).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            What else does top say?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Any hog processes (memory- or CPU-wise)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            besides your program processes?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                3. I have not tried other MPI flavors.. Ive been
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                speaking to the authors of the programs, and they are
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                both using openMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I was not trying to convince you to use another MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I use MPICH2 also, but OpenMPI reigns here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            The idea or trying it with MPICH2 was just to check whether
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            is causing the problem, but I don't think it is.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                4. I don't think that this is a problem, as I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                specifying --with-mpi=/usr/bin/...  when I compile the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                programs. Is there any other way to be sure that this is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                not a problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Hmmm ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I don't know about your Ubuntu (we have CentOS and Fedora on
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            various
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            machines).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            However, most Linux distributions come with their MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flavors, and so do compilers, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Often times they install these goodies in unexpected places,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            and this has caused a lot of frustration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            There are tons of postings on this list that eventually
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            boiled down to mismatched versions of MPI in unexpected
</span><br>
<span class="quotelev3">&gt; &gt;&gt; places.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            The easy way is to use full path names to compile and to run.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Something like this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            /my/openmpi/bin/mpicc on your program configuration script),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            and something like this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            /my/openmpi/bin/mpiexec -np  ... bla, bla ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            when you submit the job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            You can check your version with &quot;which mpicc&quot;, &quot;which
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpiexec&quot;, and (perhaps using full path names) with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            &quot;ompi_info&quot;, &quot;mpicc --showme&quot;, &quot;mpiexec --help&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                5. I had not been, and you could see some shuffling when
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                monitoring the load on specific processors. I have tried
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                to use --bind-to-cores to deal with this. I don't
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                understand how to use the -mca options you asked about.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                6. I am using Ubuntu 9.10. gcc 4.4.1 and g++  4.4.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I am afraid I won't be of help, because I don't have Nehalem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            However, I read about Nehalem requiring quite recent kernels
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            to get all of its features working right.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            What is the output of &quot;uname -a&quot;?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            This will tell the kernel version, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Other list subscribers may give you a suggestion if you post
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            information.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MyBayes is a for bayesian phylogenetics:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ABySS: is a program for assembly of DNA sequence data:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                <a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Thanks for the links!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I had found the MrBayes link.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            I eventually found what your ABySS was about, but no links.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Amazing that it is about DNA/gene sequencing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Our abyss here is the deep ocean ... :)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Abysmal difference!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Do the programs mix MPI (message passing) with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    OpenMP (threads)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Im honestly not sure what this means..
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Some programs mix the two.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            OpenMP only works in a shared memory environment (e.g. a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; single computer like yours), whereas MPI can use both shared memory and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work across a network (e.g. in a cluster).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            There are other differences too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Unlikely that you have this hybrid type of parallel program,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            otherwise there would be some reference to OpenMP
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            on the very program configuration files, program
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            documentation, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Also, in general the configuration scripts of these hybrid
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            programs can turn on MPI only, or OpenMP only, or both,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            depending on how you configure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Even to compile with OpenMP you would need a proper compiler
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            flag, but that one might be hidden in a Makefile too, making
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            a bit hard to find. &quot;grep -n mp Makefile&quot; may give a clue.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Anything on the documentation that mentions threads or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMP?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            FYI, here is OpenMP:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            <a href="http://openmp.org/wp/">http://openmp.org/wp/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Thanks for all your help!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;             &gt; Matt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Well, so far it didn't really help. :(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            But let's hope to find a clue,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            maybe with a little help of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            our list subscriber friends.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Gustavo Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Hi Matthew
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    More guesses/questions than anything else:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    1) Is there any additional load on this machine?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    We had problems like that (on different machines)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when users start listening to streaming video, doing Matlab
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calculations,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    etc, while the MPI programs are running.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    This tends to oversubscribe the cores, and may lead
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    to crashes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    2) RAM:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Can you monitor the RAM usage through &quot;top&quot;?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    (I presume you are on Linux.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    It may show unexpected memory leaks, if they exist.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    On &quot;top&quot;, type &quot;1&quot; (one) see all cores, type &quot;f&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    then &quot;j&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    to see the core number associated to each process.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    3) Do the programs work right with other MPI flavors
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    (e.g. MPICH2)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    If not, then it is not OpenMPI's fault.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    4) Any possibility that the MPI versions/flavors of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    mpicc and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    mpirun that you are using to compile and launch the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    program are not the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    same?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    mpiexec -mca mpi_paffinity_alone 1 -np ... bla, bla
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Context switching across the cores may also cause
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    trouble, I suppose.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    6) Which Linux are you using (uname -a)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    On other mailing lists I read reports that only
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    quite recent kernels
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    support all the Intel Nehalem processor features
</span><br>
<span class="quotelev3">&gt; &gt;&gt; well. I don't have Nehalem, I can't help here,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    but the information may be useful
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    for other list subscribers to help you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    ***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    As for the programs, some programs require specific
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    setup,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    (and even specific compilation) when the number of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    MPI processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    vary.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    It may help if you tell us a link to the program
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sites.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Baysian statistics is not totally out of our
</span><br>
<span class="quotelev3">&gt; &gt;&gt; business, but phylogenetic genetic trees is not really my league, hence
</span><br>
<span class="quotelev3">&gt; &gt;&gt; forgive me any bad guesses, please,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    but would it need specific compilation or a different
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    set of input parameters to run correctly on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different number of processors?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Do the programs mix MPI (message passing) with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    OpenMP (threads)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    I found this MrBayes, which seems to do the above:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    <a href="http://mrbayes.csit.fsu.edu/">http://mrbayes.csit.fsu.edu/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    <a href="http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page">http://mrbayes.csit.fsu.edu/wiki/index.php/Main_Page</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    As for the ABySS, what is it, where can it be found?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Doesn't look like a deep ocean circulation model, as
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    the name suggest.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    My $0.02
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                    Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        _________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Matthew MacManes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        PhD Candidate
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        University of California- Berkeley
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Museum of Vertebrate Zoology
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Phone: 510-495-5833
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Mattijs Janssens
OpenCFD Ltd.
9 Albert Road,
Caversham,
Reading RG4 7AN.
Tel: +44 (0)118 9471030
Email: M.Janssens_at_[hidden]
URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11501.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW"</a>
<li><strong>Previous message:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11501.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa) RESOLVED FOR NOW"</a>
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
