@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="css/grades.css">
@stop

@section('scripts')
@stop

@section('content')
<div class="mg-top-navbar"></div>
    <div id="elearning-subject">
        <div class="container">
            <div class="row padding-top-15px padding-bottom-15px">
                <div id="elearning-subjecttitle" class="col-xs-12">
                    <h3>My Progress</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="elearning-lists">
        <div class="container">
            <div class="row padding-top-15px padding-bottom-15px">
                <div class="col-xs-12">
                    <div class="elearning-quiz-overview">
                        <div class="quiz-heading">
                            <span class="subject earthscience">Earth Science</span>
                        </div>
                        <div class="quiz-overview active">
                        <p class="quiz-info-overview">
                            <div class="col-xs-12 padding-right-0 padding-left-0">
                                <table class="quiz-attempt-table">
                                <tr class="quiz-attempt-header">
                                    <td>Examination</td>
                                    <td>Marks</td>
                                    <td>Grade</td>
                                    <td>Remarks</td>
                                </tr>
                                <tr>
                                    <td>Module 1 Quiz</td>
                                    <td>9/10</td>
                                    <td>90%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 2 Quiz</td>
                                    <td>9/10</td>
                                    <td>80%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 3 Quiz</td>
                                    <td>10/10</td>
                                    <td>100%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 4 Quiz</td>
                                    <td>7/10</td>
                                    <td>70%</td>
                                    <td>Passed</td>
                                </tr>
                                </table><br/>
                            </div>
                        </div>
                    </div>
                    <div class="elearning-quiz-overview">
                        <div class="quiz-heading">
                            <span class="subject precalculus">Pre-Calculus</span>
                        </div>
                        <div class="quiz-overview active">
                        <p class="quiz-info-overview">
                            <div class="col-xs-12 padding-right-0 padding-left-0">
                                <table class="quiz-attempt-table">
                                <tr class="quiz-attempt-header">
                                    <td>Examination</td>
                                    <td>Marks</td>
                                    <td>Grade</td>
                                    <td>Remarks</td>
                                </tr>
                                <tr>
                                    <td>Module 1 Quiz</td>
                                    <td>4/5</td>
                                    <td>80%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 2 Quiz</td>
                                    <td>4/10</td>
                                    <td>40%</td>
                                    <td>Failed</td>
                                </tr>
                                <tr>
                                    <td>Module 3 Quiz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                </table><br/>
                            </div>
                        </div>
                    </div>
                    <div class="elearning-quiz-overview">
                        <div class="quiz-heading">
                            <span class="subject oralcomm">Oral Communication in Context</span>
                        </div>
                        <div class="quiz-overview active">
                        <p class="quiz-info-overview">
                            <div class="col-xs-12 padding-right-0 padding-left-0">
                                <table class="quiz-attempt-table">
                                <tr class="quiz-attempt-header">
                                    <td>Examination</td>
                                    <td>Marks</td>
                                    <td>Grade</td>
                                    <td>Remarks</td>
                                </tr>
                                <tr>
                                    <td>Module 1 Quiz</td>
                                    <td>17/20</td>
                                    <td>85%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 2 Quiz</td>
                                    <td>10/15</td>
                                    <td>66.67%</td>
                                    <td>Passed</td>
                                </tr>
                                <tr>
                                    <td>Module 3 Quiz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Module 4 Quiz</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                </table><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="elearning-hello" class="hide">
        <div class="container">
            <div class="row padding-top-15px padding-bottom-15px">
                <div class="col-md-2 col-sm-3">
                    <img class="img-responsive" id="elogo" src="images/earthscience.png">
                </div>
                <div class="col-md-10 col-sm-9">
                    <h1 class="heading-name">Earth Science Quiz 1<span class="subheading"><br/>Module 1 - Introduction to Earth Science</span></h1>
                    <table class="exam-info-table">
                        <tr>
                            <td>Number of Items:</td>
                            <td>15</td>
                            <td>Time Limit:</td>
                            <td>30 Minutes</td>
                        </tr>
                        <tr>
                            <td>Number of Attempts:</td>
                            <td>1</td>
                            <td>Expires:</td>
                            <td>June 30, 2017</td>
                        </tr>
                    </table>
                    <br><a href="#">Take The Quiz</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop