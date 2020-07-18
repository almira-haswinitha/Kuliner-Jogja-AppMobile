package com.example.kulinerjogja.fragment;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import androidx.fragment.app.Fragment;

import com.example.kulinerjogja.R;
import com.example.kulinerjogja.activity.Sign_in;
import com.example.kulinerjogja.activity.Sign_up;

public class ProfileFragment extends Fragment {
    private Button btnSignIn, btnSignUp;


    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstaceState){
        View view = inflater.inflate(R.layout.fragment_profile, container, false);
        Button btnSignIn = (Button) view.findViewById(R.id.btnSignIn);
        Button btnSignUp = (Button) view.findViewById(R.id.btnSignUp);

        btnSignIn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent sign_in = new Intent(getActivity(), Sign_in.class);
                startActivity(sign_in);
            }
        });

        btnSignUp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent sign_up = new Intent(getActivity(), Sign_up.class);
                startActivity(sign_up);
            }
        });
        return view;
    }

}
