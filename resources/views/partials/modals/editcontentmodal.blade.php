
<form method="POST" action="/profiles/editcontent">

    {{ csrf_field() }}

    <div class="modal fade" id="editContentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bewerk de data van je profiel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputConten">Content</label>
                        <div class="hiddenInputs">
                            <input type="text" id="tabid" value="" name="tabid">
                            <input type="text" id="type" value="" name="type">
                        </div>
                        <textarea type="text" name="contents" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ $v }}"></textarea>
                        <small id="contentHelp" class="form-text text-muted">Voer hier de content in die de oude content zal vervangen.</small>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                    <button type="submit" id="editContentSubmit" class="btn btn-primary">Bewerk content</button>
                </div>
            </div>

        </div>
    </div>
</form>