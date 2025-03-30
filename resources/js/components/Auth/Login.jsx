import React, { useState } from 'react'
import { useForm } from "react-hook-form";
import * as yup from "yup";
import { yupResolver } from '@hookform/resolvers/yup';
import { useMutation } from 'react-query';
import { LoginWithPasswordFunc } from '../../hooks/queries/auth';
import { updateAxiosToken } from '../../config/axios.config';
import { setToken } from '../../helper/functions';
import { Link, useNavigate } from "react-router-dom";
import { UseStore } from '../../store';
import { getUsers } from '../../hooks/queries/auth/auth';
// import Swal from 'sweetalert2';
import Swal from 'sweetalert2/dist/sweetalert2.all.js';

const Login = () => {
    let navigate = useNavigate();
    const store = UseStore();
    const [backendError, setBackendError] = useState()
    const schema = yup
    .object({
      username: yup.string().min(4, "Too Short!")
        .max(50, "Too Long!"),
      password: yup.string().min(6, "Too Short!")
    })
    .required();

    const { register, handleSubmit, formState: { errors } } = useForm({
        resolver: yupResolver(schema)
      });

    const {
        mutate: LoginMutate,
        isLoading: loading,

      } = useMutation(LoginWithPasswordFunc, {
        onSuccess: (data) => {

          if (data?.token) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            })
            setTimeout(() => {
                updateAxiosToken(data?.token)
                setToken(data?.token)
                navigate("/staff/dashboard");
                callUserData()
            }, 3000)

          }
        },
        onError: (err) => {
            if (err?.response?.data?.data?.string_data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Login failed',
                    text: err?.response?.data?.data?.string_data,
                })
            }
          let errorobj = err?.response?.data?.data?.json_object;
          setBackendError({
            ...backendError,
            ...errorobj,
          });

        },
      });
      const onSubmit = (data) => {
        LoginMutate(data)
      };
      async function callUserData () {
        let data = await getUsers()
        if (data?.data?.json_object) {
         store.setUser(data?.data?.json_object)
         store.setAuth(true)
        }
     }
  return (
    <>
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
                <h1 className="text-2xl font-bold text-teal-600">Welcome Back!</h1>
                <p className="text-gray-500 mt-2">Please sign in to your account</p>
              </div>

              <form onSubmit={handleSubmit(onSubmit)} className="space-y-6">
                <div>
                  <label htmlFor="username" className="block text-sm font-medium text-gray-700">
                    Username
                  </label>
                  <div className="mt-1">
                    <input
                      type="text"
                      {...register("username")}
                      className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                      placeholder="Enter your username"
                    />
                    <p className="text-red-500 text-sm mt-1">{errors.username?.message ?? backendError?.username}</p>
                  </div>
                </div>

                <div>
                  <label htmlFor="password" className="block text-sm font-medium text-gray-700">
                    Password
                  </label>
                  <div className="mt-1">
                    <input
                      type="password"
                      {...register("password")}
                      className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                      placeholder="Enter your password"
                    />
                    <p className="text-red-500 text-sm mt-1">{errors.username?.message ?? backendError?.password}</p>
                  </div>
                </div>

                <div>
                  <button
                    type="submit"
                    className="w-full py-3 px-4 text-white text-sm font-semibold bg-teal-600 hover:bg-teal-700 rounded-lg transition duration-200 ease-in-out transform hover:-translate-y-1 hover:shadow-lg"
                  >
                    Sign In
                  </button>
                </div>

                <div className="text-center">
                  <Link
                    to="/staff/email-validation"
                    className="text-sm font-medium text-teal-600 hover:text-teal-500 transition"
                  >
                    Forgot your password?
                  </Link>
                </div>
              </form>
            </div>
          </div>
        </div>
    </>
  )
}

export default Login;
