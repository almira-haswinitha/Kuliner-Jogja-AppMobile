package com.example.kulinerjogja.fragment;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.activity.Drink;
import com.example.kulinerjogja.activity.Food;

public class ListFragment extends Fragment {
    private Button btnMakanan;
    private Button btnMinuman;

    public ListFragment (){

    }
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstaceState){
        View view = inflater.inflate(R.layout.fragment_list, container, false);
        Button btnMakanan = (Button) view.findViewById(R.id.btnMakanan);
        Button btnMinuman = (Button) view.findViewById(R.id.btnMinuman);

        btnMakanan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent makanan = new Intent(getActivity(), Food.class);
                startActivity(makanan);
            }
        });

        btnMinuman.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent minuman = new Intent(getActivity(), Drink.class);
                startActivity(minuman);
            }
        });
    return view;
    }

}
