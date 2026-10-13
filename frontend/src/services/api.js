import axios from "axios";

const API_URL = "";

//get szobatip
export const getSzobatipusok = () => {
    return axios.get(`${API_URL}/szobatipusok`);
};

//ossz tanszob
export const getTanuloszobak = () => {
    return axios.get(`${API_URL}/tanuloszobak`);
};



//put
export const tanszobUpdate = (id, adatok) => {
    return axios.put(`${API_URL}/tanuloszobak/${id}`, adatok);
};

//del
export const tanszobDel = (id) => {
    return axios.delete(`${API_URL}/tanuloszobak/${id}`);
};