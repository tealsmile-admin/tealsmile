/**
 * TEALSMILE TECHNOLOGIES — Frontend Scripts
 * Sticky nav · Smooth scroll · Fade-in · Counters · Form validation · FABs
 */
(function () {
  "use strict";

  const header = document.getElementById("header");
  const backToTop = document.getElementById("backToTop");
  const contactForm = document.getElementById("contactForm");
  const formStatus = document.getElementById("formStatus");
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const sections = document.querySelectorAll("main section[id]");
  const navCollapse = document.getElementById("mainNav");

  /* ---------- Sticky header + back to top ---------- */
  function onScroll() {
    const y = window.scrollY || document.documentElement.scrollTop;
    if (header) {
      header.classList.toggle("scrolled", y > 20);
    }
    if (backToTop) {
      backToTop.classList.toggle("visible", y > 480);
    }
    highlightNav();
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  if (backToTop) {
    backToTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* ---------- Active nav on scroll ---------- */
  function highlightNav() {
    const offset = 100;
    let current = "";

    sections.forEach(function (section) {
      const top = section.offsetTop - offset;
      if (window.scrollY >= top) {
        current = section.getAttribute("id");
      }
    });

    // Map nested sections to nav items
    const map = {
      home: "home",
      about: "about",
      services: "services",
      "local-seo": "services",
      industries: "industries",
      "why-us": "why-us",
      process: "why-us",
      stats: "why-us",
      grow: "contact",
      faqs: "about",
      contact: "contact",
    };

    const activeId = map[current] || current;

    navLinks.forEach(function (link) {
      link.classList.remove("active");
      const href = link.getAttribute("href");
      if (href === "#" + activeId) {
        link.classList.add("active");
      }
    });
  }

  /* ---------- Close mobile menu on link click ---------- */
  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      if (navCollapse && navCollapse.classList.contains("show") && window.bootstrap) {
        const collapse = bootstrap.Collapse.getInstance(navCollapse);
        if (collapse) collapse.hide();
      }
    });
  });

  const ctaBtn = document.querySelector(".btn-cta");
  if (ctaBtn) {
    ctaBtn.addEventListener("click", function () {
      if (navCollapse && navCollapse.classList.contains("show") && window.bootstrap) {
        const collapse = bootstrap.Collapse.getInstance(navCollapse);
        if (collapse) collapse.hide();
      }
    });
  }

  /* ---------- Fade-in on scroll ---------- */
  const fadeEls = document.querySelectorAll(".fade-up");

  if ("IntersectionObserver" in window) {
    const fadeObserver = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            const delay = entry.target.getAttribute("data-delay") || 0;
            setTimeout(function () {
              entry.target.classList.add("visible");
            }, Number(delay));
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );

    fadeEls.forEach(function (el) {
      fadeObserver.observe(el);
    });
  } else {
    fadeEls.forEach(function (el) {
      el.classList.add("visible");
    });
  }

  /* ---------- Animated counters ---------- */
  const counters = document.querySelectorAll(".counter");
  let countersStarted = false;

  function animateCounter(el) {
    const target = parseInt(el.getAttribute("data-target"), 10) || 0;
    const duration = 1600;
    const start = performance.now();

    function tick(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target);
      if (progress < 1) {
        requestAnimationFrame(tick);
      } else {
        el.textContent = target;
      }
    }

    requestAnimationFrame(tick);
  }

  function startCounters() {
    if (countersStarted) return;
    countersStarted = true;
    counters.forEach(animateCounter);
  }

  const statsSection = document.getElementById("stats");
  if (statsSection && "IntersectionObserver" in window) {
    const statsObserver = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startCounters();
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.35 }
    );
    statsObserver.observe(statsSection);
  } else if (counters.length) {
    startCounters();
  }

  /* ---------- Contact form validation + API submit ---------- */
  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function isValidPhone(phone) {
    if (phone.length > 20) return false;
    const digits = phone.replace(/\D/g, "");
    return digits.length >= 10 && digits.length <= 20;
  }

  function setInvalid(input, invalid) {
    if (invalid) {
      input.classList.add("is-invalid");
    } else {
      input.classList.remove("is-invalid");
    }
  }

  function setFormStatus(text, type) {
    if (!formStatus) return;
    formStatus.textContent = text;
    formStatus.className = "form-note" + (type ? " " + type : "");
  }

  if (contactForm) {
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const fields = {
      name: contactForm.querySelector("#name"),
      company: contactForm.querySelector("#company"),
      email: contactForm.querySelector("#email"),
      phone: contactForm.querySelector("#phone"),
      message: contactForm.querySelector("#message"),
    };

    Object.keys(fields).forEach(function (key) {
      const input = fields[key];
      if (!input) return;
      input.addEventListener("input", function () {
        setInvalid(input, false);
        setFormStatus("", "");
      });
    });

    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      let valid = true;
      const payload = {
        name: fields.name.value.trim(),
        company: fields.company ? fields.company.value.trim() : "",
        email: fields.email.value.trim(),
        phone: fields.phone.value.trim(),
        message: fields.message.value.trim(),
      };

      if (payload.name.length < 2 || payload.name.length > 100) {
        setInvalid(fields.name, true);
        valid = false;
      }
      if (payload.company.length > 100) {
        setInvalid(fields.company, true);
        valid = false;
      }
      if (!isValidEmail(payload.email) || payload.email.length > 150) {
        setInvalid(fields.email, true);
        valid = false;
      }
      if (!isValidPhone(payload.phone)) {
        setInvalid(fields.phone, true);
        valid = false;
      }
      if (payload.message.length < 10 || payload.message.length > 300) {
        setInvalid(fields.message, true);
        valid = false;
      }

      if (!valid) {
        setFormStatus("Please correct the highlighted fields.", "error");
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.dataset.originalText = submitBtn.textContent;
        submitBtn.textContent = "Submitting...";
      }
      setFormStatus("Saving your enquiry...", "");

      fetch("api/submit-enquiry.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json",
        },
        body: JSON.stringify(payload),
      })
        .then(function (res) {
          return res.json().then(function (data) {
            return { ok: res.ok, status: res.status, data: data };
          });
        })
        .then(function (result) {
          const data = result.data || {};
          if (result.ok && data.success) {
            setFormStatus(
              data.message ||
                "Thank you! Your enquiry has been submitted successfully. Our team will contact you shortly.",
              "success"
            );
            contactForm.reset();
            return;
          }

          if (data.errors) {
            Object.keys(data.errors).forEach(function (key) {
              if (fields[key]) setInvalid(fields[key], true);
            });
          }

          setFormStatus(
            data.message ||
              "Sorry, we could not save your enquiry. Please try again or call 9920777048.",
            "error"
          );
        })
        .catch(function () {
          setFormStatus(
            "Network error. Please check your connection and try again, or call 9920777048.",
            "error"
          );
        })
        .finally(function () {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = submitBtn.dataset.originalText || "Submit Enquiry";
          }
        });
    });
  }
})();
