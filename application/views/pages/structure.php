<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-12 ">
            <h3 class="text-themecolor" style="text-align:center">C Program Structure</h3>
        </div>


    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="alert alert-info" style=" text-align: justify">

                    <h3 class="text-info" style="text-align:center">C Program Structure</h3>

                    <p style="text-align: justify;">This C programming basics section explains&nbsp;a simple “Hello World” C program. Also, it&nbsp;covers below basic topics&nbsp;as well, which are to be known by any C programmer before writing a C program.</p>
                    <ol style="text-align: justify;">
                      <li style="text-align: justify;">C programming basic commands to write a C program</li>
                      <li style="text-align: justify;">A simple C program with output and explanation</li>
                      <li style="text-align: justify;">Steps to write C programs and get the output</li>
                      <li style="text-align: justify;">Creation, Compilation and Execution of a C program<br>
                      * How to install C compiler and IDE tool to run C programming codes</li>
                      <li style="text-align: justify;">Basic structure of a C program<br>
                      *&nbsp;Example C program to compare all the sections<br>
                      * Description for each section of the C program</li>
                      </ol>
                      <br>
                    <h3 class="text-info" style="text-align:center">C programming basics to write a C Program</h3>
                    <p style="text-align: justify;">Below are few commands and syntax used in C programming to write a simple C program. Let’s see all the sections of a simple C program line by line.</p>
                    <table>
                        <tbody>
                        <tr>
                        <td style="text-align: center; border: 1px solid powderblue;"><strong>C Basic commands</strong></td>
                        <td style="text-align: center; border: 1px solid powderblue;"><strong>Explanation</strong></td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">#include &lt;stdio.h&gt;</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">This is a preprocessor command that includes standard input output header file(stdio.h) from the C library before compiling a C program</td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">int main()</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">This is the main function from where execution of any C program begins.</td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">{</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">This indicates the beginning of the main function.</td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">/*<span style="color: #ffffff;">_</span>some<span style="color: #ffffff;">_</span>comments<span style="color: #ffffff;">_</span>*/</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">whatever is given inside the command “/*&nbsp;&nbsp; */” in any C program, won’t be considered for compilation and execution.</td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">printf(“Hello<span style="color: #ffffff;">_</span>World! “);</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">printf command prints the output onto the screen.</td>
                        </tr>

                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">return 0;</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">
                        <div><span style="line-height: 19px;">This command terminates C program (main function) and returns 0.</span></div>
                        </td>
                        </tr>
                        <tr>
                        <td style="border: 1px solid powderblue; text-align: left;">}</td>
                        <td style="border: 1px solid powderblue; text-align: justify;">
                        <div><span style="line-height: 19px;">This indicates the end of the main function.</span></div>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <h3 class="text-info" style="text-align:center">A simple C Program</h3>
                    <p style="text-align: justify;">Below C program is a very simple and basic program in C programming language. This C program displays “Hello World!” in the output window. And, all syntax and commands in C programming are case sensitive. Also, each statement should be ended with semicolon (;) which is a statement terminator.</p>
                    <pre class="prettyprint notranslate">
                      <code class="c++">
      #include &lt;stdio.h&gt;
        int main()
        {
           /* Our first simple C basic program */
           printf("Hello World! ");
           return 0;
        }
                        </code>
                    </pre>
                    <br>
                    <h3 class="text-info" style="text-align:center">Steps to write C programs and get the output</h3>
                    <p style="text-align: justify;">Below are the steps to be followed for any C program to create and get the output. This is common to all C program and there is no exception whether its a very small C program or very large C program.</p>
                    <ol style="text-align: justify;">
                    <li style="text-align: justify;">Create</li>
                    <li style="text-align: justify;">Compile</li>
                    <li style="text-align: justify;">Execute or Run</li>
                    <li style="text-align: justify;">Get the Output</li>
                    </ol>
                    <br>
                    <h3 class="text-info" style="text-align:center">Creation, Compilation and Execution of a C program</h3>
                    <p style="text-align: justify;"><strong>Prerequisite:</strong></p>
                    <ul style="text-align: justify;">
                      <li><span style="text-align: justify; line-height: 1.5em;">If &nbsp;you want to create, compile and execute C programs by your own, you have to install C compiler in your machine. Then, you can start to execute your own C programs in your machine.</span></li>
                      <li><span style="text-align: justify; line-height: 1.5em;">Once&nbsp;C compiler is installed in your machine, you can create, compile and execute C programs.</span></li>
                      <li>If you don’t want to install C/C++ compilers in your machine, you can refer online compilers which will compile and execute C/C++ and many other programming languages online and display outputs on the screen. Please search for online C/C++ compilers in Google for more details.</li>
                      </ul>
                    <br>
                    <h3 class="text-info" style="text-align:center">Basic structure of a C program</h3>
                    <p style="text-align: justify;">Structure of C program is defined by set of rules called protocol, to be followed by programmer while writing C program. All C programs are having sections/parts which are&nbsp;mentioned &nbsp;below.</p>
                    <ol style="text-align: justify;">
                    <li>Documentation section</li>
                    <li>Link Section</li>
                    <li>Definition Section</li>
                    <li>Global declaration section</li>
                    <li>Function prototype declaration section</li>
                    <li>Main function</li>
                    <li>User defined function definition section</li>
                    </ol>
                    <h3 class="text-info" style="text-align:center">Example C program to compare all the sections</h3>
                    <p style="text-align: justify;">You can compare all the sections of a C program with the below C program.</p>
                    <pre class="prettyprint notranslate">
                      <code class="c++">
        /*
            Documentation section
            C programming basics & structure of C programs
            Author: fresh2refresh.com
            Date : 01/01/2012
        */

        #include &lt;stdio.h&gt;   /* Link section */
        int total = 0;       /* Global declaration, definition section */
        int sum (int, int);  /* Function declaration section */
        int main ()          /* Main function */
        {
            printf ("This is a C basic program \n");
            total = sum (1, 1);
            printf ("Sum of two numbers : %d \n", total);
            return 0;
        }

        int sum (int a, int b) /* User defined function */
        {
            return a + b;      /* definition section */
        }
                    </code>
                    </pre>
                    <h3 class="text-info">Output:</h3>
                    <table>
                      <tbody>
                      <tr>
                      <td style="border: 1px solid powderblue;">
                      <div style="text-align: left;padding:5px;">This is a C basic program<br>
                      <span style="line-height: 1.7em; padding:5px;">Sum of two numbers : 2</span></div>
                      </td>
                      </tr>
                      </tbody>
                      </table>

                      <div class="row">
                        <div class="col-6" style="text-align:left">
                          <a href="" > Previous Page</a>
                        </div>

                        <div class="col-6 " style="text-align:right">
                           <a href=""  >Next page</a>
                        </div>

                      </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
