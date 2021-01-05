<?php

Breadcrumbs::for('university', function($trail){
    $trail->push('University', route('university.schools'));
});

Breadcrumbs::for('school', function($trail, $school){
    $trail->parent('university');
    $trail->push($school->name, route('school.departments', $school->id));
});

Breadcrumbs::for('department', function($trail, $department){
    $trail->parent('school', $department->school);
    $trail->push($department->name, route('department.courses', $department->id));
});

Breadcrumbs::for('course', function($trail, $course){
    $trail->parent('department', $course->department);
    $breadcrumb_label = $course->code." (".$course->title.") ";
    $trail->push( $breadcrumb_label, route('course.groups', $course->id) );
});

Breadcrumbs::for('group', function($trail, $group, $target_route){
    $trail->parent('course', $group->course);
    $breadcrumb_label = "Group ".$group->label;
    $trail->push($breadcrumb_label, route($target_route, $group->id));
});


