<?php

$input = 'What is the time? , 22:00';

$template = '<?xml version="1.0" encoding="UTF-8"?>
<quiz>
  <question>
    {question text}
  </question>
  <answer>
    {answer text}
  </answer>
</quiz>';

$data = explode(' , ', $input);

$output = str_replace('{question text}',trim($data[0]),$template);
$output = str_replace('{answer text}',trim($data[1]),$output);

print $output;