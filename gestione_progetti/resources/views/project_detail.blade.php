<?php
//print_r($project);
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Detail Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row g-0">
                        <div class="card-body my-3">
                            <h1 class="card-title"><strong>Project Name: </strong>{{$project->name}}</h1>
                            <p class="card-text"><strong>Description: </strong>{{$project->description}}</p>
                            <p class="card-text"><strong>Type: </strong>{{$project->type}}</p>
                            <p class="card-text"><strong>Created: </strong>{{$project->created_at}}</p>
                        </div>
                        <div class="card-body my-3">
                        <a  type="button" href="/activities/create?id={{$project->id}}" class="btn btn-primary text-dark">Add Activity</a>
                        </div>
                        <div class="card-body my-3">
                            <h2 class="card-title">{{ __('Activities') }}</h2>
                            @if(count($project->activities) > 0)
                                <ul class="list-group list-group-flush">
                                    @foreach ($project->activities as $activity)
                                        <li class="list-group-item">
                                            {{$activity->title}}
                                            <span class="float-end">
                                                <a type="button" class="btn btn-outline-info" href="/activities/{{$activity->id}}">
                                                    <i class="bi bi-clipboard-check"></i>
                                                </a>
                                                <a type="button" class="btn btn-outline-warning " href="/activities/{{$activity->id}}/edit">Edit</a>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>I don't have any records!</p>
                            @endif
                        </div>
                        <div class="card-body my-3">
                        <a type="button" class="btn btn-outline-warning d-block" href="/projects/{{$project->id}}/edit">Edit Project</a>
                        </div>
                        <div class="card-body my-3">
                            <a type="button" class="btn btn-outline-dark d-block" href="{{route('projects')}}">Back to all project</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-body-secondary">Last updated {{$project->updated_at}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>