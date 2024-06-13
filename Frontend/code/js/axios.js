document.addEventListener('DOMContentLoaded', () => {
  const clienteAxios = axios.create({
      baseURL: "http://localhost",
      headers: {
          "Content-Type": "application/json",
          "X-Requested-With": "XMLHttpRequest",
      },
      withCredentials: true,
  });

  const authForm = document.getElementById('auth-form');
  const opcionRadios = document.querySelectorAll('input[name="opcion"]');
  const loginDiv = document.getElementById('login');
  const registroDiv = document.getElementById('registro');

  opcionRadios.forEach(radio => {
      radio.addEventListener('change', (event) => {
          if (event.target.value === 'login') {
              loginDiv.style.display = 'block';
              registroDiv.style.display = 'none';
          } else {
              loginDiv.style.display = 'none';
              registroDiv.style.display = 'block';
          }
      });
  });

  authForm.addEventListener('submit', async (event) => {
      event.preventDefault();

      const selectedOption = document.querySelector('input[name="opcion"]:checked').value;

      if (selectedOption === 'login') {
          const data = {
              email: document.getElementById('login-usuario').value,
              password: document.getElementById('login-contrasena').value,
          };

          

          try {
              const { data: responseData } = await clienteAxios.post("/api/login", data);
              localStorage.setItem("AUTH_TOKEN", responseData.token);
              console.log('Login successful', responseData);
          } catch (error) {
              console.error('Error logging in', error);
          }
      } else {
          const data = {
              name: document.getElementById('registro-usuario').value,
              email: document.getElementById('form-email').value,
              password: document.getElementById('registro-contrasena').value,
          };

          try {
              const { data: responseData } = await clienteAxios.post("/api/register", data);
              console.log('Registration successful', responseData);
          } catch (error) {
              console.error('Error registering', error);
          }
      }
  });
});