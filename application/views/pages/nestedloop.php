<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Nested Loops</h3>
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



                                            <h3 class="text-info" style="text-align:center">Nested Loops in C</h3>
                                            <p>A nested loop is a loop within a loop, an inner loop within the body of an outer one. How this works is that the first pass of the outer loop triggers the inner loop, which executes to completion. Then the second pass of the outer loop triggers the inner loop again. This repeats until the outer loop finishes. Of course, a break within either the inner or outer loop would interrupt this process.

Nested loop can be either for loop, do while loop or while loop. Meaning you can nest two for loops or two while loops. See the below example</p>
<b>Syntax:</b>

<pre class="prettyprint notranslate">
  <code class="c++">
    for ( init; condition; increment ) {

        for ( init; condition; increment ) {
            statement(s);
        }

        statement(s);
    }
  </code>
</pre>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    while(condition) {

       while(condition) {
          statement(s);
       }

       statement(s);
    }

                                              </code>
                                            </pre>


                                            <p></p>

                                            <h3 class="text-info" style="text-align:center">Example of Nested loop</h3>
                                            <p>C program to print the number pattern.</p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5
                                              </code>
                                            </pre>

                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
    #include <stdio.h>
    int main()
    {
        int i,j,n=5;
        // Here n initialized by 5 but you can take from keyboard using scanf
        for (i=1; i <= n; i++)
        {

            for (j=1; j <= i; j++)
            {
                printf("%d ",j);
            }

            printf("\n");
        }
        return 0;
    }
                                              </code>
                                            </pre>
                                            <p>In this program, nested loop is used to print the pattern. The outermost loop runs 5 times and for every loop, the innermost loop runs i times which is 1 at first, meaning only "1" is printed, then on the next loop it's 2 numbers printing "1 2" and so on till 5 iterations of the loop executes, printing "1 2 3 4 5". This way, the given number pattern is printed.</p>

                                            <h3 class="text-info" style="text-align:center"></h3>
                                            <p>C program to print the number pattern.</p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
              1
            1 2
          1 2 3
        1 2 3 4
      1 2 3 4 5
                                              </code>
                                            </pre>
                                            <p></p>

                                            <h3 class="text-info" style="text-align:center"></h3>
                                            <p></p>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      #include <stdio.h>
      int main()
      {
          int i,j,n=5;
          // Here n initialized by 5 but you can take from keyboard using scanf
          for (i=1; i <= n; i++)
          {
          	for (j=1; j <=n-i; j++)
              {
                  printf("  ");
                  // Here spaces are used for meet the required output
              }

              for (j=1; j <= i; j++)
              {
                  printf("%d ",j);
              }

              printf("\n");
          }
          return 0;
      }
                                              </code>
                                            </pre>
                                            <p></p>

                                            

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
