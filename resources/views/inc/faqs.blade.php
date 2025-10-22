<div id="faqs">
    <div class="container-xl">
        <div class="faqs">
            <div class="section-title">
                <h3>Frequently Asked Questions</h3>
                <p>We have been providing car shipping services across the United States for 10 years, and our experts are ready to help you get your vehicle moved right now</p>
            </div>
            @if(count($questions))
                <div class="accordion">
                    @foreach($questions as $question)
                        <div class="accordion-item">
                            <div class="accordion-item-header">
                                {{ $question->question }}
                            </div>
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    {!! $question->answer !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
