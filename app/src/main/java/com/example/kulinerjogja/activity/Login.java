package com.example.kulinerjogja.activity;

import androidx.appcompat.app.AppCompatActivity;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.API.ApiClient;
import com.example.kulinerjogja.API.ApiInterface;
import com.example.kulinerjogja.utils.SessionManager;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class Login extends AppCompatActivity implements View.OnClickListener {
    EditText etUsername, etPassword;
    Button btnLogin;
    String Username, Password;
    TextView tvRegister;
    ApiInterface apiInterface;
    SessionManager sessionManager;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        etUsername = findViewById(R.id.etUsername);
        etPassword = findViewById(R.id.etPassword);

        btnLogin = findViewById(R.id.btnLogin);
        btnLogin.setOnClickListener(this);

        tvRegister = findViewById(R.id.tvCreateAccount);
        tvRegister.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()){
            case R.id.btnLogin:
                Username = etUsername.getText().toString();
                Password = etPassword.getText().toString();
                login(Username,Password);
                break;
            case R.id.tvCreateAccount:
                Intent intent = new Intent(this, Register.class);
                startActivity(intent);
                break;
        }
    }

    private void login(String username, String password) {

        Intent intent = new Intent(this, MainActivity.class);
        startActivity(intent);
    }

}
