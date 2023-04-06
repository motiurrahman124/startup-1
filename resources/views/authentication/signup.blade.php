<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <section >
        <div class="container">
            <div class="flex justify-center items-center h-screen">
              <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12 border-2 border-blue-400 shadow-lg border-opacity-40">
                <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    <h5 class="text-3xl font-bold">Signup</h5>
                  </div>
                  <div class="flex-auto p-6">
                    <form action="{{ route('signup.store') }}" method="post" role="form text-left">
                      @csrf
                      <div class="mb-4">
                        <input name="name" type="text" value="{{ old('name') }}" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" aria-label="Name" aria-describedby="email-addon" />
                        @if($errors->first('name'))
                          <span class="text-red-600">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                      <div class="mb-4">
                        <input name="email" value="{{ old('email') }}" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                        @if($errors->first('email'))
                          <span class="text-red-600">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                      <div class="mb-4">
                        <input name="phone" type="number" value="{{ old('phone') }}" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Phone" aria-label="Email" aria-describedby="email-addon" />
                    
                      </div>
                      <div class="mb-4">
                        <input name="password" type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                        @if($errors->first('password'))
                          <span class="text-red-600">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                      <div class="mb-4">
                        <input name="password_confirmation" type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Confirm Password" aria-label="Password" aria-describedby="password-addon" />
                        @if($errors->first('password_confirmation'))
                          <span class="text-red-600">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                      </div>
                      <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
                      </div>
                      <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="{{route('login')}}" class="font-bold text-slate-700">Sign in</a></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    
</body>
</html>