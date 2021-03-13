<?php
/* 
------------------
Language: Slovak
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'LearnQntm';
$lang['HEADER_TITLE'] = 'My website header title';
$lang['SITE_NAME'] = 'My Website';
$lang['SLOGAN'] = 'My slogan here';
$lang['HEADING'] = 'Heading';

// Navbar
$lang['NAV_HOME'] = 'Domov';
$lang['NAV_ABOUT'] = 'O nás';
$lang['NAV_PRACTISE'] ='Úlohy';
$lang['NAV_LEARN'] = 'Učenie';
$lang['NAV_FEATURES'] = 'Výhody';
$lang['NAV_IDE'] = 'IDE';
$lang['NAV_SIGN_IN'] = 'Prihlásiť sa';
$lang['NAV_PROFILE'] = 'Profil';

//Footer
$lang['FOOTER_QUICK-LINKS'] = 'Odkazy';
$lang['FOOTER_RESOURCES'] = 'Zdroje';
$lang['FOOTER_FEATURES'] = 'Výhody';
$lang['FOOTER_NEWSLETTER'] = 'Buďte informovaní';
$lang['FOOTER_COMUNNITY'] = 'Komunita';

// Banner
$lang['BANNER_TITLE'] = 'Učenie praxou';
$lang['BANNER_CONTENT'] = 'Quantum Computing je budúcnosťou technologii. Nauč sa o tom interaktíve a zadarmo';
$lang['BANNER_BUTTON'] = 'Začať';

//Join us
$lang['JOIN_TITLE'] = 'Pripojte sa teraz k LearnQuantum zadarmo ';

//Sign in
$lang['SIGN_IN_BOX_MESSAGE'] = 'Prihlaste sa aby ste mohli pokračovať';
$lang['SIGN_IN_REMEMBER'] = 'Zapamätať';
$lang['SIGN_IN_BUTTON'] = 'Prihlásiť';
$lang['SIGN_IN_GITHUB'] = 'Prihlásiť sa cez Github';
$lang['SIGN_FORGOT'] = 'Zabudli ste heslo?';
$lang['SIGN_IN_REGISTER_LINK'] = 'Vytvoriť nový učet zadarmo';
$lang['SIGN_USER'] = 'Prihlasovacie meno';
$lang['SIGN_PASS'] = 'Heslo';

//Sign up
$lang['SIGN_UP_BOX_MESSAGE'] = 'Registrujte sa zadarmo na vytvorenie účtu';
$lang['SIGN_UP_REMEMBER'] = 'Zapamätať';
$lang['SIGN_UP_BUTTON'] = 'Registrovať';
$lang['SIGN_EMAIL'] = 'Email';
$lang['SIGN_CONFIRM_PASS'] = 'Potvrdiť heslo';
$lang['SIGN_UP_GITHUB'] = 'Registrovať sa cez Github';
$lang['SING_UP_ALREADY_ACCOUNT'] = 'Máte už vytvorený účet ?';

//Solve problems
$lang['PRACTISE_TITLE'] = 'Uč sa riešením úloh';

// Learn
$lang['LEARN_TITLE'] = 'Quantum Computing';
$lang['LEARN_CURRIC_INTRO'] = 'Úvod';
$lang['LEARN_DESCRIPTION_INTRO'] = 'V tejto časti ...';

$lang['LEARN_CURRIC_QUBIT'] = 'Qubity and Kvantové stavy';
$lang['LEARN_DESCRIPTION_QUBIT'] = 'Tu sa dozviete čo sú to qubity a aké existujú kvantové stavy...';

$lang['LEARN_CURRIC_PROG'] = 'Programovacie nástroje';
$lang['LEARN_DESCRIPTION_PROG'] = 'Na to aby sme vedeli použit vedomosti o quantum computingu, vieme použiť rôzne nastroje...';

$lang['LEARN_CURRIC_ALGO'] = 'Kvantové Algoritmi';
$lang['LEARN_DESCRIPTION_ALGO'] = 'Tak ako na normálnych počítačoch exitujú algoritmi, tak aj algoritmi pre Q. C. existujú...';

$lang['LEARN_CURRIC_FUTURE'] = 'Využitie v budúcnosti';
$lang['LEARN_DESCRIPTION_ALGO'] = 'Ake je využitie v buducnosti pre kvantove počítače ?';


//----------- Intro ---------------
// Section 0
$lang['LEARN_INTRO_TEXT'] = 'Welcome to this course about Quantum Computing. Through this course you will learn some basic principles taken from quantum mechanics';

$lang['LEARN_INTRO_TITLE_PRE'] = 'Prerequisites';
$lang['LEARN_INTRO_TEXT_PRE'] = 'The aim of this course is to teach about Quantum Computing, without in depth knowledge of quantum mechanincs. 
With that said, some basic math knowledge (such as: linear algebra, probability,...) is recommended. 
If you want to learn the math, here are some good resources: <a target="_blank" rel="noopener noreferrer" href="https://www.khanacademy.org/math/linear-algebra">Linear Algebra</a>, <a target="_blank" rel="noopener noreferrer" href="https://www.khanacademy.org/math/algebra2/x2ec2f6f830c9fb89:complex">Complex numbers</a>
';

//Section 1
$lang['LEARN_INTRO_TITLE_EXPL'] = 'Čo je Quantum Computing';
$lang['LEARN_INTRO_TEXT_EXPL'] = 'Quantum computing is a computing paradigm that uses quantum mechanical properties
of matter in order to preform calculations calculations.
Je to
';

$lang['LEARN_INTRO_TITLE_HISTORY'] = 'Trochu Historie';
$lang['LEARN_INTRO_TEXT_HISTORY'] = 'Quantum computers still are still not powerful enough / dont have enough qubits to break RSA encryption or be fully commercial, the theory behind it was created several deacades ago.

Quantum mechanics was developed in the begenning of the 20th century, The begenning of quantum computing was struck by Richard Faynman inthe begenning of 1980s.
';

$lang['LEARN_INTRO_TEXT_EXPL2'] = 'As you can see a quantum computer is much more harder to build ';
$lang['LEARN_INTRO_TITLE_CLASSIC'] = 'Clasické Bity';
$lang['LEARN_INTRO_TEXT_CLASSIC'] = '
Before we go to the details of qubits, lets look on how normal bits work. As you may already know, information can be stored and processed as a series of 0s and 1s. This are called bits or binary digits.';

//Qubits
$lang['LEARN_QUBITS_TITLE'] = 'Čo je to qubit?';
$lang['LEARN_QUBITS_TEXT'] = 'Qubit is the unit of Quantum Information. In bits, you can store 0s and 1s. A qubit on the other hand can all combinations at once.  
qubit is a two-level quantum system where the two basis qubit states are usually written as \(∣0⟩\) and \(∣1⟩\). Qubit can be in state \(∣0⟩\), \(∣1⟩\) or combination of both states at the same time. 
This phenomen from quantum mechanics is called superposition.

<img style="width: 60%" src="../../images/learn/qubit.webp" alt="">
A generic qubit is in a superposition:
<span style="color:black">\[
    ψ〉= α|0〉+β|1〉
\]</span>

\[
    |α|^2+|β|^2=1
\]
\[
     |0\rangle = \begin{bmatrix} 1 \\\ 0 \end{bmatrix} \, \, \, \, |1\rangle =\begin{bmatrix} 0 \\\ 1 \end{bmatrix}.
\]

';

$lang['LEARN_INTRO_TITLE_CLASSIC'] = 'Klasický Bit';
$lang['LEARN_INTRO_TEXT_CLASSIC'] = '
Klasicky bit, skratene bit, predstavuje zAkladnd jednotku informacie. Nado-
bida jednu z diskrétnych hodndét {0,1}. Ak spojime 3 bity, méZeme v nich
uchovat hodnoty napr. 101, 010, atd. Trividlna, ale pre nas délezita skutoé-
nost je, Ze klasicky bit neméZe nadobtidat Ziadne iné hodnoty.

Pod pojmom algoritmus rozumieme kone¢ny deterministicky sled krokov,
ktory riesi dany typ problému.

Klasicky poéitaé mOézeme interpretovat dvoma spésobmi: ako Turingov stroj
alebo ako zapojenie logickych obvodov. Podrobny popis Turingovho stroja
je teraz nepodstatny a mdzZeme ho nasjt v [2]. Dédlezité je ale nasledujiice
tvrdenie [2]:';

$lang['LEARN_SUBMIT'] = 'Skontrolovať';
$lang['LEARN_CORRECT'] = 'Správne';
$lang['LEARN_WRONG'] = 'Nesprávne. Skúste prosim znovu';

$lang['LEARN_COMPLETED'] = 'Dokončené ';
$lang['BACK'] = 'Späť';
?>