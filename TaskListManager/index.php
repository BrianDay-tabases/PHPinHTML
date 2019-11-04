<?php
$task_list = filter_input(INPUT_POST, 'tasklist', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

if ($task_list === NULL) {
    $task_list = array();
    // some hard-coded starting values to make testing easier
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}
$action = filter_input(INPUT_POST, 'action');
$errors = array();

switch( $action ) {
    case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
    

    //case 'Modify Task':
    case 'Modify Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
        } else {
            $task_to_modify = $task_list[$task_index];
        }       
        break;
        
    //case 'Save Changes':
    case 'Save Changes':
        $index = filter_input(INPUT_POST, 'modifiedtaskid', FILTER_VALIDATE_INT);
        $modifiedtask = filter_input(INPUT_POST, 'modifiedtask');
        if($index == NULL || $index == FALSE) {
            $errors[] = 'The task index is wrong';
        } else if (empty($modifiedtask)) {
            $errors[] = 'The modified task cannot be empty';
        } else {
            $task_list[$index] = $modifiedtask;
        }
        break;
    //case 'Cancel Changes':
    case 'Cancel Changes':
        $task_to_modify ='';
        break;
    //case 'Promote Task':
    case 'Promote Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if($task_index == NULL || $task_index == false) {
            $errors[] = 'The task index is wrong';
        } else if($task_index == 0) {
            $errors[] = 'You cannot promote the first task';
        } else {
            $selected_task = $task_list[$task_index];
            $temp = $task_list[$task_index-1];
            
            $task_list[$task_index-1] = $selected_task;
            $task_list[$task_index] = $temp;
        }
        break;
    //case 'Sort Tasks':
    case 'Sort Tasks':
        sort($task_list);
        break;

}

include('task_list.php');
?>