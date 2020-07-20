package com.example.kulinerjogja.activity;

import androidx.appcompat.app.AppCompatActivity;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.API.ApiClient;
import com.example.kulinerjogja.API.ApiInterface;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class Register extends AppCompatActivity implements View.OnClickListener {
    EditText etUsername, etPassword, etNama, etEmail;
    Button btnRegister;
    TextView tvLogin;
    String Username, Password, Nama, Email;
    ApiInterface apiInterface;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        etUsername = findViewById(R.id.etRegisterUsername);
        etPassword = findViewById(R.id.etRegisterPassword);
        etNama = findViewById(R.id.etRegisterNama);
        etEmail = findViewById(R.id.etRegisterEmail);
        
        btnRegister = findViewById(R.id.btnRegister);
        btnRegister.setOnClickListener(this);

        tvLogin = findViewById(R.id.tvLoginHere);
        tvLogin.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnRegister:
                Username = etUsername.getText().toString();
                Password = etPassword.getText().toString();
                Nama = etNama.getText().toString();
                Email = etEmail.getText().toString();
                register(Username, Password, Nama, Email);
                break;
            case R.id.tvLoginHere:
                Intent intent = new Intent(this, Login.class);
                startActivity(intent);
                finish();
                break;
        }
    }

    private void register(String username, String password, String nama, String email) {
        Intent intent = new Intent(this, Login.class);
        startActivity(intent);
        finish();


    }

}
