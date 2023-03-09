import React from 'react';
import {createRoot} from "react-dom/client";
import {createBrowserRouter, RouterProvider} from "react-router-dom";
import Home from "@/routes/Home";
import About from "@/routes/About";

const router = createBrowserRouter([
    {
        path: "/",
        element: <Home />
    },
    {
        path: "/about",
        element: <About />
    }
]);

createRoot(document.getElementById("root"))
    .render(
        <React.StrictMode>
            <RouterProvider router={router} />
        </React.StrictMode>
    );
