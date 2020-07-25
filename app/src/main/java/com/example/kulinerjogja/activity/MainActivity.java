package com.example.kulinerjogja.activity;

import android.content.Intent;
import android.os.Bundle;
import android.view.MenuItem;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.SessionManager;
import com.example.kulinerjogja.fragment.HomeFragment;
import com.example.kulinerjogja.fragment.DaftarFragment;
import com.example.kulinerjogja.fragment.ProfileFragment;
import com.google.android.material.bottomnavigation.BottomNavigationView;

public class MainActivity extends AppCompatActivity {
    SessionManager sessionManager;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        sessionManager = new SessionManager(MainActivity.this);
        //if (sessionManager.isLoggedIn() == false) {
         //   moveToLogin();
        //}

        BottomNavigationView bottomNav = findViewById(R.id.bottom_navigation);
        bottomNav.setOnNavigationItemSelectedListener(navListener);

        //memunculkan fragment diawal
        getSupportFragmentManager()
                .beginTransaction()
                .replace(R.id.fragment_container,new HomeFragment())
                .commit();
    }

    //private void moveToLogin() {
    //    Intent intent = new Intent(MainActivity.this, LoginActivity.class);
    //    intent.setFlags(Intent.FLAG_ACTIVITY_CLEAR_TASK | Intent.FLAG_ACTIVITY_NO_HISTORY);
    //    startActivity(intent);
    //    finish();
    //}

    private BottomNavigationView.OnNavigationItemSelectedListener navListener = new BottomNavigationView.OnNavigationItemSelectedListener() {
        @Override
        public boolean onNavigationItemSelected(@NonNull MenuItem item) {
            Fragment selected_fragment = null;
            switch (item.getItemId()) {
                case R.id.btnHome:
                    selected_fragment = new HomeFragment();
                    break;
                case R.id.btnDaftar:
                    selected_fragment = new DaftarFragment();
                    break;
                case R.id.btnProfil:
                    selected_fragment = new ProfileFragment();
                    break;
            }

            assert selected_fragment != null;
            getSupportFragmentManager()
                    .beginTransaction()
                    .replace(R.id.fragment_container, selected_fragment)
                    .commit();
            return true;
        }
    };
}