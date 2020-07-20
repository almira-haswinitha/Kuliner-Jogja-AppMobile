package com.example.kulinerjogja.model.register;

import com.google.gson.annotations.SerializedName;

public class RegisterData {

	@SerializedName("nama_lengkap")
	private String namaLengkap;

	@SerializedName("username")
	private String username;

	public void setNamaLengkap(String namaLengkap){
		this.namaLengkap = namaLengkap;
	}

	public String getNamaLengkap(){
		return namaLengkap;
	}

	public void setUsername(String username){
		this.username = username;
	}

	public String getUsername(){
		return username;
	}
}