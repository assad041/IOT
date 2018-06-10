<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">if else</h3>
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

                                            <h3 class="text-info" style="text-align:center">Syntax of if else Statement</h3>

                                            <p>
                                              If condition returns true then the statements inside the body of “if” are executed and the statements inside body of “else” are skipped. If condition returns false then the statements inside the body of “if” are skipped and the statements in “else” are executed.</p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    if(condition) {
       // Statements inside body of if
    }
    else {
       //Statements inside body of else
    }
                                              </code>
                                            </pre>
<h3 class="text-info" style="text-align:center">Flow Diagram of if else Statement</h3>
<div class="row">
<div class="col-lg-4 col-md-3 col-sm-12 col-xm-12">
</div>
<div  class="col-lg-4 col-md-6 col-sm-12 col-xm-12">
  <img width="100%" height="380px" src="../assets/images/If_else_flow_diagram_C.jpg">
</div>
</div>
<h3 class="text-info" style="text-align:center">Example of if else statement</h3>
<p>In this program user is asked to enter the age and based on the input, the if else statement checks whether the entered age is greater than or equal to 18. If this condition meet then display message “You are eligible for voting”, however if the condition doesn’t meet then display a different message “You are not eligible for voting”.</p>
<pre class="prettyprint notranslate">
  <code class="c++">
    #include &lt;stdio.h&gt;
    int main()
    {
       int age;
       printf("Enter your age:");
       scanf("%d",&age);
       if(age >=18)
       {
        	/* This statement will only execute if the
        	 * above condition (age>=18) returns true
        	 */
        	printf("You are eligible for voting");
       }
       else
       {
        	/* This statement will only execute if the
        	 * condition specified in the "if" returns false.
        	 */
        	printf("You are not eligible for voting");
      }

    }
  </code>
</pre>
<b>Output: </b>
<pre class="prettyprint notranslate">
  <code class="c++">
    Enter your age:14
    You are not eligible for voting
  </code>
</pre>
<p>
<b>Note:</b> If there is <b>only one statement</b> is present in the “if” or “else” body then you do not need to use the braces (parenthesis). For example the above program can be rewritten like this:
</p>

<pre class="prettyprint notranslate">
  <code class="c++">
    #include &lt;stdio.h&gt;
    int main()
    {
       int age;
       printf("Enter your age:");
       scanf("%d",&age);
       if(age >=18)
    	    printf("You are eligible for voting");
       else
        	printf("You are not eligible for voting");
       return 0;
    }
  </code>
</pre>




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
