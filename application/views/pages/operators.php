<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Operators</h3>
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

                        <h3 class="text-info" style="text-align:center">Operators</h3>
                        <p>An operator is a symbol that tells the compiler to perform specific mathematical or logical functions. C language is rich in built-in operators and provides the following types of operators &minus;</p>
                        <ul>
                        <li>Arithmetic Operators</li>
                        <li>Relational Operators</li>
                        <li>Logical Operators</li>
                        <li>Bitwise Operators</li>
                        <li>Assignment Operators</li>
                        <li>Misc Operators</li>
                        </ul>
                        <p>We will, in this chapter, look into the way each operator works.</p>
                        <br>
                        <h3 class="text-info" style="text-align:center">Arithmetic Operators</h3>
                        <p>The following table shows all the arithmetic operators supported by the C language. Assume variable <b>A</b> holds 10 and variable <b>B</b> holds 20 then &minus;</p>
                        <table>
                          <tr>
                          <th style="width:10%;text-align:center;">Operator</th>
                          <th style="width:55%;text-align:center;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&plus;</td>
                          <td>Adds two operands.</td>
                          <td style="text-align:center;">A &plus; B = 30</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&minus;</td>
                          <td>Subtracts second operand from the first.</td>
                          <td style="text-align:center;">A &minus; B = -10</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">*</td>
                          <td>Multiplies both operands.</td>
                          <td style="text-align:center;">A * B = 200</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">/</td>
                          <td>Divides numerator by de-numerator.</td>
                          <td style="text-align:center;">B / A = 2</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">%</td>
                          <td>Modulus Operator and remainder of after an integer division.</td>
                          <td style="text-align:center;">B % A = 0</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">++</td>
                          <td>Increment operator increases the integer value by one.</td>
                          <td style="text-align:center;">A++ = 11</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">--</td>
                          <td>Decrement operator decreases the integer value by one.</td>
                          <td style="text-align:center;">A-- = 9</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Relational Operators</h3>
                          <p>The following table shows all the relational operators supported by C. Assume variable <b>A</b> holds 10 and variable <b>B</b> holds 20 then &minus;</p>
                          <table>
                          <tr>
                          <th style="width:10%;text-align:center;">Operator</th>
                          <th style="width:55%;text-align:center;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">==</td>
                          <td>Checks if the values of two operands are equal or not. If yes, then the condition becomes true.</td>
                          <td style="text-align:center;">(A == B) is not true. </td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">!=</td>
                          <td>Checks if the values of two operands are equal or not. If the values are not equal, then the condition becomes true.</td>
                          <td style="text-align:center;">(A != B) is true.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&gt;</td>
                          <td>Checks if the value of left  operand is greater than the value of right operand. If yes, then the condition becomes true.</td>
                          <td style="text-align:center;">(A &gt; B) is not true.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&lt;</td>
                          <td>Checks if the value of left operand is less than the value of right operand. If yes, then the condition becomes true.</td>
                          <td style="text-align:center;">(A &lt; B) is true.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&gt;=</td>
                          <td>Checks if the value of left operand is greater than or equal to the value of right operand. If yes, then the condition becomes true.</td>
                          <td style="text-align:center;">(A &gt;= B) is not true.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&lt;=</td>
                          <td>Checks if the value of left operand is less than or equal to the value of right operand. If yes, then the condition becomes true.</td>
                          <td style="text-align:center;">(A &lt;= B) is true.</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Logical Operators</h3>
                          <p>Following table shows all the logical operators supported by C language. Assume variable <b>A</b> holds 1 and variable <b>B</b> holds 0, then &minus;</p>
                          <table>
                          <tr>
                          <th style="width:10%;text-align:center;">Operator</th>
                          <th style="width:55%;text-align:center;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&amp;&amp;</td>
                          <td>Called Logical AND operator. If both the operands are non-zero, then the condition becomes true.</td>
                          <td style="text-align:center;">(A &amp;&amp; B) is false.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">||</td>
                          <td>Called Logical OR Operator. If any of the two operands is non-zero, then the condition becomes true.</td>
                          <td style="text-align:center;">(A || B) is true.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">!</td>
                          <td>Called Logical NOT Operator. It is used to reverse the logical state of its operand. If a condition is true, then Logical NOT operator will make it false.</td>
                          <td style="text-align:center;">!(A &amp;&amp; B) is true.</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Bitwise Operators</h3>
                          <p>Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &amp;, |, and ^ is as follows &minus;</p>
                          <table style="text-align:center;">
                          <tr>
                          <th style="width:20%;text-align:center;">p</th>
                          <th style="width:20%;text-align:center;">q</th>
                          <th style="width:20%;text-align:center;">p &amp; q</th>
                          <th style="width:20%;text-align:center;">p | q</th>
                          <th style="width:20%;text-align:center;">p ^ q</th>
                          </tr>
                          <tr>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          </tr>
                          <tr>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          </tr>
                          <tr>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          </tr>
                          <tr>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          </tr>
                          </table>
                          <p>Assume A = 60 and B = 13 in binary format, they will be as follows &minus;</p>
                          <p>A = 0011 1100</p>
                          <p>B = 0000 1101</p>
                          <p>-----------------</p>
                          <p>A&amp;B = 0000 1100</p>
                          <p>A|B = 0011 1101</p>
                          <p>A^B = 0011 0001</p>
                          <p>~A = 1100 0011</p>
                          <p>The following table lists the bitwise operators supported by C. Assume variable 'A' holds 60 and variable 'B' holds 13, then &minus;</p>
                          <table>
                          <tr>
                          <th style="width:10%;text-align:center;">Operator</th>
                          <th style="width:55%;text-align:center;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&amp;</td>
                          <td>Binary AND Operator copies a bit to the result if it exists in both operands. </td>
                          <td style="text-align:center;">(A &amp; B) = 12, i.e., 0000 1100</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">|</td>
                          <td>Binary OR Operator copies a bit if it exists in either operand.</td>
                          <td style="text-align:center;">(A | B) = 61, i.e., 0011 1101</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">^</td>
                          <td>Binary XOR Operator copies the bit if it is set in one operand but not both. </td>
                          <td style="text-align:center;">(A ^ B) = 49, i.e., 0011 0001</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">~</td>
                          <td style="vertical-align:middle;">Binary Ones Complement Operator is unary and has the effect of 'flipping' bits.</td>
                          <td style="text-align:center;">(~A ) = -60, i.e,<br> 1100 0100 in 2's complement form.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&lt;&lt;</td>
                          <td>Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand.</td>
                          <td style="text-align:center;">A &lt;&lt; 2 = 240 i.e. 1111 0000</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&gt;&gt;</td>
                          <td>Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand.</td>
                          <td style="text-align:center;">A &gt;&gt; 2 = 15 i.e. 0000 1111</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Assignment Operators</h3>
                          <p>The following table lists the assignment operators supported by the C language &minus;</p>
                          <table>
                          <tr>
                          <th style="width:10%;text-align:center;">Operator</th>
                          <th style="width:55%;text-align:center;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">=</td>
                          <td>Simple assignment operator. Assigns values from right side operands to left side operand</td>
                          <td style="text-align:center;">C = A + B will <br>assign the value of A + B to C</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">+=</td>
                          <td>Add AND assignment operator. It adds the right operand to the left operand and assign the result to the left operand.</td>
                          <td style="text-align:center;">C += A is equivalent to C = C + A</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">-=</td>
                          <td>Subtract AND assignment operator. It subtracts the right operand from the left operand and assigns the result to the left operand.</td>
                          <td style="text-align:center;">C -= A is equivalent to C = C - A</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">*=</td>
                          <td>Multiply AND assignment operator. It multiplies the right operand with the left operand and assigns the result to the left operand.</td>
                          <td style="text-align:center;">C *= A is equivalent to C = C * A</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">/=</td>
                          <td>Divide AND assignment operator. It divides the left operand with the right operand and assigns the result to the left operand.</td>
                          <td style="text-align:center;">C /= A is equivalent to C = C / A</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">%=</td>
                          <td>Modulus AND assignment operator. It takes modulus using two operands and assigns the result to the left operand.</td>
                          <td style="text-align:center;">C %= A is equivalent to C = C % A</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&lt;&lt;=</td>
                          <td>Left shift AND assignment operator.</td>
                          <td style="text-align:center;">C &lt;&lt;= 2 is same as  C = C &lt;&lt; 2</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&gt;&gt;=</td>
                          <td>Right shift AND assignment operator.</td>
                          <td style="text-align:center;">C &gt;&gt;= 2 is same as  C = C &gt;&gt; 2</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&amp;=</td>
                          <td>Bitwise AND assignment operator.</td>
                          <td style="text-align:center;">C &amp;= 2 is same as  C = C &amp; 2</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">^=</td>
                          <td>Bitwise exclusive OR and assignment operator.</td>
                          <td style="text-align:center;">C ^= 2 is same as  C = C ^ 2</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">|=</td>
                          <td>Bitwise inclusive OR and assignment operator.</td>
                          <td style="text-align:center;">C |= 2 is same as  C = C | 2</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Misc Operators &map; sizeof &amp; ternary</h3>
                          <p>Besides the operators discussed above, there are a few other important operators including <b>sizeof</b> and <b>? :</b> supported by the C Language.</p>
                          <table>
                          <tr>
                          <th style="width:10%">Operator</th>
                          <th style="width:43%;">Description</th>
                          <th style="text-align:center;">Example</th>
                          </tr>
                          <tr>
                          <td style="text-align:center;">sizeof()</td>
                          <td style="vertical-align:middle;">Returns the size of a variable.</td>
                          <td style="text-align:center;">sizeof(a), where a is integer, will return 4.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">&amp;</td>
                          <td style="vertical-align:middle;">Returns the address of a variable.</td>
                          <td style="text-align:center;">&amp;a; returns the actual address of the variable.</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">*</td>
                          <td>Pointer to a variable.</td>
                          <td style="text-align:center;">*a;</td>
                          </tr>
                          <tr>
                          <td style="text-align:center;">? :</td>
                          <td style="vertical-align:middle;">Conditional Expression.</td>
                          <td style="text-align:center;">If Condition is true ? then value X : otherwise value Y</td>
                          </tr>
                          </table>
                          <br>
                          <h3 class="text-info" style="text-align:center">Operators Precedence in C</h3>
                          <p>Operator precedence determines the grouping of terms in an expression and decides how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has a higher precedence than the addition operator.</p>
                          <p>For example, x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has a higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.</p>
                          <p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
                          <table style="text-align:center;">
                          <tr>
                          <th style="text-align:center;">Category</th>
                          <th style="text-align:center;">Operator</th>
                          <th style="text-align:center;">Associativity</th>
                          </tr>
                          <tr>
                          <td>Postfix</td>
                          <td>() [] -&gt; . ++ - -</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Unary</td>
                          <td>+  -  !  ~  ++  - -  (type)*  &amp; sizeof</td>
                          <td>Right to left</td>
                          </tr>
                          <tr>
                          <td>Multiplicative</td>
                          <td>*  /  %</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Additive</td>
                          <td>+  -</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Shift</td>
                          <td>&lt;&lt; &gt;&gt;</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Relational</td>
                          <td>&lt; &lt;=  &gt; &gt;=</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Equality</td>
                          <td>==  !=</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Bitwise AND</td>
                          <td>&amp;</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Bitwise XOR</td>
                          <td>^</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Bitwise OR</td>
                          <td>|</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Logical AND</td>
                          <td>&amp;&amp;</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Logical OR</td>
                          <td>||</td>
                          <td>Left to right</td>
                          </tr>
                          <tr>
                          <td>Conditional</td>
                          <td>?:</td>
                          <td>Right to left</td>
                          </tr>
                          <tr>
                          <td>Assignment</td>
                          <td style="padding: 15px;">=  +=  -=  *=  /=  %=&gt;&gt;=  &lt;&lt;=  &amp;=  ^= |=</td>
                          <td>Right to left</td>
                          </tr>
                          <tr>
                          <td>Comma</td>
                          <td>,</td>
                          <td>Left to right</td>
                          </tr>
                          </table>
                        </br>
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
