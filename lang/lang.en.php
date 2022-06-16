<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'LearnQNTM';
$lang['HEADER_TITLE'] = 'My website header title';
$lang['SITE_NAME'] = 'My Website';
$lang['SLOGAN'] = 'My slogan here';
$lang['HEADING'] = 'Heading';

// Navbar
$lang['NAV_HOME'] = 'Home';
$lang['NAV_ABOUT'] = 'About';
$lang['NAV_PRACTISE'] = 'Practise';
$lang['NAV_FEATURES'] = 'Features';
$lang['NAV_IDE'] = 'IDE';
$lang['NAV_LEARN'] = 'Learn';
$lang['NAV_SIGN_IN'] = 'Sign in';
$lang['NAV_PROFILE'] = 'Profile';

//Footer
$lang['FOOTER_QUICK-LINKS'] = 'Quick Links';
$lang['FOOTER_RESOURCES'] = 'Resources';
$lang['FOOTER_FEATURES'] = 'Features';
$lang['FOOTER_NEWSLETTER'] = 'Newsletter';
$lang['FOOTER_COMUNNITY'] = 'Community';

// Banner
$lang['BANNER_TITLE'] = 'Learn by doing';
$lang['BANNER_CONTENT'] = 'LearnQNTM is the best place to learn about Quantum Computing by practising and learning with interactive excercises.';
$lang['BANNER_BUTTON'] = 'Start Learning';
$lang['BANNER_STARTED'] = 'Get Started';

//FEUTURES
$lang['FEATURES_TITLE'] = 'Great Features';
$lang['FEATURES_DESCRIPTION'] = "You don't need to study univeresity lectures to grasp concepts of Quantum Computing. LearnQNTM provides interactive learning experience instead.";
$lang['FEATURES_TITLE_EXCEC'] = 'Interactive excercises';
$lang['FEATURES_DESCRIPTION_EXCEC'] = 'You can do excersises and quizes and have better learning experience';
$lang['FEATURES_TITLE_PROBLEM'] = 'Problem Solving';
$lang['FEATURES_DESCRIPTION_PROBLEM'] = 'We belive that it is essential to solve problems in order to become better';
$lang['FEATURES_TITLE_DOING'] = 'Learning by doing';
$lang['FEATURES_DESCRIPTION_DOING'] = 'Dont read just boring texts, but learn by creating code as well';

//Join us
$lang['JOIN_TITLE'] = 'Join now LearnQntm for free';
$lang['JOIN_DESCRIPTION'] = 'Start learning about quantum computing today by signing up.';

//Sign in
$lang['SIGN_IN_BOX_MESSAGE'] = 'Sign in to start your session';
$lang['SIGN_IN_REMEMBER'] = 'Remeber me';
$lang['SIGN_IN_BUTTON'] = 'Sign in';
$lang['SIGN_IN_GITHUB'] = 'Sign in using Github';
$lang['SIGN_FORGOT'] = 'I forgot my password';
$lang['SIGN_IN_REGISTER_LINK'] = 'Create a new account';
$lang['SIGN_USER'] = 'Username';
$lang['SIGN_PASS'] = 'Password';
/* Messages */
$lang['SIGN_IN_MESSAGE_SUCCESS'] = 'You are now logged in';

$lang['SIGN_IN_ERROR_USERNAME_REQ'] = 'Username is required';
$lang['SIGN_IN_ERROR_PASS_REQ'] = 'Password is required';
$lang['SIGN_IN_ERROR_UNVERIFIED'] = "Your email address hasn't been verified yet. Please check your email box.";
$lang['SIGN_IN_ERROR_PASS'] = 'Wrong password';
$lang['SIGN_IN_BOX_user_OR_PASS'] = 'Wrong username and password combination';


//Sign up
$lang['SIGN_UP_BOX_MESSAGE'] = 'Sign up for free to create an account';
$lang['SIGN_UP_REMEMBER'] = 'Remeber me';
$lang['SIGN_UP_BUTTON'] = 'Sign up';
$lang['SIGN_EMAIL'] = 'Email';
$lang['SIGN_CONFIRM_PASS'] = 'Confirm Password';
$lang['SIGN_UP_GITHUB'] = 'Sign up using Github';
$lang['SING_UP_ALREADY_ACCOUNT'] = 'Already have an account ?';
/* Messages */
if  (!isset($email)) { $email = ''; }
$lang['SIGN_UP_MESSAGE_SUCCESS'] = 'You are now logged in';
$lang['SIGN_UP_MESSAGE_MAIL'] = "An email has been sent to $email, check your mailbox.";

$lang['SIGN_UP_ERROR_EMAIL'] = 'Email is required';
$lang['SIGN_UP_ERROR_USER_EXISTS'] = 'Username already exists';
$lang['SIGN_UP_ERROR_EMAIL_EXISTS'] = 'Email already exists';
$lang['SIGN_UP_ERROR_PASS_MATCH'] = 'The two passwords do not match';
$lang['SIGN_UP_BOX_USER_OR_PASS'] = 'Wrong username and password combination';
$lang['SIGN_UP_ERROR'] = 'Error. Please try again later.';

//Forgot password
$lang['FORGOT_BUTTON'] = 'Reset';
$lang['FORGOT_MESSAGE'] = 'Enter email, you registered to reset password';
$lang['FORGOT_NO_USER'] = 'Sorry, no user exists on our system with that email';
$lang['FORGOT_UPDATE_PASS'] = 'Your password has been succesfully changed';
$lang['FORGOT_RESET_PASS'] = 'You can enter your new password';

//Solve problems
$lang['PRACTISE_TITLE'] = 'Practise by solving problems';
$lang['PRACTISE_DIFFICULTY'] = 'Difficulty';
$lang['PRACTISE_DIFFICULTY_EASY'] = 'Easy';
$lang['PRACTISE_DIFFICULTY_MEDIUM'] = 'Medium';
$lang['PRACTISE_DIFFICULTY_HARD'] = 'Hard';
$LANG['EVENTS'] = 'New Events';

// Learn Curriculum
$lang['LEARN_TITLE'] = 'Quantum Computing';
$lang['LEARN_CURRIC_INTRO'] = 'Introduction';
$lang['LEARN_DESCRIPTION_INTRO'] = 'This is the introdution chapter...';

$lang['LEARN_CURRIC_QUBIT'] = 'Qubits and Quantum states';
$lang['LEARN_DESCRIPTION_QUBIT'] = 'This is the introdution chapter...';

$lang['LEARN_CURRIC_PROG'] = 'Programming tools';
$lang['LEARN_DESCRIPTION_PROG'] = 'This is the introdution chapter...';

$lang['LEARN_CURRIC_ALGO'] = 'Quantum Algorithms';
$lang['LEARN_DESCRIPTION_ALGO'] = 'This is the introdution chapter...';

$lang['LEARN_CURRIC_FUTURE'] = 'Future Application';
$lang['LEARN_DESCRIPTION_ALGO'] = 'You will learn about future application of Quantum Computing. Will they be able to break any encryption ? Or help with chemistry?';

//----------- Intro ---------------
// Section 0
$lang['LEARN_INTRO_TEXT'] = 'Welcome to this course about Quantum Computing. Through this course you will learn some basic principles taken from quantum mechanics.';

$lang['LEARN_INTRO_TITLE_PRE'] = 'Prerequisites';
$lang['LEARN_INTRO_TEXT_PRE'] = 'The aim of this course is to teach about Quantum Computing, without previous knowledge of quantum mechanincs. 
With that being said, some math knowledge (such as: linear algebra, probability,...) is recommended. Some programming knowledge is also assumed.
If you want to learn the math, here are some good resources: <a target="_blank" rel="noopener noreferrer" href="https://www.khanacademy.org/math/linear-algebra">Linear Algebra</a>, <a target="_blank" rel="noopener noreferrer" href="https://www.khanacademy.org/math/algebra2/x2ec2f6f830c9fb89:complex">Complex numbers</a>
';
//Section 1
$lang['LEARN_INTRO_TITLE_EXPL'] = 'What is Quantum Computing?';
$lang['LEARN_INTRO_TEXT_EXPL'] = "Quantum computing is an area of study that uses properties from quantum mechanics in order to preform computational calculations. These computations are preformed on <strong>quantum computer</strong>. These are computers that perform quantum computations.
As you may know, classical computers store informations in bits. Quantum Computers however perform calculations based on the probability of an object's state before it is measured - instead of just 1s or 0s. These quantum bits are called qubits.
";

$lang['LEARN_INTRO_TITLE_HISTORY'] = 'Little bit of History';
$lang['LEARN_INTRO_TEXT_HISTORY'] = 'Quantum computers are still in rather earlier stage of development and it is very difficult to have many quibits in quantum computer, therefore they aren\'t fully commercially applicable yet. However, the theory  behind it was created decades ago.
<span class="title-h4">Faynman & Benioff - 1981</span>
Quantum mechanics was developed in the beginning of the 20th century, The beginning of quantum computing was struck by Richard Faynman in the begenning of 1980s.
Paul Benioff and Richard Feynman gave lectures on quantum computing at the Physics Conference at the MIT.
Feynman observed that it is impossible to simulate the quantum system on a classical computer efficiently. 
Benioffs work demonstrated that a computer can operate according to quantum mechanics laws.
<span class="title-h4">Shor - 1994</span>
Peter Shor invents the Shor\'s algorithm in the year 1994. The Shor Algorithm can effectively find large prime factors for \(N\) exponentially much faster than the best known classical algorithm, which is crucial in breaking encryption. This created a great increase of interest in the area of Quantum Computing.
<span class="title-h4">First solid state quantum proccesor - 2009</span>
In 2009, Yale created first solid-state quantum processor, a 2-qubit superconducting chip
';

$lang['LEARN_INTRO_TEXT_EXPL2'] = 'As you can see a quantum computer is much more harder to build than normal computer. There are several models of quantum computers and this include: Quantum circuits, Quantum Turing machines or measurement based quantum computers. ';

$lang['LEARN_INTRO_Q1'] = 'What is Quantum Computing ?';
$lang['LEARN_INTRO_Q1_A'] = 'It is use of normal computers to simulated quantum world.';
$lang['LEARN_INTRO_Q1_B'] = 'It is computing with the word quantum.';
$lang['LEARN_INTRO_Q1_C'] = 'It is area of study that uses properties from quantum mechanics in order to preform computations on Quantum computer';

$lang['LEARN_INTRO_TITLE_CLASSIC'] = 'Classic Bits';
$lang['LEARN_INTRO_TEXT_CLASSIC'] = 'Before we go to the details of qubits, lets look on how normal bits work. As you may already know, information can be stored and processed as a series of 0s and 1s. This are called bits or binary digits.
These are intended to be the easiest alphabet in the world. We can represent any piece of information with just two characters. When we are represtenting some numbers, we usually use <strong>decimal system</strong> \((0, 1, 2, 3, 4, 5, 6, 7, 8, 9)\).

We can represent decimal numbers in different notation. For example number \(3125\) can be written like this:
\[
    3\times10^3 + 1\times10^2 + 2\times10^1 + 5\times10^0
\]
We can represent decimal numbers in a certain way where we can see the reminder:

    <span style="line-height: 2rem">\(3125 = 2\times1562 + 1\) </span>
    <span style="line-height: 2rem">\(1562 = 2\times781 + 0\)</span>
    <span style="line-height: 2rem">\(781 = 2\times 390 + 1\) </span>
    <span style="line-height: 2rem">\(...\) </span>
    <span style="line-height: 2rem">\(6 = 2\times3 + 0\) </span>
    <span style="line-height: 2rem">\(3 = 2\times1 + 1\) </span>
    <span style="line-height: 2rem">\(1 = 2\times0 + 1\) </span>

The reminders after division by 2 are the binary digits.
That how decimal number \(3125\) is represented in binary \(110000110101\).
The numbers aren\'t only things that can be represented in binary digits. In fact, letters, images, or even sounds can be represetned in binary.
';

$lang['LEARN_INTRO_TITLE_PROG'] = 'Programming Excercise';
$lang['LEARN_INTRO_DESCR_PROG'] = 'Here is a little programming excersise. You are supposed to write a function that will take as an input decimal number. You will return it in binary system.
<strong>Input</strong>:
    154
<strong>Output</strong>:
    10011010

Return the output in a string format - \'10011010\'. Please put your code into predefinied function so the code can be checked properlily
';

//Qubits
$lang['LEARN_QUBITS_TITLE'] = 'What is qubit ?';
$lang['LEARN_QUBITS_TEXT'] = 'Qubit is an unit of <strong>Quantum Information</strong>. As we learned in previous chapter, classical computation uses bits (which values are either \(0\) or \(1\)) to store infromation, quantum computers use <strong>quibits</strong> for that purpose. 
A qubit on the other hand can store all combinations at once, with can be very useful in some scenarios.  

The qubit is an quantum objects that behaves by the laws of quantum mechanics
where the two basis qubit states are usually written as \(∣0⟩\) and \(∣1⟩\). Those symbols are just notation describing vectors of qubit states introduced by Dirac.
Qubit can be in state \(∣0⟩\), \(∣1⟩\) or combination of both states at the same time. 
\[
    |0\rangle = \begin{bmatrix} 1 \\\ 0 \end{bmatrix} \, \, \, \, |1\rangle =\begin{bmatrix} 0 \\\ 1 \end{bmatrix}.
\]  
As you can see, qubit can be expressed as vectors. They\'re great for explrasing quantities with direction and magnitude. 
This described phenomen from quantum mechanics is called <strong>superposition</strong>. Qubits can consist of two states in a probabillistic manner, therfore we can\'t be sure what we will measure.
So for an example a bit has 100% chance of being either 0 or 1. On the other hand qubits can have pe

A generic qubit is in a superposition state:
\[
    ψ〉= α|0〉+ β|1〉
\]
The coeffcients \(α\) and \(β\) can have any value. In fact, they can be not only any real numbers, but also complex numbers.
Here you can see how the block shepere looks like:
<img style="width: 60%" src="../../images/learn/qubit.webp" alt="">


\[
    |α|^2+|β|^2=1
\]

';
$lang['LEARN_QUBITS_Q1'] = "Which state are we more likely to measure in the following qubit state:\n\[ ψ〉= 0.25|0〉+ 0.43|1〉\]";
$lang['LEARN_QUBITS_Q1_A'] = 'We are more likely to measure |0〉';
$lang['LEARN_QUBITS_Q1_B'] = 'We are more likely to measure |1〉';
$lang['LEARN_QUBITS_Q1_C'] = 'The probability to measure |0〉or |1〉is same';

$lang['LEARN_QUBITS_TITLE_CIRCUIT'] = 'Quantum Circuits';
$lang['LEARN_QUBITS_TEXT_CIRCUIT'] = 'Quantum circuit';

$lang['LEARN_QUBITS_TITLE_STATES'] = 'Quantum States';
$lang['LEARN_QUBITS_TEXT_STATES'] = 'As mentioned before, qubits act diffrently than normal bits. They have certian properties from world of quantum mechanics. These';
 
$lang['LEARN_ENTER'] = 'Enter';
$lang['LEARN_SUBMIT'] = 'Submit';
$lang['LEARN_CORRECT'] = 'Correct';
$lang['LEARN_WRONG'] = 'Incorrect. Please try again';
$lang['LEARN_COMPILED_SUCCESS'] = 'Success. Your code has been submited succesfully';
$lang['LEARN_COMPILED_WRONG'] = "Wrong answer. Number of successful tests: ";
$lang['LEARN_COMPLETED'] = 'Completed ';
$lang['BACK'] = 'Back';
$lang['SEARCH'] = 'Search';
$lang['COMMING'] = 'Comming soon!';
$lang['LEARN_YOUR_CODE'] = 'Enter your code here';
?>