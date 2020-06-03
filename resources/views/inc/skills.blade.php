<!-- Skills Listing and Updating-->
<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Skills
    </b></p>
<p id="skills-edit-alert" class="alert alert-success" style="display:none"></p>
{{-- Skills list --}}
<table class="table" id="skill-list">

    <tbody>
        @foreach($skills as $skill)
            <tr>
                <td>
                    <p class="text-primary">{{ $skill->skill_name }}</p>
                </td>

                <td>
                    <a onclick="return confirm('Are you sure?')" href="{{ route('destroySkill', ['id' => $skill->id]) }}"  class="span">
                        <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>

                    <a data-toggle="collapse" href="#skills-{{ $skill->id }}" role="button" aria-expanded="false"
                        aria-controls="skills-{{ $skill->id }}" class="span">
                        <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue mt-3"></i></a>



                    <!-- Skills Editing Form -->
                    <form method="POST" data-route="{{ url('updateSkills', $skill->id) }}"
                        class="collapse" id="skills-{{ $skill->id }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div id="skill-list-{{ $skill->id }}" class="card" style="border: none;">
                            <div class="form-group">
                                <input type="hidden" name="skill_id" id="skill_id{{ $skill->id }}"
                                    value="{{ $skill->id }}">
                                <input value="{{ $skill->skill_name }}" id="skill_name{{ $skill->id }}"
                                    name='skill_name' type="text" placeholder="Enter a skillset" class="form-control">
                            </div>
                            <div class="form-group">
                                <span class="w3-medium w3-text-gray">Rate your proficiency in
                                    this skill on a scale of 1 - 100%</span>
                                <select name='level' class="form-control w3-margin-bottom" id="level{{ $skill->id }}">
                                    <option>{{ $skill->level }}%</option>
                                    <option>10%</option>
                                    <option>20%</option>
                                    <option>30%</option>
                                    <option>40%</option>
                                    <option>50%</option>
                                    <option>60%</option>
                                    <option>70%</option>
                                    <option>80%</option>
                                    <option>90%</option>
                                    <option>100%</option>
                                </select>
                                <button type="button" data-id={{ $skill->id }}
                                    class="btn btn-primary updateSkills">Save</button>

                            </div>
                        </div>
                    </form>
                    <!-- End Of Skills editing Form -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- End Of Skills Listing and Updating -->



<!-- Skills Addition -->
<p>
    <span data-toggle="collapse" href="#skills" role="button" aria-expanded="false" aria-controls="skills" class="span">
        Add Skill
        <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>

    </span>
</p>
<p class="alert alert-success" id="skills-alert" style="display:none"></p>


<form method="POST" data-route="{{ route('createSkills') }}" class="collapse" id="skills">
    @csrf
    <div class="card" style="border: none;">
        <div class="form-group">

            <input id="skill_name" name='skill_name' type="text" placeholder="Enter a skillset" class="form-control">
        </div>
        <div class="form-group">
            <span class="w3-medium w3-text-gray">Rate your proficiency in this skill on a scale
                of 1 - 100%</span>
            <select name='level' class="form-control w3-margin-bottom" id="level">
                <option>0%</option>
                <option>10%</option>
                <option>20%</option>
                <option>30%</option>
                <option>40%</option>
                <option>50%</option>
                <option>60%</option>
                <option>70%</option>
                <option>80%</option>
                <option>90%</option>
                <option>100%</option>
            </select>
            <button type="submit" class="btn btn-primary" id="skills-btn">Save</button>

        </div>
    </div>
</form>
<hr>
<!-- End Of Skills Addition -->
