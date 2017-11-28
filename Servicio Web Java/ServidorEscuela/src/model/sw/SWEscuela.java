package model.sw;

import estructural.Escuela;

import java.util.ArrayList;

import java.util.Date;

import javax.jws.Oneway;
import javax.jws.WebMethod;
import javax.jws.WebService;

import model.ServicioEscuela;

@WebService
public class SWEscuela {
    public SWEscuela() throws Exception {
        super();
        ServicioEscuela.cargaDatosDB();
    }
    private Escuela e;
    
    @WebMethod
    public ArrayList<Escuela> listarEscuela() {
        return ServicioEscuela.getEscuela();
    }
    
    @Oneway
    @WebMethod
    public void addEscuela(String n, String p, String est, Date f, String id) {
        e = new Escuela (n,p,est,f,id);
        ServicioEscuela.addEscuela(e);
    }

    @Oneway
    @WebMethod
    public void eliminarEscuela(String idEsc) {
        e = null;
        for(Escuela es : ServicioEscuela.getEscuela()) {
            if(idEsc.equals(es.getIdE()))
                e = es;
        }
        if(e != null){
            ServicioEscuela.removeEscuela(e);
            ServicioEscuela.eliminarDB(idEsc);
        }
    }

    @WebMethod
    @Oneway
    public void editarSW(String idEs, String n, String p, String est, Date f) {
            ServicioEscuela.editar(idEs, n, p, est, f);
            ServicioEscuela.editarDB(idEs, n, p, est, f);
    }

    public Escuela buscarSW(String id) {
        try {
            e = ServicioEscuela.buscar(id);
        } catch (Exception f) {
            System.out.println(f);
        }
        return e;
    }

}
