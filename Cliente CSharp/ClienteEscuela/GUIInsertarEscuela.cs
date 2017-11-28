using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ClienteEscuela
{
    public partial class GUIInsertarEscuela : Form
    {
        public GUIInsertarEscuela()
        {
            InitializeComponent();
        }
       
        private void btnInsertar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.SWEscuelaClient cliEs = new EscuelaCliente.SWEscuelaClient();
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);
            if(txtId.Equals(esc.idE))
            {
   
                MessageBox.Show("Ya existe!");
            }
            else
            {
                cliEs.addEscuela(txtNombreEscuela.Text, txtProfesor.Text,
                 txtEstudiante.Text, Convert.ToDateTime(txtFecha.Text), txtId.Text);
            }
                


        }
    }
}
