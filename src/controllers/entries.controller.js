const connection = require("../bdr.js");


/*
Para añadir una funcion de renderizado de por ejemplo usuarios.ejs, copiaremos las lineas cambiando el nombre
const renderUsuario = (req, res) => {
    res.render('index');
después añadimos "renderUsuario," en la parte de module.exports

};

*/

/*  añadan ,{ currentPage: 'nombrePagina' } */

const renderIndex = (req, res) => {
    res.render('index', { currentPage: 'index' });
};

const renderLogin = (req, res) => {
    res.render('login', { currentPage: 'login' });
};

const renderComprar = (req, res) => {
    res.render('comprar', { currentPage: 'comprar' });
};

const renderEventos = (req, res) => {
    res.render('Eventos', { currentPage: 'Eventos' });
};

const renderRegistro = (req, res) => {
    res.render('registro', { currentPage: 'registro' });
};

const renderAdmin = (req, res) => {
    res.render('admin', { currentPage: 'admin' });
};

const createNewEntry = (req, res) => {};

const createregistro = (req, res) => {
    const q = "SELECT * FROM registros WHERE correo = ?"; //Verifica si existe el usuario
    connection.query(q, [req.body.correo],(err, data) =>{
        if (err){
            console.error('Error insertando datos:', err);
            return res.status(500).send('Error al insertar los datos en la base de datos.');
        }

        if (data.length) return res.status(409).send("User already exist");


        const query = "INSERT INTO registros (nombre, correo, telefono, fnacimiento) VALUES (?)";

        const VALUES = [
            req.body.nombre,
            req.body.correo,
            req.body.telefono,
            req.body.fnacimiento
        ];
        connection.query(query, [VALUES], (err, result) => {
            if (err) {
              console.error('Error insertando datos:', err);
              return res.status(500).send('Error al insertar los datos en la base de datos.');
            }
        
            // Redirigir o mostrar un mensaje de éxito
            res.redirect("/Eventos");
        });


    })

    const correo = req.body.correo;
    const query = 'INSERT INTO registros(correo) VALUES (?)';
    

};

const renderRegister = (req, res) => {
    res.render('register');
};

module.exports = {
    renderIndex,
    createNewEntry,
    renderLogin,
    renderEventos,
    renderRegistro,
    renderAdmin,
    renderComprar,
    createregistro
};
