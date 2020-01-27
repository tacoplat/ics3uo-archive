<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Putting It All Together - ICS3UO</title>	
	<meta name="description" content="Section 3 Unit Task.">
	<meta name="author" content="Andy Zhen">	
	<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/emojione/151/jigsaw-puzzle-piece_1f9e9.png">
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'>
	<style>
		table, th, td {
 		 border: 1px solid black;
 		 border-collapse: collapse;
 		 padding: 5px;
 		 overflow: auto;
 		 vertical-align: top;
		}
		h3 {
		 font-size: 1.1em;
		 font-family:'ABeeZee';
		 color: #4d004d;
		 text-decoration: underline;
		}
		h1 {
		 text-align:center;
		 color:white;
		 font-family:'Faster One';
		 font-size: 32px;
		}
		ul, li {
		 list-style-type: circle;
		 margin: 40px 0;
		}
		.centerblock {
		 margin: auto;
		 width: 900px;
		}
		.floatleft {
		 float: left;
		}
		.phpbut {
  		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  -webkit-box-shadow: 2px 3px 4px #666666;
		  -moz-box-shadow: 2px 3px 4px #666666;
		  box-shadow: 2px 3px 4px #666666;
		  font-family: 'ABeeZee';
		  color: #ffffff;
		  font-size: 20px;
		  background: #133c55;
		  padding: 12px 20px 12px 20px;
		  text-decoration: none;
		}
		.phpbut:hover {
		  background: #49687a;
		  text-decoration: none;
		}
		.pytbut {
		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  -webkit-box-shadow: 2px 3px 4px #666666;
		  -moz-box-shadow: 2px 3px 4px #666666;
		  box-shadow: 2px 3px 4px #666666;
		  font-family: 'ABeeZee';
		  color: #ffffff;
		  font-size: 20px;
		  background: #81F4E1;
		  padding: 12px 20px 12px 20px;
		  text-decoration: none;
		}
		.pytbut:hover {
		  background: #51e8cf;
		  text-decoration: none;
		}
		.javbut {
		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  -webkit-box-shadow: 2px 3px 4px #666666;
		  -moz-box-shadow: 2px 3px 4px #666666;
		  box-shadow: 2px 3px 4px #666666;
		  font-family: 'ABeeZee';
		  color: #ffffff;
		  font-size: 20px;
		  background: #56CBF9;
		  padding: 12px 20px 12px 20px;
		  text-decoration: none;
		}
		.javbut:hover {
		  background: #5ba7c2;
		  text-decoration: none;
		}
		.cshbut {
		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  -webkit-box-shadow: 2px 3px 4px #666666;
		  -moz-box-shadow: 2px 3px 4px #666666;
		  box-shadow: 2px 3px 4px #666666;
		  font-family: 'ABeeZee';
		  color: #ffffff;
		  font-size: 20px;
		  background: #ff729f;
		  padding: 12px 20px 12px 20px;
		  text-decoration: none;
		}
		.cshbut:hover {
		  background: #e890ad;
		  text-decoration: none;
		}
		.cppbut {
		  -webkit-border-radius: 10;
		  -moz-border-radius: 10;
		  border-radius: 10px;
		  -webkit-box-shadow: 2px 3px 4px #666666;
		  -moz-box-shadow: 2px 3px 4px #666666;
		  box-shadow: 2px 3px 4px #666666;
		  font-family: 'ABeeZee';
		  color: #ffffff;
		  font-size: 20px;
		  background: #d3c4d1;
		  padding: 12px 20px 12px 20px;
		  text-decoration: none;
		}
		.cppbut:hover {
		  background: #d184c7;
		  text-decoration: none;
		}
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="floatleft"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div class="centerblock">
		<table width="900px" align="center">
		<tr>
			<td colspan="2" style="color: green; background-color: #9966ff;">
				<h1>Putting it All Together</h1>
			</td>
		</tr>
		<tr>
			<td>
				<h3>Roles of Software Components</h3>
				<img src="http://icsprogramming.ca/examples/images/assembly-operating-language-application.jpg">
				<p>Above this paragraph is a diagram, showing the process in which different components work together to produce an output. At each step, data is used to perform specific functions to refine the content to execute more specific tasks.</p>
				<p>The <i>operating system</i> is a number of programs that are directly integrated into a machine. The computer's operating system is responsible for managing the software and hardware (CPU, memory, storage, etc...) components and linking them together. Typically, operating systems have a user interface which allows the user to interact with the system in a comprehensible manner.</p>
				<p>A <i>programming language</i> is a language that is easily understood by both a computer and a human. They allow humans to use logic and give the computer a series of instructions to follow, in order to produce an output. Technically, in order for the computer to understand programming languages, they must first be "translated" into binary. There is a plethora of different programming languages in existence, but some common ones are: Java, C++ and Python.</p>
				<p>An <i>application</i> has a very specific task. It is one or more programs that have been made to perform functions for the "end-user". Applications cannot run without an operating system present, as they depend on resources from the system. Examples of applications include: video games, audio-calling programs, browsers, etc...)</p>
			</td>
			<td>
				<h3>Machine Code/Interpreters & Compilers</h3>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/1OukpDfsuXE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<p>A <i>programming language</i> is a system of communication, which humans use to provide a computer with a set of instructions or task. They are similar to human languages, in the way that they are both controlled by a set of rules or convention (syntax). Programming languages can be divided into two main groups: Low-level languages and High-level languages.</p>
				<p><i>Low-level languages</i> are progamming languages that are very similar to the way that the machine's components communicate with each other. Low-level languages can once again be divided into two more subcategories.<br>Machine language is the basic language that the computer is designed to understand without translation (ie binary notation).<br><i>Assembly language</i> is a set of symbols which can be arranged in a logical manner as a set of instructions for the computer. The purpose of the assembly language is to be a low-level language that humans can understand and use easier than machine language. When using an assembly language, one must first "translate" the text into machine language through the use of an "assembler".</p>
				<p><i>High-level languages</i> are programming languages which consist of proper English phrases and mathematical symbols as a part of its instructions. (ie. C++, Python). High-level languages are beneficial, as they are quite similar to human logic and grammar constructs, so they are easier to understand than low-level languages. While machine and assembly code are native to their respective computers, high-level languages can typically be run cross-platform, with the help of a translation program, using either a compiler or interpreter.</p>
				<p>A <i>compiler</i> is a program that translates high-level languages (source code) into machine language, for the computer to understand. The compiler translates the code once, creating an executable file which can be run an infinite number of times.<br>An <i>interpreter</i> translates the source code as it runs. This is typically more time-consuming than compiling, as compiled programs only have to be compiled once, however interpreting does offer the benefit of flexibility. The majority of modern programs are compiled for the above reason, but also because it creates a layer of confidentiality.</p>
			</td>
		</tr>
		<tr>
			<td>
				<h3>High-Level Programming Languages</h3>
				<ul>
					<li><a href="https://www.php.net/manual/en/preface.php" class="phpbut">PHP</a></li>
					<li><a href="https://www.python.org/about/gettingstarted/" class="pytbut">Python</a></li>
					<li><a href="https://www.oracle.com/technetwork/topics/newtojava/overview/index.html" class="javbut">Java</a></li>
					<li><a href="https://docs.microsoft.com/en-us/dotnet/csharp/getting-started/introduction-to-the-csharp-language-and-the-net-framework" class="cshbut">C#</a></li>
					<li><a href="http://www.cplusplus.com/info/" class="cppbut">C++</a></li>
				</ul>
			</td>
			<td>
				<h3>My Favourite Place on Earth</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245986.42220696757!2d-79.9262904484026!3d43.31889870461344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b63d2965d93b7%3A0xa44a27764c2b554f!2sBurlington%2C%20ON!5e0!3m2!1sen!2sca!4v1569200807832!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<p>This is Burlington, Ontario: A municipality within the Region of Halton (along with Oakville, Milton and Halton Hills. We are a developing city on the edge of the Greater Toronto Area, with a population of over 200,000. I consider myself a proud Burlingtonian, having been born right here at Joseph Brant Hospital, and having lived here for my entire life. Burlington is generally seen as fairly quaint; I mean, we're often referred to as "Borington" due to the lack of interesting attractions here, but it's still a closely-knit community.</p>
				<img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/f0/ce/0b/today-from-the-air.jpg" alt=burlington-skyline>
				<p>There's honestly not much to do here, but we <i>are</i> home to many large-scale events every year. For example, we hold Canada's Largest Ribfest and the Sound of Music Festival every year at Spencer Smith Park. We aren't known for our food scene, but we have a number of great restauraunts both in the downtown core, and scattered around the city.</p>
				<p><b>Fun fact:</b> All the McDonald's restaurants in Burlington and Waterdown (there are 10 in total) are owned by the same family-run franchise. If you're lucky, you can catch me in the kitchen at the Millcroft location.</p>
			</td>
		</tr>
	</table>
	</div>
</body>