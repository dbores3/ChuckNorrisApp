import React from 'react'
import { useForm,usePage,Head } from '@inertiajs/inertia-react'
import { ToastContainer, toast } from 'react-toastify'
import 'react-toastify/dist/ReactToastify.css'

/**
 * Description: Page that gets the emails to send a Chuck Norris Joke
 * Author: David Bores
 *  **/
export default function Welcome(props) {
    const { data, setData, errors, post } = useForm({
        emails: ""
    });
    //console.log(props)
    function handleSubmit(e){
        e.preventDefault()
        post(route("jokes"),{
            preserveState: true,
            onSuccess: (res) => {
                toast.success("Jokes sent!")
            },
            onError: (errors) => {
                toast.success("Jokes were not able to be sent, please try again!")
            }
        }
        )
    }

    return (
        <>
            <Head title="Chuck Norris Jokes" />
            <div className="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div className="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div className="ml-4 text-4xl leading-7 font-semibold">
                        Chuck Norris App
                    </div>
                    <div className="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        
                    </div>
                    <div className="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div>
                            <form name='emailForm' onSubmit={handleSubmit}>
                                <div className="p-6 ">
                                    <div className="flex items-center">
                                        <div className="text-lg leading-7 font-semibold">
                                            Emails
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            Insert all emails separated by a comma. I.e. "test@gmail.com,probe@gmail.com" 
                                        </div>
                                        <div>
                                            <textarea type="text" 
                                                name="emails" 
                                                onChange={(e) =>
                                                    setData("emails", e.target.value)
                                                }
                                                className='w-full'
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div className="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                    <div className="ml-12">
                                        <div className="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            <button
                                                type="submit"
                                                className="px-6 py-2 font-bold text-white bg-green-500 rounded"
                                            >
                                                Send Joke!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ToastContainer/>
        </>
    );
}
