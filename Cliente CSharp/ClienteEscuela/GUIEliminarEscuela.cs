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
    public partial class GUIEliminarEscuela : Form
    {
        EscuelaCliente.SWEscuelaClient cliEs = new EscuelaCliente.SWEscuelaClient();
        public GUIEliminarEscuela()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);

            if(txtId.Text.Equals(esc.idE))
            {
                lblIdE.Text = esc.idE;
                lblNombre.Text = esc.nombre;
                lblProfesor.Text = esc.profesor;
                lblEstudiante.Text = esc.estudiante;
                lblFecha.Text = Convert.ToString(esc.fechaCreacion);
            }
            else
            {
                lblIdE.Text = "";
                lblNombre.Text = "";
                lblProfesor.Text = "";
                lblEstudiante.Text = "";
                lblFecha.Text = "";
                MessageBox.Show("No existe!");
                
            }
                
        }

        private void btnEliminar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);
            if (txtId.Text.Equals(esc.idE))
            {
                cliEs.eliminarEscuela(txtId.Text);
                lblIdE.Text = "";
                lblNombre.Text = "";
                lblProfesor.Text = "";
                lblEstudiante.Text = "";
                lblFecha.Text = "";
                MessageBox.Show("Eliminado");
            }
            else
            {
                MessageBox.Show("No existe!");
            }
                
        }
    }
}
