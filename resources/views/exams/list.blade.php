@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="css/exams.css">
@stop

@section('scripts')

@stop

@section('content')
<div class="mg-top-navbar"></div>
<div id="elearning-subject">
    <div class="container">
        <div class="row padding-top-15px padding-bottom-15px">
            <div id="elearning-subjecttitle" class="col-xs-12">
                <h3>My Exams</h3>
            </div>
        </div>
    </div>
</div>
<div id="elearning-lists">
    <div class="container">
        <div class="row padding-top-15px padding-bottom-15px">
            <div class="col-xs-12">
                <div class="elearning-quiz">
                    <div class="quiz-heading">
                        <span class="subject earthscience">Earth Science</span>
                    </div>
                    <div class="quiz active">
                        <a href="examoverview.html">
                            <div class="col-xs-10 padding-right-0 padding-left-0">
                                <p class="quiz-title">Module 1 Quiz</p>
                                <p class="quiz-info">10 items | 20 minutes | 3 Attempts</p>
                            </div>
                        </a>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 2 Quiz</p>
                            <p class="quiz-info">15 items | 30 minutes | 2 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 3 Quiz</p>
                            <p class="quiz-info">8 items | 20 minutes | 3 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 4 Quiz</p>
                            <p class="quiz-info">20 items | 60 minutes | 3 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                </div>
                <div class="elearning-quiz">
                    <div class="quiz-heading">
                        <span class="subject precalculus">Pre-Calculus</span>
                    </div>
                    <div class="quiz">
                        <a href="examoverview2.html">
                            <div class="col-xs-10 padding-right-0 padding-left-0">
                                <p class="quiz-title">Module 1 Quiz</p>
                                <p class="quiz-info">5 items | 60 minutes | 3 Attempts</p>
                            </div>
                        </a>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 2 Quiz</p>
                            <p class="quiz-info">10 items | 120 minutes | 2 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 3 Quiz</p>
                            <p class="quiz-info">7 items | 45 minutes | 1 Attempt</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                </div>
                <div class="elearning-quiz">
                    <div class="quiz-heading">
                        <span class="subject oralcomm">Oral Communication in Context</span>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 1 Quiz</p>
                            <p class="quiz-info">20 items | 45 minutes | 2 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 2 Quiz</p>
                            <p class="quiz-info">15 items | 30 minutes | 2 Attempts</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                    <div class="quiz">
                        <div class="col-xs-10 padding-right-0 padding-left-0">
                            <p class="quiz-title">Module 3 Quiz</p>
                            <p class="quiz-info">10 items | 20 minutes | 1 Attempt</p>
                        </div>
                        <div class="col-xs-2 padding-right-0 padding-left-0 text-right">
                            <button class="btn btn-sm btn-primary">Take</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Contents-->
@stop