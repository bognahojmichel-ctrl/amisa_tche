module.exports = {
  darkMode: "class",
  content: [
    "./**/*.{html,php,js}"
  ],
  theme: {
    extend: {
      colors: {
        "on-secondary-fixed-variant": "#574500",
        "on-surface-variant": "#3f484c",
        "on-tertiary-fixed": "#151d22",
        "primary-fixed-dim": "#89d0ed",
        "tertiary-container": "#bdc5cc",
        "surface-bright": "#fbf9f8",
        "tertiary-fixed-dim": "#bfc8ce",
        "on-primary-container": "#005870",
        "inverse-surface": "#303030",
        "surface-container": "#efeded",
        surface: "#fbf9f8",
        "tertiary-fixed": "#dbe4ea",
        "secondary-fixed": "#ffe088",
        "primary-fixed": "#baeaff",
        "surface-container-lowest": "#ffffff",
        "surface-variant": "#e4e2e2",
        "surface-container-high": "#eae8e7",
        "on-secondary-fixed": "#241a00",
        "on-tertiary-fixed-variant": "#40484d",
        "surface-container-highest": "#e4e2e2",
        "on-background": "#1b1c1c",
        "surface-dim": "#dbd9d9",
        "inverse-on-surface": "#f2f0f0",
        secondary: "#735c00",
        "on-primary": "#ffffff",
        "on-tertiary": "#ffffff",
        outline: "#6f787d",
        "on-error": "#ffffff",
        "error-container": "#ffdad6",
        primary: "#0c6780",
        "secondary-container": "#fed65b",
        "on-tertiary-container": "#4a5258",
        "on-primary-fixed": "#001f29",
        "secondary-fixed-dim": "#e9c349",
        background: "#fbf9f8",
        "on-secondary": "#ffffff",
        "outline-variant": "#bfc8cd",
        "inverse-primary": "#89d0ed",
        "on-primary-fixed-variant": "#004d62",
        "on-error-container": "#93000a",
        error: "#ba1a1a",
        "surface-tint": "#0c6780",
        "on-surface": "#1b1c1c",
        "on-secondary-container": "#745c00",
        "primary-container": "#87ceeb",
        tertiary: "#575f65",
        "surface-container-low": "#f5f3f3"
      },
      borderRadius: {
        DEFAULT: "0.125rem",
        lg: "0.25rem",
        xl: "0.5rem",
        full: "0.75rem"
      },
      spacing: {
        "container-max-width": "1200px",
        "margin-desktop": "48px",
        "margin-mobile": "16px",
        gutter: "24px",
        "section-gap": "80px",
        unit: "8px"
      },
      fontFamily: {
        "body-md": ["Manrope", "sans-serif"],
        "headline-lg": ["Noto Serif", "serif"],
        "body-lg": ["Manrope", "sans-serif"],
        "label-sm": ["Manrope", "sans-serif"],
        "headline-xl": ["Noto Serif", "serif"],
        "headline-md": ["Noto Serif", "serif"]
      },
      fontSize: {
        "body-md": ["16px", {
          lineHeight: "1.5",
          fontWeight: "400"
        }],
        "headline-lg": ["32px", {
          lineHeight: "1.3",
          fontWeight: "600"
        }],
        "body-lg": ["18px", {
          lineHeight: "1.6",
          fontWeight: "400"
        }],
        "label-sm": ["12px", {
          lineHeight: "1.2",
          letterSpacing: "0.05em",
          fontWeight: "600"
        }],
        "headline-xl": ["48px", {
          lineHeight: "1.2",
          letterSpacing: "-0.02em",
          fontWeight: "700"
        }],
        "headline-md": ["24px", {
          lineHeight: "1.4",
          fontWeight: "500"
        }]
      }
    }
  },
  plugins: []
};
