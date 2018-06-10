<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Variables &amp; Constants</h3>
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

                        <h3 class="text-info" style="text-align:center">Variables &amp; Constants</h3>


                        <p>A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in C has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>
                        <p>The name of a variable can be composed of letters, digits, and the underscore character. It must begin with either a letter or an underscore. Upper and lowercase letters are distinct because C is case-sensitive. Based on the basic types explained in the previous chapter, there will be the following basic variable types &minus;</p>
                        <table class="table table-bordered">
                        <tr>
                        <th>Sr.No.</th>
                        <th style="text-align:center;">Type &amp; Description</th>
                        </tr>
                        <tr>
                        <td class="ts">1</td>
                        <td><p><b>char</b></p>
                        <p>Typically a single octet(one byte). This is an integer type.</p></td>
                        </tr>
                        <tr>
                        <td class="ts">2</td>
                        <td><p><b>int</b></p>
                        <p>The most natural size of integer for the machine.</p></td>
                        </tr>
                        <tr>
                        <td class="ts">3</td>
                        <td><p><b>float</b></p>
                        <p>A single-precision floating point value.</p></td>
                        </tr>
                        <tr>
                        <td class="ts">4</td>
                        <td><p><b>double</b></p>
                        <p>A double-precision floating point value.</p></td>
                        </tr>
                        <tr>
                        <td class="ts">5</td>
                        <td><p><b>void</b></p>
                        <p>Represents the absence of type.</p></td>
                        </tr>
                        </table>
                        <p>C programming language also allows to define various other types of variables, which we will cover in subsequent chapters like Enumeration, Pointer, Array, Structure, Union, etc. For this chapter, let us study only basic variable types.</p>
                        <h3 class="text-info" style="text-align:center">Variable Definition in C</h3>
                        <p>A variable definition tells the compiler where and how much storage to create for the variable. A variable definition specifies a data type and contains a list of one or more variables of that type as follows &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      type variable_list;

                        </code>
                        </pre>
                        <p>Here, <b>type</b> must be a valid C data type including char, w_char, int, float, double, bool, or any user-defined object; and <b>variable_list</b> may consist of one or more identifier names separated by commas. Some valid declarations are shown here &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      int    i, j, k;
      char   c, ch;
      float  f, salary;
      double d;

                        </code>
                        </pre>
                        <p>The line <b>int i, j, k;</b> declares and defines the variables i, j, and k;  which instruct the compiler to create variables named i, j and k of type int.</p>
                        <p>Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of an equal sign followed by a constant expression as follows &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      type variable_name = value;

                        </code>
                        </pre>
                        <p>Some examples are &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      extern int d = 3, f = 5;    // declaration of d and f.
      int d = 3, f = 5;           // definition and initializing d and f.
      byte z = 22;                // definition and initializes z.
      char x = 'x';               // the variable x has the value 'x'.

                        </code>
                        </pre>
                        <h3 class="text-info" style="text-align:center">Types of Variables in C</h3>
                        <p>There are many types of variables in c:</p>
                        <ol>
                          <li>local variable</li>
                          <li>global variable</li>
                          <li>static variable</li>
                          </ol>
                        <h3 class="text-info" style="text-align:center">Local Variable</h3>
                        <p>A variable that is declared inside the function or block is called local variable.</p>
                        <p>It must be declared at the start of the block.</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      void function1(){
      int x=10;//local variable
      }
                        </code>
                        </pre>

                        <h3 class="text-info" style="text-align:center">Global Variable</h3>
                        <p>A variable that is declared outside the function or block is called global variable. Any function can change the value of the global variable. It is available to all the functions.

                        It must be declared at the start of the block.</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      int value=20;//global variable
      void function1(){
      int x=10;//local variable
      }
                        </code>
                        </pre>

                        <h3 class="text-info" style="text-align:center">Static Variable</h3>
                        <p>A variable that is declared with static keyword is called static variable.

                        It retains its value between multiple function calls.</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      void function1(){
        int x=10;//local variable
        static int y=10;//static variable
        x=x+1;
        y=y+1;
        printf("%d,%d",x,y);
      }
                        </code>
                        </pre>
                        <h3 class="text-info" style="text-align:center">C – Constant</h3>
                          <ul>
                          <li style="text-align: justify;">C Constants are also like normal variables. But, only difference is,&nbsp;their values can not be modified by the program once they are defined.</li>
                          <li style="text-align: justify;">Constants refer to fixed values. They are also called as literals</li>
                          <li style="text-align: justify;">Constants&nbsp;may be belonging to any of the data type.</li>
                          <li style="text-align: justify;">Syntax:</li>
                          </ul>
                          <h3 class="text-info" style="text-align:center">TYPES OF C CONSTANT</h3>
                          <ol type="1">
                            <li>Integer constants</li>
                            <li>Real or Floating point constants</li>
                            <li>Octal &amp; Hexadecimal constants</li>
                            <li>Character constants</li>
                            <li>String constants</li>
                            <li>Backslash character constants</li>
                            </ol>
                            <table align="center">
                            <tbody>
                            <tr>
                            <td style="border: 1px solid #000000;">
                            <div style="text-align: center;"><strong>Constant type</strong></div>
                            </td>
                            <td style="border: 1px solid #000000;">
                            <div style="text-align: center;"><strong>data type (Example)</strong></div>
                            </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">Integer constants</td>
                            <td style="border: 1px solid #000000;"><span style="line-height: 19px;">int&nbsp;(53, 762, -478 etc )<br>
                            unsigned int (5000u, 1000U etc)<br>
                            <span style="line-height: 19px;">long int, long long int<br>
                            (483,647 2,147,483,680)</span></span></td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">Real or Floating point constants</td>
                            <td style="border: 1px solid #000000;"><span style="line-height: 19px;">float (10.456789)<br>
                            </span><span style="line-height: 19px;">doule (600.123456789)</span></td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">Octal constant</td>
                            <td style="border: 1px solid #000000;">int (Example:&nbsp;013 /*starts with 0 */)</td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">Hexadecimal constant</td>
                            <td style="border: 1px solid #000000;">int (Example:&nbsp;0x90 /*starts with 0x*/)</td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">character constants</td>
                            <td style="border: 1px solid #000000;">
                            <div>char (Example: ‘A’, ‘B’, ‘C’)</div>
                            </td>
                            </tr>
                            <tr>
                            <td style="border: 1px solid #000000;">string constants</td>
                            <td style="border: 1px solid #000000;">
                            <div>char (Example: “ABCD”, “Hai”)</div>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            <br>
                            <h3 class="text-info" style="text-align:center">EXAMPLE PROGRAM USING CONST KEYWORD IN C</h3>



                            <pre class="prettyprint notranslate">
                              <code class="c++">


      #include &lt;stdio.h&gt;   /* Link section */
      int main()
        {
        const int height = 100; /*int constant*/
        const float number = 3.14; /*Real constant*/
        const char letter = 'A'; /*char constant*/
        const char letter_sequence[10] = "ABC"; /*string constant*/
        const char backslash_char = '\?'; /*special char cnst*/
        printf("value of height :%d \n", height );
        printf("value of number : %f \n", number );
        printf("value of letter : %c \n", letter );
        printf("value of letter_sequence : %s \n", letter_sequence);
        printf("value of backslash_char : %c \n", backslash_char);
        }
                            </code>
                            </pre>
                            <h3 class="text-info">OUTPUT:</h3>


                            <table>
                            <tbody>
                            <tr style="padding:10px;">
                            <td style="border: 1px solid #000000;padding:10px;">value of height : 100<br>
                            value of number : 3.140000<br>
                            value of letter : A<br>
                            value of letter_sequence : ABC<br>
                            value of backslash_char : ?<strong>&nbsp;</strong></td>
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
