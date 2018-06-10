<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Nested if else</h3>
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

<h3 class="text-info" style="text-align:center">Nested If else statement</h3>

<p>When an if else statement is present inside the body of another “if” or “else” then this is called nested if else.</p>

<b>Syntax of Nested if else statement:</b>
<pre class="prettyprint notranslate">
  <code class="c++">
    if(condition) {
        //Nested if else inside the body of "if"
        if(condition2) {
           //Statements inside the body of nested "if"
        }
        else {
           //Statements inside the body of nested "else"
        }
    }
    else {
        //Statements inside the body of "else"
    }
      </code>
</pre>

<h3 class="text-info" style="text-align:center">Example of nested if else</h3>

<pre class="prettyprint notranslate">
  <code class="c++">
      #include &lt;stdio.h&gt;
      int main()
      {
         int var1, var2;
         printf("Input the value of var1:");
         scanf("%d", &var1);
         printf("Input the value of var2:");
         scanf("%d",&var2);
         if (var1 != var2)
         {
          	printf("var1 is not equal to var2\n");
          	//Nested if else
          	if (var1 > var2)
          	{
          		printf("var1 is greater than var2\n");
          	}
          	else
          	{
          		printf("var2 is greater than var1\n");
          	}
         }
         else
         {
          	printf("var1 is equal to var2\n");
         }
         return 0;
      }
      </code>
</pre>

<b>Output:</b>

<pre class="prettyprint notranslate">
  <code class="c++">
    Input the value of var1:12
    Input the value of var2:21
    var1 is not equal to var2
    var2 is greater than var1
  </code>
</pre>
<h3 class="text-info" style="text-align:center">else if statement</h3>
<p>The else..if statement is useful when you need to check multiple conditions within the program, nesting of if-else blocks can be avoided using else..if statement.</p>
<b>Syntax of else..if statement:</b>
<pre class="prettyprint notranslate">
  <code class="c++">
    if (condition1)
    {
       //These statements would execute if the condition1 is true
    }
    else if(condition2)
    {
       //These statements would execute if the condition2 is true
    }
    else if (condition3)
    {
       //These statements would execute if the condition3 is true
    }
    .
    .
    else
    {
       //These statements would execute if all the conditions return false.
    }
  </code>
</pre>
<h3 class="text-info" style="text-align:center">Example of else if statement</h3>
<p>Lets take the same example that we have seen above while discussing nested if..else. We will rewrite the same program using else..if statements.</p>
<pre class="prettyprint notranslate">
  <code class="c++">
    #include &lt;stdio.h&gt;
    int main()
    {
       int var1, var2;
       printf("Input the value of var1:");
       scanf("%d", &var1);
       printf("Input the value of var2:");
       scanf("%d",&var2);
       if (var1 !=var2)
       {
        	printf("var1 is not equal to var2\n");
       }
       else if (var1 > var2)
       {
        	printf("var1 is greater than var2\n");
       }
       else if (var2 > var1)
       {
        	printf("var2 is greater than var1\n");
       }
       else
       {
        	printf("var1 is equal to var2\n");
       }
       return 0;
    }
  </code>
</pre>

<b>Output:</b>

<pre class="prettyprint notranslate">
  <code class="c++">
    Input the value of var1:12
    Input the value of var2:21
    var1 is not equal to var2
  </code>
</pre>

<p>
As you can see that only the statements inside the body of “if” are executed. This is because in this statement as soon as a condition is satisfied, the statements inside that block are executed and rest of the blocks are ignored.

</p>
<pre>
  Important Points:
  1. else and else..if are optional statements, a program having only “if” statement would run fine.
  2. else and else..if cannot be used without the “if”.
  3. There can be any number of else..if statement in a if else..if block.
  4. If none of the conditions are met then the statements in else block gets executed.
  5. Just like relational operators, we can also use logical operators such as AND (&&), OR(||) and NOT(!).

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
