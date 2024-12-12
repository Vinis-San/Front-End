// Promise é uma promessa!
//Resolve - Cumprimos a promessa
//Reject - "Rejeitamos" a promessa, ou não cumprimos!

const promessa = new Promise((resolve, reject) => {
    let nome = 'inicius'
    if (nome == 'Vinicius') {
        resolve({'adm':'Vinicius'})
    }
    else { reject('Foi Rejeitado porque o usuario não é vinicius') }
})

promessa.then((dadosDoResolve)=>{
    console.log(dadosDoResolve)
})

promessa.catch((infoDoErro)=>{
    console.log(infoDoErro)
})