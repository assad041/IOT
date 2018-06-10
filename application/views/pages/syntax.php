<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Basic Syntax &amp; Data Types</h3>
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

                        <h3 class="text-info" style="text-align:center">Basic Syntax &amp; Data Types</h3>
                        <p>You have seen the basic structure of a C program, so it will be easy to understand other basic building blocks of the C programming language.</p>
                        <h3 class="text-info" style="text-align:center">Tokens in C</h3>
                        <p>A C program consists of various tokens and a token is either a keyword, an identifier, a constant, a string literal, or a symbol. For example, the following C statement consists of five tokens &minus;</p>

                      <pre class="prettyprint notranslate">
                        <code class="c++">
      printf("Hello, World! \n");

                      </code>
                      </pre>
                      <h3 class="text-info" style="text-align:center">Semicolons</h3>
                      <p>In a C program, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.</p>
                      <p>Given below are two different statements &minus;</p>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      printf("Hello, World! \n");
      return 0;
                      </code>
                      </pre>
                      <h3 class="text-info" style="text-align:center">Comments</h3>
                      <p>Comments are like helping text in your C program and they are ignored by the compiler. They start with /* and terminate with the characters */ as shown below &minus;</p>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      /* my first program in C */
                      </code>
                      </pre>
                      <p>You cannot have comments within comments and they do not occur within a string or character literals.</p>
                      <h3 class="text-info" style="text-align:center">Identifiers</h3>
                      <p>A C identifier is a name used to identify a variable, function, or any other user-defined item. An identifier starts with a letter A to Z, a to z, or an underscore '_' followed by zero or more letters, underscores, and digits (0 to 9).</p>
                      <p>C does not allow punctuation characters such as @, $, and % within identifiers. C is a <b>case-sensitive</b> programming language. Thus, <i>Manpower</i> and <i>manpower</i> are two different identifiers in C. Here are some examples of acceptable identifiers &minus;</p>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      mohd       zara    abc   move_name  a_123
      myname50   _temp   j     a23b9      retVal

                      </code>
                      </pre>
                      <h3 class="text-info" style="text-align:center">Keywords</h3>
                      <p>The following list shows the reserved words in C. These reserved words may not be used as constants or variables or any other identifier names.</p>
                      <table style="text-align:center;" class="table table-bordered">
                      <tr>
                      <td style="width:25%">auto</td>
                      <td style="width:25%">else</td>
                      <td style="width:25%">long</td>
                      <td style="width:25%">switch</td>
                      </tr>
                      <tr>
                      <td>break</td>
                      <td>enum</td>
                      <td>register</td>
                      <td>typedef</td>
                      </tr>
                      <tr>
                      <td>case</td>
                      <td>extern</td>
                      <td>return</td>
                      <td>union</td>
                      </tr>
                      <tr>
                      <td>char</td>
                      <td>float</td>
                      <td>short</td>
                      <td>unsigned</td>
                      </tr>
                      <tr>
                      <td>const</td>
                      <td>for</td>
                      <td>signed</td>
                      <td>void</td>
                      </tr>
                      <tr>
                      <td>continue</td>
                      <td>goto</td>
                      <td>sizeof</td>
                      <td>volatile</td>
                      </tr>
                      <tr>
                      <td>default</td>
                      <td>if</td>
                      <td>static</td>
                      <td>while</td>
                      </tr>
                      <tr>
                      <td>do</td>
                      <td>int</td>
                      <td>struct</td>
                      <td>_Packed</td>
                      </tr>
                      <tr>
                      <td>double</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>
                      </table>
                      <h3 class="text-info" style="text-align:center">Whitespace in C</h3>
                      <p>A line containing only whitespace, possibly with a comment, is known as a blank line, and a C compiler totally ignores it.</p>
                      <p>Whitespace is the term used in C to describe blanks, tabs, newline characters and comments. Whitespace separates one part of a statement from another and enables the compiler to identify where one element in a statement, such as int, ends and the next element begins. Therefore, in the following statement &minus;</p>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      int age;
                      </code>
                      </pre>
                      <p>there must be at least one whitespace character (usually a space) between int and age for the compiler to be able to distinguish them. On the other hand, in the following statement &minus;</p>
                      <pre class="prettyprint notranslate">
                        <code class="c++">
      fruit = apples + oranges;   // get the total fruit
                      </code>
                      </pre>
                      <p>no whitespace characters are necessary between fruit and =, or between = and apples, although you are free to include some if you wish to increase readability.</p>
                      <br>

                      <h3 class="text-info" style="text-align:center">C - Data Types</h3>

                      <p>Data types in c refer to an extensive system used for declaring variables or functions of different types. The type of a variable determines how much space it occupies in storage and how the bit pattern stored is interpreted.</p>
                      <p>The types in C can be classified as follows &minus;</p>
                      <table class="table table-bordered">
                        <tr>
                        <th style="text-align:center;">Sr.No.</th>
                        <th style="text-align:center;">Types &amp; Description</th>
                        </tr>
                        <tr>
                        <td class="ts">1</td>
                        <td><p><b>Basic Types</b></p>
                        <p>They are arithmetic types and are further classified into: (a) integer types and (b) floating-point types.</p>
                        </td>
                        </tr>
                        <tr>
                        <td class="ts">2</td>
                        <td><p><b>Enumerated types</b></p>
                        <p>They are again arithmetic types and they are used to define variables that can only assign certain discrete integer values throughout the program.</p>
                        </td>
                        </tr>
                        <tr>
                        <td class="ts">3</td>
                        <td><p><b>The type void</b></p>
                        <p>The type specifier <i>void</i> indicates that no value is available.</p>
                        </td>
                        </tr>
                        <tr>
                        <td class="ts">4</td>
                        <td><p><b>Derived types</b></p>
                        <p>They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e) Function types.</p>
                        </td>
                        </tr>
                        </table>
                        <p>The array types and structure types are referred collectively as the aggregate types. The type of a function specifies the type of the function's return value. We will see the basic types in the following section, where as other types will be covered in the upcoming chapters.</p>
                        <h3 class="text-info" style="text-align:center">Integer Types</h3>
                        <p>The following table provides the details of standard integer types with their storage sizes and value ranges &minus;</p>
                        <table style="text-align:center;" class="table table-bordered">
                        <tr>
                        <th style="width:23%;text-align:center;">Type</th>
                        <th style="width:20%;text-align:center;">Storage size</th>
                        <th style="text-align:center;">Value range</th>
                        </tr>
                        <tr>
                        <td>char</td>
                        <td>1 byte</td>
                        <td>-128 to 127 or 0 to 255</td>
                        </tr>
                        <tr>
                        <td>unsigned char</td>
                        <td>1 byte</td>
                        <td>0 to 255</td>
                        </tr>
                        <tr>
                        <td>signed char</td>
                        <td>1 byte</td>
                        <td>-128 to 127</td>
                        </tr>
                        <tr>
                        <td style="vertical-align:middle;">int</td>
                        <td style="vertical-align:middle;">2 or 4 bytes</td>
                        <td>-32,768 to 32,767 or -2,147,483,648 to 2,147,483,647</td>
                        </tr>
                        <tr>
                        <td>unsigned int</td>
                        <td>2 or 4 bytes</td>
                        <td>0 to 65,535 or 0 to 4,294,967,295</td>
                        </tr>
                        <tr>
                        <td>short</td>
                        <td>2 bytes</td>
                        <td>-32,768 to 32,767</td>
                        </tr>
                        <tr>
                        <td>unsigned short</td>
                        <td>2 bytes</td>
                        <td>0 to 65,535</td>
                        </tr>
                        <tr>
                        <td>long</td>
                        <td>4 bytes</td>
                        <td>-2,147,483,648 to 2,147,483,647</td>
                        </tr>
                        <tr>
                        <td>unsigned long</td>
                        <td>4 bytes</td>
                        <td>0 to 4,294,967,295</td>
                        </tr>
                        </table>
                        <p>To get the exact size of a type or a variable on a particular platform, you can use the <b>sizeof</b> operator. The expressions <i>sizeof(type)</i> yields the storage size of the object or type in bytes. Given below is an example to get the size of int type on any machine &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      #include &lt;stdio.h&gt;
      #include &lt;limits.h&gt;

      int main() {
         printf("Storage size for int : %d \n", sizeof(int));

         return 0;
      }

                            </code>
                        </pre>
                        <p>When you compile and execute the above program, it produces the following result on Linux &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
      Storage size for int : 4

                            </code>
                        </pre>
                        <h3 class="text-info" style="text-align:center">Floating-Point Types</h3>
                          <p>The following table provide the details of standard floating-point types with storage sizes and value ranges and their precision &minus;</p>
                          <table style="text-align:center;" class="table table-bordered">
                          <tr>
                          <th style="text-align:center;">Type</th>
                          <th style="text-align:center;">Storage size</th>
                          <th style="text-align:center;">Value range</th>
                          <th style="text-align:center;">Precision</th>
                          </tr>
                          <tr>
                          <td>float</td>
                          <td>4 byte</td>
                          <td>1.2E-38 to 3.4E+38</td>
                          <td>6 decimal places</td>
                          </tr>
                          <tr>
                          <td>double</td>
                          <td>8 byte</td>
                          <td>2.3E-308 to 1.7E+308</td>
                          <td>15 decimal places</td>
                          </tr>
                          <tr>
                          <td>long double</td>
                          <td>10 byte</td>
                          <td>3.4E-4932 to 1.1E+4932</td>
                          <td>19 decimal places</td>
                          </tr>
                          </table>
                          <p>The header file float.h defines macros that allow you to use these values and other details about the binary representation of real numbers in your programs. The following example prints the storage space taken by a float type and its range values &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
      #include &lt;stdio.h&gt;
      #include &lt;float.h&gt;

      int main() {
         printf("Storage size for float : %d \n", sizeof(float));
         printf("Minimum float positive value: %E\n", FLT_MIN );
         printf("Maximum float positive value: %E\n", FLT_MAX );
         printf("Precision value: %d\n", FLT_DIG );

         return 0;
      }

                              </code>
                          </pre>
                          <p>When you compile and execute the above program, it produces the following result on Linux &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
      Storage size for float : 4
      Minimum float positive value: 1.175494E-38
      Maximum float positive value: 3.402823E+38
      Precision value: 6


                              </code>
                          </pre>
                          <h3 class="text-info" style="text-align:center">The void Type</h3>
                            <p>The void type specifies that no value is available. It is used in three kinds of situations &minus;</p>
                            <table class="table table-bordered">
                            <tr>
                            <th style="text-align:center;">Sr.No.</th>
                            <th style="text-align:center;">Types &amp; Description</th>
                            </tr>
                            <tr>
                            <td class="ts">1</td>
                            <td><p><b>Function returns as void</b></p>
                            <p>There are various functions in C which do not return any value or you can say they return void. A function with no return value has the return type as void. For example, <b>void exit (int status);</b></p>
                            </td>
                            </tr>
                            <tr>
                            <td class="ts">2</td>
                            <td><p><b>Function arguments as void</b></p>
                            <p>There are various functions in C which do not accept any parameter. A function with no parameter can accept a void. For example, <b>int rand(void);</b></p>
                            </td>
                            </tr>
                            <tr>
                            <td class="ts">3</td>
                            <td><p><b>Pointers to void</b></p>
                            <p>A pointer of type void * represents the address of an object, but not its type. For example, a memory allocation function <b>void *malloc( size_t size );</b> returns a pointer to void which can be casted to any data type.</p>
                            </td>
                            </tr>
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
