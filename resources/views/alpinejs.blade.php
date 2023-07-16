<x-layout>
    <div class="bg-gray-100 p-8">
        <!-- Dropdown -->
        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="inline-flex items-center py-2 px-6 bg-purple-600 hover:bg-opacity-95 text-white rounded-md shadow">
                Toggle
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-all" :class="{ 'rotate-90': open }"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <ul x-show="open" @click.outside="open = false" x-transition
                class="absolute bg-white w-[160px] shadow-md py-1">
                <li>
                    <a class="py-1 px-2 hover:bg-gray-200 flex items-center" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        Open
                    </a>
                </li>
                <li>
                    <a class="py-1 px-2 hover:bg-gray-200 flex items-center" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit
                    </a>
                </li>
                <li>
                    <a class="py-1 px-2 hover:bg-gray-200 flex items-center" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
        <br />
        <hr />
        <br />
        <!-- Modal -->
        <div x-data="{
            open: false,
            accept() {
                console.log('accepted')
            }
        }">
            <button @click="open = true"
                class="inline-flex items-center py-2 px-6 bg-purple-600 hover:bg-opacity-95 text-white rounded-md shadow">
                Toggle Modal
            </button>
            <template x-teleport="body">
                <!-- Backdrop -->
                <div x-show="open"
                    class="fixed flex justify-center items-center left-0 top-0 bottom-0 right-0 z-10 bg-black/50">
                    <!-- Dialog -->
                    <div x-show="open" x-transition @click.outside="open = false"
                        class="w-[90%] md:w-1/2 bg-white rounded-lg">
                        <!-- Modal Title -->
                        <div
                            class="py-2 px-4 text-lg font-semibold bg-gray-100 rounded-t-lg flex items-center justify-between">
                            <h2>Modal Title</h2>
                            <button @click="open = false">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="p-4">Modal Content</div>
                        <!-- Modal Footer -->
                        <div class="py-2 px-4 text-lg flex justify-end font-semibold bg-gray-100 rounded-b-lg">
                            <button @click="accept"
                                class="inline-flex items-center py-1 px-3 bg-emerald-500 hover:bg-opacity-95 text-white rounded-md shadow mr-2">
                                Accept
                            </button>
                            <button @click="open = false"
                                class="inline-flex items-center py-1 px-3 bg-gray-300 hover:bg-opacity-95 text-gray-800 rounded-md shadow">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <br />
        <hr />
        <br />
        <!-- Tabs -->
        <div x-data="{
            tabs: ['Home', 'Users', 'Settings', 'Orders'],
            activeTab: 'Home'
        }">
            <div class="flex">
                <template x-for="tab in tabs">
                    <a @click="activeTab = tab" x-text="tab" class="py-2 px-3 bg-white cursor-pointer border"
                        :class="{ 'border-purple-500': activeTab === tab, 'text-blue-500': activeTab === tab }"></a>
                </template>
            </div>
            <div class="py-2 px-3 bg-white border">
                <!-- Home -->
                <div x-show="activeTab === 'Home'" x-transition>Home</div>
                <!-- Users -->
                <div x-show="activeTab === 'Users'" x-transition>Users</div>
                <!-- Settings -->
                <div x-show="activeTab === 'Settings'" x-transition>Settings</div>
                <!-- Orders -->
                <div x-show="activeTab === 'Orders'" x-transition>Orders</div>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <!-- Carousel -->
        <div x-data="{
            images: ['img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg'],
            activeImage: null,
            prev() {
                let index = this.images.indexOf(this.activeImage);
                if (index === 0)
                    index = this.images.length;
                this.activeImage = this.images[index - 1];
            },
            next() {
                let index = this.images.indexOf(this.activeImage);
                if (index === this.images.length - 1)
                    index = -1;
                this.activeImage = this.images[index + 1];
            },
            init() {
                this.activeImage = this.images.length > 0 ? this.images[0] : null
            }
        }">
            <div class="relative w-1/2">
                <template x-for="image in images">
                    <div x-show="activeImage === image" x-transition class="aspect-w-3 aspect-h-2">
                        <img :src="image" alt="" class="object-cover" />
                    </div>
                </template>
                <a @click.prevent="prev" class="cursor-pointer text-white absolute left-0 top-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <a @click.prevent="next" class="cursor-pointer text-white absolute right-0 top-1/2 -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="flex">
                <template x-for="image in images">
                    <a @click="activeImage = image"
                        class="cursor-pointer w-[80px] border border-gray-300 hover:border-purple-500 flex items-center justify-center"
                        :class="{ 'border-purple-600': activeImage === image }">
                        <img :src="image" alt="" class="object-cover" />
                    </a>
                </template>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <!-- Accordion -->
        <div x-data="{
            items: [
                { title: 'Item 1', body: 'Body 1' },
                { title: 'Item 2', body: 'Body 2' },
                { title: 'Item 3', body: 'Body 3' },
                { title: 'Item 4', body: 'Body 4' },
            ],
            activeItem: null,
            selectItem(item) {
                if (this.activeItem === item) {
                    this.activeItem = null
                } else {
                    this.activeItem = item
                }
            }
        }">
            <template x-for="item in items">
                <div>
                    <div @click="selectItem(item)"
                        class="py-1 px-2 bg-gray-50 border cursor-pointer hover:text-blue-400 transition-all font-semibold flex justify-between items-center">
                        <span x-text="item.title"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-all"
                            :class="{ 'rotate-90': activeItem === item }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div x-show="activeItem === item" x-transition x-html="item.body" class="p-2 bg-white border">
                    </div>
                </div>
            </template>
        </div>
        <br />
        <hr />
        <br />
        <!-- Notification -->
        <div x-data="{
            visible: true,
            timeout: 5000,
            percent: 0,
            interval: null,
            close() {
                this.visible = false;
                clearInterval(this.interval)
            },
            init() {
                setTimeout(() => {
                    this.visible = false;
                }, this.timeout)
                const startDate = Date.now();
                const futureDate = Date.now() + this.timeout;
                this.interval = setInterval(() => {
                    const date = Date.now();
                    this.percent = (date - startDate) * 100 / (futureDate - startDate);
                    if (this.percent >= 100) {
                        clearInterval(this.interval)
                    }
                }, 30)
            }
        }" x-show="visible" class="relative py-2 px-4 pb-4 bg-emerald-500 text-white">
            <div class="font-semibold mb-2">Lorem ipsum dolor sit</div>
            <div class="text-sm">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro ea
                placeat sed soluta velit sint, adipisci consequuntur quaerat alias
                consectetur iste perspiciatis ducimus consequatur vitae? Officia,
                assumenda. Nobis, expedita optio.
            </div>
            <button @click="close"
                class="absolute flex items-center justify-center right-2 top-2 w-[30px] h-[30px] rounded-full hover:bg-black/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- Progress -->
            <div>
                <div class="absolute left-0 bottom-0 right-0 h-[6px] bg-black/10" :style="{ 'width': `${percent}%` }">
                </div>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <!-- Popover -->
        <div x-data="{
            show: false,
            title: 'Test Popover',
            message: 'Test <b>popover</b> message',
            showPopover() {
                console.log(this.$refs.button, this.$refs.popover)
                this.show = !this.show
            }
        }" class="relative flex justify-center">
            <button x-ref="button" @click="showPopover"
                class="inline-flex items-center py-2 px-6 bg-purple-600 hover:bg-opacity-95 text-white rounded-md shadow">
                Popover
            </button>
            <div x-ref="popover" x-show="show" x-transition
                class="absolute mb-2 bottom-[100%] shadow-lg bg-white w-[200px] rounded">
                <!-- Header -->
                <div class="flex justify-between items-center font-semibold py-1 px-2">
                    <span x-text="title"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <!-- Body -->
                <div x-html="message" class="p-3 text-sm"></div>
            </div>
        </div>
    </div>
</x-layout>
