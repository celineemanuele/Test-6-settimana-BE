<?php
  //var_dump($project_id)
?>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Create Activity Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="post" action="/activities">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Activity name">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea"></label>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="priority">
                            <option selected> Selected Project Type </option>
                            <option value="Very Low">Very Low</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="high">high</option>
                            <option value="very hight">very hight</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="start_data" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="date" name="end_data" class="form-control">
                        <input type="hidden" name="project_id" value="{{$project->id}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Add project</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>