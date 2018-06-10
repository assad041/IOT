<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Conditional Operators</h3>
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

                                            <h3 class="text-info" style="text-align:center">Conditional or Ternary Operators in C</h3>
                                            <ul>
                                            <li style="text-align: justify;">Conditional operators return one value if condition is true and returns another value is condition is false.</li>
                                            <li style="text-align: justify;">This operator is also called as ternary operator.</li>
                                            </ul>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      Syntax  :           (Condition? true_value: false_value);
                          (expression 1 ? expression 2 : expression 3);
      Example :           (A > 100  ?  0  :  1);
                                              </code>
                                            </pre>

<ul>
<li style="text-align: justify;">In above example, if A is greater than 100, 0 is returned else 1 is returned.&nbsp;This is equal to if else conditional statements.</li>
<li>expression1 is <span style="text-decoration: underline;"><strong>Condition</strong></span></li><li>expression2 is Statement Followed if <span style="text-decoration: underline;"><strong>Condition is True</strong></span></li><li>expression2 is Statement Followed if <span style="text-decoration: underline;"><strong>Condition is False</strong></span></li></ul>


                                            <h3 class="text-info" style="text-align:center">Example of Conditional or Ternary Operators Program</h3>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      #include <stdio.h>

      int main()
      {
         int x=1, y ;
         y = ( x ==1 ? 2 : 0 ) ;
         printf("x value is %d\n", x);
         printf("y value is %d", y);
      }
                                              </code>
                                            </pre>
                                            <b>Output: </b>
                                            <pre class="prettyprint notranslate">
                                              <code class="c++">
      x value is 1
      y value is 2
                                              </code>
                                            </pre>


                                            <p><b>Note:</b> Operator that works on 3 operands is called as tertiary operator. Ternary operator . Read rules of using Ternary Operator in C . </p>
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
