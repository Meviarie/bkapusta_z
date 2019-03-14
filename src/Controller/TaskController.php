<?php

namespace App\Controller;


use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * Class TaskController
 *
 * @Route("/task")
 *
 */

class TaskController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/", name="task_index")
     */

    public function index(TaskRepository $taskRepository): Response
    {
        return $this->render(
            'task/index.html.twig',
            ['tasks' => $taskRepository->findAll()]
        );
    }


    /**
     *
     * @param TaskRepository $taskRepository
     * @param Task $task
     * @return Response
     *
     * @Route(
     *     "/{id}",
     *     name="task_view",
     *     )
     */

    public function view(Task $task): Response
    {
        return $this->render(
            '',['task'=>$task]
        );
    }
}