import React, {useState,useEffect} from 'react';
import {Text, View, Button} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';
import {css} from "../../assets/css/Css";
import MenuAreaRestrita from "../../assets/components/MenuAreaRestrita";

export default function Edicao({navigation}) {

    return (
        <View style={[css.container, css.containerTop]}>
            <MenuAreaRestrita  title='Edicao' navigation={navigation} />

        </View>
    );
}