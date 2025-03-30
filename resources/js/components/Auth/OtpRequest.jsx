import React, { useState } from 'react'
import { useNavigate } from 'react-router-dom'
import { useMutation } from 'react-query';
import {EmailSenderFunc} from '../../hooks/queries/auth';
import  toast  from 'react-hot-toast';
import { Link } from 'react-router-dom';

export const OtpRequest = () => {
    let Navigate = useNavigate();

    const [backendError, setBackendError] = useState();

    const [Error, setError] = useState();

    const [Email, setEmail] = useState("");


      const {
        mutate: EmailMutate,
        isLoading,
      } = useMutation(EmailSenderFunc, {
        onSuccess: (data) => {
            toast.success(data, {
                position: 'top-right'
            });
            Navigate("/staff/otp-checker");
        },
        onError: (err) => {
          let errorobj = err?.response?.data?.data?.json_object;
          setBackendError({
            ...backendError,
            ...errorobj,
          });
        },
      });

      const onValidate = (e)=>{
        const email = e.target.value;
        if(email){
          setEmail(email);
        }

      }

      const onSubmit = () => {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email)){
          EmailMutate({email:Email});
        }else{
          setError("Please Enter a valid Email");
        }
      };

  return (
    <div className="w-screen h-screen flex items-center justify-center bg-gray-50 bg-teal-800">
      <div className="w-full max-w-6xl mx-auto flex shadow-lg rounded-xl overflow-hidden bg-white">
        <div className="hidden lg:block w-1/2 bg-teal-600">
            <img
                src="/img/pexels-photo-7615461.webp"
                alt="Login illustration"
                className="w-full h-full object-cover"
            />
        </div>
        <div className="w-full lg:w-1/2 px-8 py-12 sm:px-12">
          <div className="text-center mb-8">
            <a href="/">
              <img
                className="h-36 w-auto mx-auto mb-4"
                src="/logo.png"
                alt="AydinMuamalat logo"
            />
            </a>
            <h1 className="text-2xl font-bold text-teal-600">Email Validation</h1>
            <p className="text-gray-500 mt-2">Please enter your email address</p>
          </div>

          <div className="space-y-6">
            <div>
              <label htmlFor="email" className="block text-sm font-medium text-gray-700">
                Email
              </label>
              <div className="mt-1">
                <input
                  type="email"
                  value={Email}
                  onChange={onValidate}
                  className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                  placeholder="Enter your email"
                />
                <p className="text-red-500 text-sm mt-1">{Error??backendError}</p>
              </div>
            </div>

            <div>
              {isLoading ? (
                <button
                  type="button"
                  disabled
                  className="w-full py-3 px-4 text-white text-sm font-semibold bg-teal-600 rounded-lg flex items-center justify-center"
                >
                  <svg className="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                    <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Processing...
                </button>
              ) : (

                <div>
                  <div className="space-y-4">
                    <button
                        onClick={onSubmit}
                        className="w-full py-3 px-4 text-white text-sm font-semibold bg-teal-600 hover:bg-teal-700 rounded-lg transition duration-200 ease-in-out transform hover:-translate-y-1 hover:shadow-lg mb-4"
                    >
                        Submit
                    </button>
                  </div>
                  <div className="text-center">
                    <Link
                        to="/staff/login"
                        className="text-sm font-medium text-teal-600 hover:text-teal-500 transition"
                    >
                        Back to Login
                    </Link>
                  </div>
                </div>
              )}
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
