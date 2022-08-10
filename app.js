// Alternative Versions:
// - CSS @scroll-timeline + Polyfill: https://codepen.io/bramus/pen/oNzQbZE
// - JS ScrollTimeline + Polyfill: https://codepen.io/bramus/pen/qBoPvXq
// - JS Motion One: https://codepen.io/bramus/pen/zYWdPvr 👈 = The version you are currently looking at

import { scroll, animate } from "https://cdn.skypack.dev/motion@10.13.1";

scroll(
  animate(".parallax", { backgroundPosition: ["50% 0", "50% 100%"] }),
  {
    offset: ["0vh", "100vh"]
  }
);