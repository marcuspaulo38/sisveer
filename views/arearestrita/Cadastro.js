import React, {useState,useEffect} from 'react';
import {Text, View, TextInput, TouchableOpacity, FlatList, Image, ScrollView, ActivityIndicator } from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';
import MenuAreaRestrita from '../../assets/components/MenuAreaRestrita';
import config from '../../config/config';
import {css} from '../../assets/css/Css';
import {Button, Glyphicon} from 'react-bootstrap';
import Icon from 'react-native-vector-icons/FontAwesome';


export default function Cadastro({navigation}) {
	
    const address=config.origin;
    const [code,setCode]=useState(null);
    const [user,setUser]=useState(null);
    const [product,setProduct]=useState(null);
    const [response,setResponse]=useState(null);


    const [isLoading, setLoading] = useState(true);
    const [data, setData] = useState([]);
    console.log(data);
    
    useEffect(()=>{
        getUser();
    },[]);

    useEffect(()=>{
        randomCode(); 
    },[]);


    useEffect(() => {
        fetch('http://martplore.com.br/psgt/psgt_mobile.php')
        .then((response) => response.json())
        .then((json) => setData(json))
        .catch((error) => console.error(error))
        .finally(() => setLoading(false));
    }, []);

    //Pegar o id do usuário
    async function getUser()
    {
        let response=await AsyncStorage.getItem('userData');
        let json=JSON.parse(response);
        setUser(json.id);
    }

    //Gerar um código randômico
    async function randomCode()
    {
        let result = '';
        let length=20;
        let chars='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for (let i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
            setCode(result);
    }

    //Envio do formulário
    async function sendForm()
    {
        let response=await fetch(config.urlRoot+'create',{
            method: 'POST',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                userId: user,
                code: code,
                product: product,
                local: address
            })
        });
    }

    return (
        <View style={[css.containerTop]}>

            <MenuAreaRestrita title='Listagem' navigation={navigation} />     

            <View style={css.login__logomarca}>

                <Image source={require('../../assets/logoAulasTopListagem.png')} />

            </View>

            <FlatList 
                data={data}
                keyExtractor={({ id }, index) => id}
                renderItem={({ item }) => (
                    <Text style={css.textoItem}>{item.dados}</Text>
                )}
            />
			
			</View>


        
    ); 
}