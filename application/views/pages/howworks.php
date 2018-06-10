<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">How it Works </h3>
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

                        <h3 class="text-info" style="text-align:center">How it Works</h3>

                      <p>The C programming language is a popular and widely used programming language for creating computer programs. Programmers around the world embrace C because it gives maximum control and efficiency to the programmer. If you are a programmer, or if you are interested in becoming a programmer, there are a couple of benefits you gain from learning C. </p>


                      <p>Before we study the basic building blocks of the C programming language, let us look at a bare minimum C program structure so that we can take it as a reference in the upcoming chapters.</p>

                      <h3 class="text-info" style="text-align:center" >Hello World Example</h3>
                      <p>A C program basically consists of the following parts &minus;</p>
                      <ul class="list">
                      <li>Preprocessor Commands</li>
                      <li>Functions</li>
                      <li>Variables</li>
                      <li>Statements &amp; Expressions</li>
                      <li>Comments</li>
                      </ul>
                      <p>Let us look at a simple code that would print the words "Hello World" &minus;</p>

                      <pre class="prettyprint notranslate">
                        <code class="c++">
      #include &lt;stdio.h&gt;

      int main() {
         /* my first program in C */
         printf("Hello, World! \n");

         return 0;
      }
                      </code>
                      </pre>
                      <p>Let us take a look at the various parts of the above program &minus;</p>
                      <ul class="list">
                      <li><p>The first line of the program <i>#include &lt;stdio.h&gt;</i> is a preprocessor command, which tells a C compiler to include stdio.h file before going to actual compilation.</p></li>
                      <li><p>The next line <i>int main()</i> is the main function where the program execution begins.</p></li>
                      <li><p>The next line /*...*/ will be ignored by the compiler and it has been put to add additional comments in the program. So such lines are called comments in the program.</p></li>
                      <li><p>The next line <i>printf(...)</i> is another function available in C which causes the message "Hello, World!" to be displayed on the screen.</p></li>
                      <li><p>The next line <b>return 0;</b> terminates the main() function and returns the value 0.</p></li>
                      </ul>
                      <h3 class="text-info" style="text-align:center" >Compile and Execute C Program</h3>
                      <p>Let us see how to save the source code in a file, and how to compile and run it. Following are the simple steps &minus;</p>
                      <ul class="list">
                      <li><p>Open a text editor and add the above-mentioned code.</p></li>
                      <li><p>Save the file as <i>hello.c</i></p></li>
                      <li><p>Open a command prompt and go to the directory where you have saved the file.</p></li>
                      <li><p>Type <i>gcc hello.c</i> and press enter to compile your code.</p></li>
                      <li><p>If there are no errors in your code, the command prompt will take you to the next line and would generate <i>a.out</i> executable file.</p></li>
                      <li><p>Now, type <i>a.out</i> to execute your program.</p></li>
                      <li><p>You will see the output <i>"Hello World"</i> printed on the screen.</p></li>
                      </ul>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      $ gcc hello.c
      $ ./a.out
      Hello, World!
                      </code>
                      </pre>


                      <p>Make sure the gcc compiler is in your path and that you are running it in the directory containing the source file hello.c.</p>
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
