<div class="form-group">

  <label for="Title">Title</label>
  <input  type="text" name="title" value="{{ $article->title }}" class="form-control"  placeholder="Title of Article">

</div>

<div class="form-group">

  <div class="col col-sm-6">

    <label for="Classify">Classify in</label>
    {!! Form::select('sub_category_id', $subcategories, null, ['class'=>'form-control']) !!}

  </div>

  <div class="col col-sm-6">

    <label for="Relevance">Relevance</label>
    {!! Form::select('relevance', $relevance, null, ['class'=>'form-control']) !!}

  </div>

</div>



<div class="form-group">

  <label for="content">Content</label>
  <textarea name="content" class="form-control" id="exampleTextarea" rows="15">{{ $article->content }}
  </textarea>

</div>
