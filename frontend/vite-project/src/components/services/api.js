// Api.js

const API_BASE_URL = 'http://localhost:8888//Applications/MAMP/htdocs/fullStackStore/fullstackOnlineStore/backend';

const Api = {
  fetchData: async (endpoint) => {
    const response = await fetch(`${API_BASE_URL}/${endpoint}`);
    const data = await response.json();
    return data;
  },
  postData: async (endpoint, payload) => {
    const response = await fetch(`${API_BASE_URL}/${endpoint}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(payload),
    });
    const data = await response.json();
    return data;
  },
  // Add other API methods as needed
};

export default Api;
