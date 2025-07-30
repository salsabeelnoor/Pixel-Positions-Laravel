<?php

use App\Models\Job;
use App\Models\Employer;

it('belongs to employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id 
    ]);
    ///Act and Assert 
    expect($job->employer->is($employer))->toBeTrue();
    
});

it('can have tags', function() {
    //AAA
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
