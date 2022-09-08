 <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} ">
       <label for="name" class="control-label">Name</label>
       <input type="text" name="name" id="name" class="form-control" required="required">

        {!!$errors->first('name', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}} ">
     <label for="email" class="control-label">email</label>
     <input type="email" name="email" id="email" class="form-control" required="required">

    {!!$errors->first('email', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group  {{ $errors->has('message') ? 'has-error' : ''}}">
     <label for="message" class="control-label sr-only">Message</label>
     <textarea class="form-control" required="required" name="message" id="message" rows="10" cols="10">
                            
     </textarea>
        {!!$errors->first('message', '<span class="help-block">:message</span>')!!}
</div>
<div class="form-group">
       <button class="btn btn-primary btn-block" formnovalidate>Submit Enquirn &raquo;</button>
</div>