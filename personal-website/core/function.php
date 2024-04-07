<?php

function checkRequestMethod($method){
    if ($_SERVER['REQUEST_METHOD'] == $method ){
        return true;
    }
        return false; 
}

function checkPostInput($input){
    if (isset($_POST[$input])){
        return true;
    }
        return false; 
}

function sanitizeinput($input){
    return trim(htmlspecialchars(htmlentities($input)));
}

function redirect($path)
{
    header("Location: $path");
}


function createNewProject(array $newProjectData)
{
    $projects = getAllProjects();

    $projects[] = $newProjectData;

    saveAllProjects($projects);
}

function getAllProjects()
{
    $projects = file_get_contents(__DIR__ . '/../data/messages.json');

    $projects = json_decode($projects, true);

    return $projects;
}

function saveAllProjects($projects)
{
    $projects = json_encode($projects);
    file_put_contents(__DIR__ . '/../data/messages.json', $projects, JSON_PRETTY_PRINT);
}

function getSession($key)
{
    $value = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $value;
}

function deleteProject($id)
{
    $projects = getAllProjects();

    foreach ($projects as $key => $project) {
        if ($project['id'] == $id) {
            deleteFile($project['image']);
            unset($projects[$key]);
        }
    }

    saveAllProjects($projects);
}