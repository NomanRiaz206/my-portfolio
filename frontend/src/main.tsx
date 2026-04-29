import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import Lenis from "@studio-freight/lenis";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { BrowserRouter } from "react-router-dom";

gsap.registerPlugin(ScrollTrigger);

const lenis = new Lenis({
  lerp: 0.1,
  smooth: true,
});

lenis.on("scroll", ScrollTrigger.update);

const update = (time: number) => {
  lenis.raf(time * 1000);
};

gsap.ticker.add(update);
gsap.ticker.lagSmoothing(0);

const root = ReactDOM.createRoot(document.getElementById("root")!);

root.render(
  <React.StrictMode>
  <BrowserRouter>
    <App />
    </BrowserRouter>
  </React.StrictMode>
);