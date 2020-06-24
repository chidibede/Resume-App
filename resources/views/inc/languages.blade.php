<!-- Languages Listing and Updating-->
<p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Languages</b></p>
<p id="languages-edit-alert" class="alert alert-success" style="display:none"></p>
{{-- Languages list --}}
<div id="languages-list">

        @foreach($languages as $language)
                <p class="text-primary">{{ $language->language_name }}
                    <a onclick="return confirm('Are you sure?')" href="{{ route('destroyLanguage', ['id' => $language->id]) }}"  class="span">
                        <i class="fa fa-trash fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>

                    <a data-toggle="collapse" href="#languages-{{ $language->id }}" role="button"
                        aria-expanded="false" aria-controls="languages-{{ $language->id }}" class="span">
                        <i class="fa fa-pencil fa-fw w3-margin-right w3-right w3-large w3-text-blue"></i></a>
                    </p>


                    <!-- Languages Editing Form -->
                    <form method="POST"
                        data-route="{{ url('updateLanguages', $language->id) }}"
                        class="collapse" id="languages-{{ $language->id }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div id="language-list-{{ $language->id }}" class="card" style="border: none;">
                            <div class="form-group">
                                <input type="hidden" name="language_id" id="language_id{{ $language->id }}"
                                    value="{{ $language->id }}">
                                <input value="{{ $language->language_name }}" id="language_name{{ $language->id }}"
                                    name='language_name' type="text" placeholder="Enter a language"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <span class="w3-medium w3-text-gray">Rate your proficiency in
                                    this language on a scale of 1 - 100%</span>
                                <select name='level' class="form-control w3-margin-bottom"
                                    id="level{{ $language->id }}">
                                    <option>{{ $language->level }}%</option>
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
                                <button type="button" data-id={{ $language->id }}
                                    class="btn btn-primary updateLanguages">Save</button>

                            </div>
                        </div>
                    </form>
                    <!-- End Of language editing Form -->
            
        @endforeach
    
</div>
<!-- End Of Language Listing and Updating -->



<!-- Language Addition -->
<p>
    <span data-toggle="collapse" href="#languages" role="button" aria-expanded="false" aria-controls="languages"
        class="span">
        Add Language
        <i class="fa fa-plus-circle fa-fw w3-margin-right w3-right w3-xlarge w3-text-blue"></i>

    </span>
</p>
<p class="alert alert-success" id="languages-alert" style="display:none"></p>


<form method="POST" data-route="{{ route('createLanguages') }}" class="collapse" id="languages">
    @csrf
    <div class="card" style="border: none;">
        <div class="form-group">

            <input id="language_name" name='language_name' type="text" placeholder="Enter a Language"
                class="form-control">
        </div>
        <div class="form-group">
            <span class="w3-medium w3-text-gray">Rate your proficiency in this language on a scale
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
            <button type="submit" class="btn btn-primary">Save</button>

        </div>
    </div>
</form>
<hr>
<!-- End Of Language Addition -->
