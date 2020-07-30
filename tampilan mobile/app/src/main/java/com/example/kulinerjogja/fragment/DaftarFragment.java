package com.example.kulinerjogja.fragment;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.activity.Drink;
import com.example.kulinerjogja.activity.Food;

public class DaftarFragment extends Fragment {
    private Button btnMakanan;
    private Button btnMinuman;

    public DaftarFragment(){

    }
    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        return inflater.inflate(R.layout.fragment_daftar, container, false);
    }

}
