import { useEffect } from "react";

const CodeBlockWithCopy = () => {
  useEffect(() => {
    document.querySelectorAll("pre").forEach((pre) => {
      if (pre.querySelector(".copy-btn")) return;

      const codeElement = pre.querySelector("code");
      if (!codeElement) return;

      const wrapper = document.createElement("div");
      wrapper.className = "relative";
      pre.parentNode.insertBefore(wrapper, pre);
      wrapper.appendChild(pre);

      const button = document.createElement("button");
      button.innerText = "📋 Copia";
      button.className =
        "copy-btn absolute top-2 right-2 bg-gray-600 text-white text-xs px-2 py-1 rounded hover:bg-gray-700 transition shadow-md";

      button.addEventListener("click", async () => {
        try {
          const code = codeElement.innerText;
          await navigator.clipboard.writeText(code);
          button.innerText = "✅ Copiato!";
          setTimeout(() => (button.innerText = "📋 Copia"), 1500);
        } catch (error) {
          console.error("Errore nella copia:", error);
        }
      });

      wrapper.appendChild(button);
    });
  }, []);

  return null;
};

export default CodeBlockWithCopy;
