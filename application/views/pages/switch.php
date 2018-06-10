<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Switch</h3>
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

                                            <h3 class="text-info" style="text-align:center">Switch Case in C</h3>

                                            <p>Switch case statements are a substitute for long if statements that compare a variable to several "integral" values ("integral" values are simply values that can be expressed as an integer, such as the value of a char). The basic format for using switch case is outlined below. The value of the variable given into switch is compared to the value following each of the cases, and when one value matches the value of the variable, the computer continues executing the program from that point.</p>
                                            <b>Syntax:</b>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">

    switch (variable or an integer expression)
    {
         case constant:
         //C Statements
         ;
         case constant:
         //C Statements
         ;
         default:
         //C Statements
         ;
    }

                                              </code>
                                            </pre>
                                            <p>The switch case statement is used when we have multiple options and we need to perform a different task for each option.</p>

                                            <h3 class="text-info" style="text-align:center">Flow Diagram of Switch Case</h3>
                                            <div class="row">
                                            <div class="col-lg-4 col-md-3 col-sm-12 col-xm-12">
                                            </div>
                                            <div  class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
                                              <img width="100%" height="380px" src="../assets/images/flowchart-switch-statement.jpg">
                                            </div>
                                           </div>




                                            <h3 class="text-info" style="text-align:center">Example of Switch Case</h3>
                                            <p>The condition of a switch statement is a value. The case says that if it has the value of whatever is after that case then do whatever follows the colon. The break is used to break out of the case statements. Break is a keyword that breaks out of the code block, usually surrounded by braces, which it is in. In this case, break prevents the program from falling through and executing the code in all the other case statements. An important thing to note about the switch statement is that the case values may only be constant integral expressions. Sadly, it isn't legal to use case like this:
</p>
<pre class="prettyprint notranslate">
  <code class="c++">
    int a = 10;
    int b = 10;
    int c = 20;

    switch ( a ) {
    case b:
      /* Code */
      break;
    case c:
      /* Code */
      break;
    default:
      /* Code */
      break;
    }

  </code>
</pre>
  <p>The default case is optional, but it is wise to include it as it handles any unexpected cases. It can be useful to put some kind of output to alert you to the code entering the default case if you don't expect it to. Switch statements serve as a simple way to write long if statements when the requirements are met. Often it can be used to process input from a user.</p>
  <pre class="prettyprint notranslate">
    <code class="c++">
      #include &lt;stdio.h&gt;
      int main()
      {
           int num=2;
           switch(num+2)
           {
               case 1:
                 printf("Case1: Value is: %d", num);
               case 2:
                 printf("Case1: Value is: %d", num);
               case 3:
                 printf("Case1: Value is: %d", num);
               default:
                 printf("Default: Value is: %d", num);
          }
          return 0;
      }

    </code>
  </pre>
  <b>Output:</b>
  <pre class="prettyprint notranslate">
    <code class="c++">
      Default: value is: 2

    </code>
  </pre>

  <p><b>Explanation:</b> In switch I gave an expression, you can give variable also. I gave num+2, where num value is 2 and after addition the expression resulted 4. Since there is no case defined with value 4 the default case is executed.
  </p>

                                            <h3 class="text-info" style="text-align:center">Introducing Break Statement</h3>

                                            <p>Before we discuss more about break statement, guess the output of this C program.</p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    #include &lt;stdio.h&gt;
    int main()
    {
         int i=2;
         switch (i)
         {
            case 1:
               printf("Case1 ");
            case 2:
               printf("Case2 ");
            case 3:
               printf("Case3 ");
            case 4:
               printf("Case4 ");
            default:
               printf("Default ");
         }
        return 0;
    }

                                              </code>
                                            </pre>
                                            <b>Output:</b>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    Case2 Case3 Case4 Default
                                              </code>
                                            </pre>
                                            <p>I passed a variable to switch, the value of the variable is 2 so the control jumped to the case 2, However there are no such statements in the above program which could break the flow after the execution of case 2. That’s the reason after case 2, all the subsequent cases and default statements got executed.</p>
</br>
                                            <b>How to avoid this situation?</b>
                                            <p>We can use break statement to break the flow of control after every case block.</p>
                                          </br>
                                          <b>Break statement in Switch Case:</b>
                                          <p>Break statements are useful when you want your program-flow to come out of the switch body. Whenever a break statement is encountered in the switch body, the control comes out of the switch case statement.</p>
                                          <b>Example of Switch Case with break:</b>
                                          <p>I’m taking the same above that we have seen above but this time we are using break.</p>

                                          <pre class="prettyprint notranslate">
                                            <code class="c++">
    #include &lt;stdio.h&gt;
    int main()
    {
         int i=2;
         switch (i)
         {
              case 1:
                 printf("Case1 ");
                 break;
              case 2:
                 printf("Case2 ");
                 break;
              case 3:
                 printf("Case3 ");
                 break;
              case 4:
                 printf("Case4 ");
                 break;
              default:
                 printf("Default ");
         }
         return 0;
    }

                                            </code>
                                          </pre>
                                          <b>Output:</b>
                                          <pre class="prettyprint notranslate">
                                            <code class="c++">
    Case 2
                                            </code>
                                          </pre>
                                          <b>Why didn’t I use break statement after default?</b>
                                          <p>The control would itself come out of the switch after default so I didn’t use it, however if you want to use the break after default then you can use it, there is no harm in doing that.</p>



</br>

                                            <h3 class="text-info" style="text-align:center">Few Important points regarding Switch Case</h3>

                                            <p>1) Case doesn’t always need to have order 1, 2, 3 and so on. They can have any integer value after case keyword. Also, case doesn’t need to be in an ascending order always, you can specify them in any order as per the need of the program.</p>
                                            <p>2) You can also use characters in switch case. for example –</p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      #include &lt;stdio.h&gt;
      int main()
      {
           char ch='b';
           switch (ch)
           {
               case 'd':
                  printf("CaseD ");
                  break;
               case 'b':
                  printf("CaseB");
                  break;
               case 'c':
                  printf("CaseC");
                  break;
               case 'z':
                  printf("CaseZ ");
                  break;
               default:
                  printf("Default ");
          }
          return 0;
      }
                                              </code>
                                            </pre>

                                            <b>Output:</b>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      CaseB
                                              </code>
                                            </pre>
                                            <p>3) The expression provided in the switch should result in a constant value otherwise it would not be valid.</p>
                                            <p>4) Nesting of switch statements are allowed, which means you can have switch statements inside another switch. However nested switch statements should be avoided as it makes program more complex and less readable.</p>




</br>




                                            <div class="row">
                                              <div class="col-6" style="text-align:left">
                                                <a href="javascript: void(0)" > Previous Page</a>
                                              </div>

                                              <div class="col-6 " style="text-align:right">
                                                 <a href="history"  >Next page</a>
                                              </div>

                                            </div>

                    </div>

                  </div>
              </div>
          </div>
      </div>
