package com.example.kulinerjogja.activity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

import com.example.kulinerjogja.R;

public class Splash_screen extends AppCompatActivity {
    // inisialisasi timer
    private static int splashtimeout = 3000;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);

        // if timer off, method run
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent goMain = new Intent(Splash_screen.this, MainActivity.class);
                startActivity(goMain);

                finish();
            }
        }, splashtimeout);
    }
}
