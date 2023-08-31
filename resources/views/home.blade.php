<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
<div class="mt-5 text-white mx-5 text-justify" style="color: #FFFFFF;">
    <h1 class="fw-bold">Hello,</h1>
    <div class="px-4" style="line-height: 2rem">
        <p style="text-indent: 100px;">
            I am <b class="text-warning">Anser Abbas</b>
            have 3 months PHP Laravel web development for global businesses, I offer the technical expertise and seeking
            for web developer position.
        </p>
        <p>Since my bachelor's degree in Computer Science. I am doing an internship at <b class="text-warning">Histone Solutions</b></p>
    </div>
    <div class="text-center">
        <a href="{{route('contact')}}" class="btn btn-outline-info">Hire me</a>
        <a href="{{route('contact')}}" class="btn btn-outline-info">Contact</a>
    </div>
</div>
</x-slot>
</x-layout>