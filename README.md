# cybersecurity_project
# 🛡️ Cybersecurity & Web Pentesting Lab

Welcome to my cybersecurity portfolio. This repository documents my hands-on experience in vulnerability research, exploitation, and mitigation, focusing on the **OWASP Top 10**.

---

## 👨‍💻 About Me
I am a cybersecurity student focused on understanding the "how" and "why" of security breaches to build more resilient systems. My goal is to bridge the gap between offensive techniques and defensive implementations.

---

## 🔬 Featured Lab: Web Vulnerability & Remediation
In this project, I developed a controlled environment (WSL, Apache, MariaDB) to test and fix critical web vulnerabilities.

### 1. SQL Injection (SQLi)
* **Status:** ✅ Identified & Patched
* **Description:** Exploited a dynamic query to bypass authentication.
* **Mitigation:** Implemented **Prepared Statements** using PHP's `bind_param()` to neutralize the attack.

* ### 🛠️ Hands-on Exploitation (SQLi)
During my laboratory sessions, I successfully bypassed the login filter using the following payload:
* **Payload:** `' OR '1'='1' #`
* **Mechanism:** The attack takes advantage of the lack of input sanitization. The `#` character comments out the rest of the original SQL query, making the condition `1=1` (which is always true) the only requirement for access.

### 🧪 Hands-on Exploitation (XSS)
I also tested the application's resistance to script injection:
* **Payload:** `<script>alert("Security Alert: Send credentials to hacker@example.com")</script>`
* **Result:** The browser executed the script because the application reflected the input without encoding, demonstrating a Reflected XSS vulnerability.

### 2. Cross-Site Scripting (XSS)
* **Status:** ✅ Identified & Patched
* **Description:** Injected malicious JavaScript payloads to simulate session hijacking.
* **Mitigation:** Applied output encoding and input sanitization (htmlspecialchars).

---

## 🛠️ Skills & Tools
* **Languages:** Python (Automation), Bash, PHP (Secure Coding).
* **Protocols & Networking:** TCP/IP, HTTP/S, DNS.
* **Defensive Tools:** Log Analysis, Firewall configuration, SIEM.
* **Offensive Tools:** Burp Suite, SQLmap, Nmap.

---

## 📂 Repository Structure
* `/vulnerable-app`: PHP code with security flaws for testing.
* `/patched-app`: Secure version of the code with mitigations.
* `/docs`: Technical write-ups and laboratory reports.

---

## ⚠️ Ethical Disclaimer
This repository is for educational purposes only. All testing was performed in a closed, authorized environment. I do not condone or support any illegal activities.

---

## 📫 Connect with me
[LinkedIn](TU_LINK_AQUÍ) | [TryHackMe Profile](TU_LINK_AQUÍ)
