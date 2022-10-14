<x-layout>
<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <ex-card>
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{asset('images/acme.png')}}"
                            alt=""
                        />
                        <h3 class="text-2xl mb-2">{{$listings->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listings->company}}</div>
                        
                        <x-listing-tags : tagsCsv="listing->tags"/>
                            
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> {{$Listing->location}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Job Description
                            </h3>
                            <div class="text-lg space-y-6">
                                {{$Listing->description}}

                                <a
                                    href="mailto:{{$listings->email}}"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

                                <a
                                    href="{{$listings->websites}}"
                                    target="_blank"
                                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
                            </div>
                        </div>
                    </div>
                </ex-card>
                <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/listing/{{$listing->id}}//edit">
                        <i class="fa-solid fa-pencil"></i>edit
                    </a>
                    <form method="POST" action="/listings/{{$listing->id}}"></form>
                @csrf
                @method('DELETE')
                <button class="text-red-500"> <i class="fa-solid fa-trash">Delete</i></button>
                </x-card>
            </div>
        </x-layout>



