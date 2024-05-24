<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multipurpose Registration</title>
    @vite('resources/css/app.css')
    <script src="{{asset('js/vue.min.js')}}"></script>
</head>
<body>
<div class="grid md:grid-cols-2" id="auth" style="height: 100vh">
    <div :style="{backgroundImage: 'url(/images/auth-bg.jpg)'}" class="h-full bg-no-repeat bg-contain"></div>
    <div class="h-screen flex items-center justify-center">
        <div>
            <form>
                <div class="hidden">
                    <div class="text-3xl text-theme font-bold mb-8">Please fill with your details</div>
                    <div class="relative h-11 w-[500px] max-w-[100%] form-group mb-4 ">
                        <input placeholder="First Name"
                               name="first_name"
                               type="text"
                               required
                               class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-normal  outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"/>
                    </div>
                    <div class="relative h-11 w-[500px] max-w-[100%] form-group mb-4 ">
                        <input placeholder="Last Name"
                               name="last_name"
                               type="text"
                               required
                               class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-normal  outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"/>
                    </div>
                    <div class="relative h-11 w-[500px] max-w-[100%] form-group mb-4 ">
                        <input placeholder="Email"
                               type="email"
                               name="email"
                               required
                               class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-normal  outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"/>
                    </div>
                    <div class="relative h-11 w-[500px] max-w-[100%] form-group mb-5">
                        <input placeholder="Phone"
                               name="phone"
                               type="text"
                               required
                               class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-normal  outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"/>
                    </div>
                </div>
                <div class="hidden">
                    <div class="text-3xl text-theme font-bold mb-8">How many people attending the party?</div>
                    <div class="relative w-[500px] max-w-[100%] form-group mb-4">
                        <input placeholder="0"
                               name="number"
                               class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-normal  outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-b-2 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"/>
                    </div>
                    <div class="relative w-[500px] max-w-[100%] form-group mb-4">
                        <textarea placeholder="Notes"
                                    name="notes" rows="5"
                                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-theme focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        </textarea>
                    </div>
                </div>
                <div>
                    <div class="text-3xl text-theme font-bold mb-8">Please select participation options</div>
                    <div>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Standard</div>
                            <div>$25.00</div>
                        </label>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Vip Access</div>
                            <div>$80.00</div>
                        </label>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Vip Access + Table</div>
                            <div>$120.00</div>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="text-3xl text-theme font-bold mb-8 text-center">Thank you <br> for your timme!</div>
                    <div class="mb-16 text-center">We will contact you shortly and a summary email will be sent to your email address</div>
                    <div>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Standard</div>
                            <div>$25.00</div>
                        </label>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Vip Access</div>
                            <div>$80.00</div>
                        </label>
                        <label class="flex items-center justify-between p-4 bg-slate-100 font-bold  mb-4">
                            <div>Ticket Vip Access + Table</div>
                            <div>$120.00</div>
                        </label>
                    </div>
                </div>
                <div class="text-end mt-12">
                    <button type="button"
                            class="bg-[#7f8fa6] text-[#fff] font-bold py-2 px-8 rounded-lg hover:bg-[#718093] transition-all mr-3">
                        Prev
                    </button>
                    <button type="submit"
                            class="bg-theme text-[#fff] font-bold py-2 px-8 rounded-lg hover:bg-theme_dark transition-all">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        new Vue({
            el: '#auth',
            mounted() {
                console.log('hello auth!')
            }
        })
    </script>
</div>
</body>
</html>
