<!-- Message Modal -->
<div class="modal fade" id="quick-quote" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"  action="{{ url('source-request/quote') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="quote-name" placeholder="Your Name" name="source[id]" value="{{ $source->id }}">
                        Name: {{ $source->name }}
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="contact-name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="contact-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">SignIn</button>
                </div>
            </form>
        </div>
    </div>
</div>
