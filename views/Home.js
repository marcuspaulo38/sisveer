import React from 'react';
import {createMaterialBottomTabNavigator} from "@react-navigation/material-bottom-tabs";
import {css} from '../assets/css/Css';
import {Text, View, Image, TouchableOpacity} from 'react-native';
import * as SplashScreen from 'expo-splash-screen';

import Icon from "react-native-vector-icons/FontAwesome";

export default function Home({navigation}) {

    return (
    	
		<View style={css.container2}>
            <TouchableOpacity style={css.button__home} onPress={() => navigation.navigate('Login')}>

                <View style={{ marginTop: "8%"}}>
                    <Image source={require('../assets/login.png')}/>
                </View>
            </TouchableOpacity>

            <TouchableOpacity onPress={() => navigation.navigate('Login')}>
                <Image source={require('../assets/cadastro.png')}/>
            </TouchableOpacity>
        </View>
    );
}