<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Create Projects Page') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="post" action="/projects">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Project name">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea"></label>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="type">
                            <option selected> Selected Project Type </option>
                            <option value="Front-End">Front-End</option>
                            <option value="Back-End">Back-End</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add project</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>