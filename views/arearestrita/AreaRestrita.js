import React, {useState,useEffect} from 'react';
import {Text, View, Button, BackHandler, Alert} from 'react-native';
import {css} from '../../assets/css/Css';
import AsyncStorage from '@react-native-community/async-storage';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import {Profile,Cadastro,Edicao} from '../index';
import Icon from 'react-native-vector-icons/FontAwesome';

export default function AreaRestrita({navigation}) {

    const Tab = createMaterialBottomTabNavigator();
    const [user,setUser]=useState(null);


    useEffect(()=>{
        async function getUser()
        {
        let resposnse=await AsyncStorage.getItem('userData');
        let json=JSON.parse(resposnse);
        setUser(json.name);
        }
        getUser();
    }, []);

    useEffect(() => {
        const backAction = () => {
            Alert.alert("Alerta!", "Deseja mesmo sair do app?", [
                {
                    text: "Não",
                    onPress: () => null,
                    style: "cancel"
                },
                { text: "Sim", onPress: () => {
                        navigation.navigate('Home');
                        //BackHandler.exitApp();
                    }
                }
            ]);
            return true;
        };

        const backHandler = BackHandler.addEventListener(
            "hardwareBackPress",
            backAction
        );

        return () => backHandler.remove();
    }, []);

    return (
        <Tab.Navigator
            activeColor='#999'
            inactiveColor='#fff'
            barStyle={css.area__tab}
        >
            <Tab.Screen
                name="Seus Tanques"
                component={Profile}
                options={{
                    tabBarIcon:()=>(
                        <Icon name="users" size={20} color="#999" />
                    )
                }}
            />
			{/* <Tab.Screen
                name="Inscritos"
                component={Cadastro}
                options={{
                    tabBarIcon:()=>(
                        <Icon name="archive" size={20} color="#999" />
                    )
                }}
            />*/}
           
        </Tab.Navigator>
    );
}