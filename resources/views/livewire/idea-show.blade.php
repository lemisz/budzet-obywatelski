<div>
    <div class="pomysl-buttons container"></div>

        <div class="pomysl-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        {{ $idea->description }}
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">{{ $idea->user->name }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Komentarzy</div>
                        </div>
                        <div
                            x-data="{ isOpen: false}"
                            class="flex items-center space-x-2"
                        >
                            <div class="{{ $idea->getStatusClasses() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                            >
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Oznacz spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Usuń</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Koniec pomysl-container -->

        <div class="buttons-container flex items-center justify-between mt-4">
            <div class="flex items-center space-x-4 ml-6">
                <div
                    x-data="{ isOpen: false}"
                    class="relative"
                >
                    <button
                        type="button"
                        @click="isOpen = !isOpen"
                        class="flex items-center justify-center w-32 h-11 text-xs bg-red-700 text-white font-semibold rounded-xl border border-red-700 hover:bg-red-900 transition duration-150 ease-in px-6 py-3"
                    >Odpowiedz</button>
                    <div
                        x-cloak
                        x-show.transition.origin.top.left="isOpen"
                        @click.away="isOpen = false"
                        @keydown.escape.window="isOpen = false"
                        class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2"
                    >
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div>
                                <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Śmiało, podziel się swoim zdaniem, uwagami i komentarzami dotyczącymi pomysłu, o którym właśnie czytasz."></textarea>
                            </div>
                            <div class="flex items-center space-x-3">
                                <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-red-700 text-white font-semibold rounded-xl border border-red-700 hover:bg-red-900 transition duration-150 ease-in px-6 py-3">Skomentuj</button>
                                <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Załącz</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div
                    x-data="{ isOpen: false}"
                    class="relative"
                >
                    <button
                        type="button"
                        @click="isOpen = !isOpen"
                        class="flex items-center justify-center w-34 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >
                        <span>Ustaw status</span>
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show.transition.origin.top.left="isOpen"
                        @click.away="isOpen = false"
                        @keydown.escape.window="isOpen = false"
                        class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2"
                    >
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div class="space-y-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                                        <span class="ml-2">Otwarty</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-green-700 border-none" name="status" value="2">
                                        <span class="ml-2">Rozważany</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-yellow-600 border-none" name="status" value="3">
                                        <span class="ml-2">W realizacji</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-blue-700 border-none" name="status" value="3">
                                        <span class="ml-2">Zrealizowany</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-red-700 border-none" name="status" value="3">
                                        <span class="ml-2">Odrzucony</span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="(opcjonalnie) Dodaj komentarz do zmiany statusu"></textarea>
                            </div>
                            <div class="flex items-center justify-between space-x-3">
                                <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Załącz</span>
                                </button>
                                <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-red-700 text-white font-semibold rounded-xl border border-red-700 hover:bg-red-900 transition duration-150 ease-in px-6 py-3">
                                    <span class="ml-1">Zaktualizuj</span>
                                </button>
                            </div>
                            <div>
                                <label class="font-normal inline-flex items-center text-xs">
                                    <input type="checkbox" name="notify_voters" class="rounded bg-gray-200 text-red-700" checked="">
                                    <span class="ml-2">Powiadom wszystkich głosujących</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                    <div class="text-xl leading-snug @if($hasVoted) text-red-700 @endif">{{ $votesCount }}</div>
                    <div class="text-gray-400 text-xs leading-none">Głosów</div>
                </div>
                @if ($hasVoted)
                    <button
                        wire:click.prevent="vote"
                        type="button"
                        class="w-32 h-11 text-xs text-white bg-red-700 font-semibold uppercase rounded-xl border border-red-700 hover:border-red-800 transition duration-150 ease-in px-6 py-3"
                    >
                        Tak!
                    </button>
                @else
                    <button
                        wire:click.prevent="vote"
                        type="button"
                        class="w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >
                        Głosuj
                    </button>
                @endif
            </div>
        </div> <!-- Koniec button-container -->
    </div> <!-- Koniec pomysl-buttons container -->
</div>
