<h2 class="w3-text-grey w3-padding-14"><i
        class="fa fa-cogs fa-fw w3-margin-right w3-margin-top w3-xxlarge w3-text-blue"></i>Ongoing
    And Completed Projects</h2>

    <p class="w3-text-grey w3-padding-18 ml-3"><i
        class="fa fa-cogs  fa-fw w3-margin-right w3-margin-top w3-text-blue"></i> Projects
</p>

<div class="w3-container">

    <p id="project-edit-alert" class="alert alert-success" style="display:none"></p>

    <div id="project-list">

  
            @foreach($projects as $project)
            
                        <p class="text-primary span">
                            <span data-toggle="collapse" href="#project-{{ $project->id }}" class="span">
                            {{ $project->name }}
                            </span>
                    
                        <a onclick="return confirm('Are you sure?')" href="{{ route('destroyProject', ['id' => $project->id]) }}"  class="span">
                            <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                            

                            <a data-toggle="collapse" href="#project-{{ $project->id }}" role="button"
                                aria-expanded="false" aria-controls="project-{{ $project->id }}" class="span">
                                <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                        </p>     

                        <!-- project Editing Form -->
                        <form method="POST"
                            data-route="{{ url('updateProject', $project->id) }}"
                            class="collapse" id="project-{{ $project->id }}">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <input type="hidden" name="project_id" id="project_id{{ $project->id }}"
                                value="{{ $project->id }}">
                            <div class="card" style="border: none;">
                                <div class="form-group">
                                    <input type="text" name="name" id="name{{ $project->id }}"
                                        placeholder="Project Name" class="form-control w3-margin-bottom"
                                        value="{{ $project->name }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="link" id="link{{ $project->id }}"
                                        placeholder="Project Link" class="form-control"
                                        value="{{ $project->link }}">
                                </div>

                                <div class="form-group">
                                    <span class="w3-medium w3-text-gray">Project Description</span>
                                    <textarea name="description" class="form-control" rows="4"
                                        id="description{{ $project->id }}">{{ $project->description }}</textarea>
                                </div>
                        

                                <div class="form-group">
                                    <button type="button" data-id={{ $project->id }}
                                        class="btn btn-primary updateProject">Update</button>
                                </div>
                                <hr><br>

                            </div>
                        </form>
                        <!-- End Of project editing Form -->

            @endforeach
    </div>

    
    <p>
        <span data-toggle="collapse" href="#projects" role="button" aria-expanded="false" aria-controls="projects"
            class="span">
            Add Ongoing And Completed Projects
            <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>
        </span>
    </p>

    <p class="alert alert-success" id="project-alert" style="display:none"></p>
    <form class="collapse" id="projects" method="POST" data-route="{{ route('createProject') }}">
        @csrf
        <div class="card" style="border: none;">
            <div class="form-group">
                <input type="text" name='name' id='name' placeholder="Project Title" class="form-control w3-margin-bottom">
            </div>
            <div class="form-group">
                <input type="text" name='link' id='link' placeholder="Project link" class="form-control w3-margin-bottom">
            </div>
            <div class="form-group">
                <span class="w3-medium w3-text-gray">Project Description</span>
                <textarea name='description' class="form-control" rows="4" id="description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="project-btn">Save</button>
            </div>
        </div>
    </form>
    <hr>
</div>

