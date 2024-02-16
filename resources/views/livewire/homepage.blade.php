<div id="content" class="mx-auto" style="max-width:500px;">
    @include('livewire.includes.create-box')

    @include('livewire.includes.search-box')

    <div id="todos-list">
        @foreach ($todos as $todo)
            @include('livewire.includes.todo-card')
        @endforeach

        <div class="my-2">
            {{ $todos->withQueryString()->links() }}
        </div>
    </div>
</div>
