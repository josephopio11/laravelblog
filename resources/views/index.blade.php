@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read
                    more</a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" width="700">
        </div>
        <div class="m-auto sm:mx-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a web developer
            </h2>
            <p class="py-8 text-gray-500 text-xl">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis.
            </p>
            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sequi provident, reiciendis natus
                inventore quisquam tenetur eveniet ratione tempore, sapiente quas suscipit aut.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out
                More</a>
        </div>
    </div>
    <div class=" text-center p-15 bg-black text-white">
        <h2 class=" text-2xl pb-5 text-l">
            I am an expert in ...
        </h2>
        <span class=" font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class=" font-extrabold block text-4xl py-1">
            Web App development
        </span>
        <span class=" font-extrabold block text-4xl py-1">
            Teaching Computer Science
        </span>
        <span class=" font-extrabold block text-4xl py-1">
            Wedding and Nature Photography
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illum
            natus, aliquam fugiat corrupti sequi ut dicta harum earum accusamus impedit numquam debitis provident, quibusdam
            maxime veniam quas nostrum deleniti.</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci doloremque nam debitis nemo aliquam!
                    Perferendis, odit! Numquam maiores repellat eius nam dolores ex minus natus voluptates in, nisi alias
                    facere.
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>

            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" width="700">
        </div>
    </div>
@endsection
