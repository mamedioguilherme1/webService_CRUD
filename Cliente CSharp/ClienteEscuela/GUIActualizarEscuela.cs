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
    public partial class GUIActualizarEscuela : Form
    {
        EscuelaCliente.SWEscuelaClient cliEs = new EscuelaCliente.SWEscuelaClient();
        public GUIActualizarEscuela()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);
            if (txtId.Text.Equals(esc.idE))
            {
                lblIdE.Text = esc.idE;
                txtNombreEscuela.Text = esc.nombre;
                txtProfesor.Text = esc.profesor;
                txtEstudiante.Text = esc.estudiante;
                txtFecha.Text = Convert.ToString(esc.fechaCreacion);
            }
            else
            {
                lblIdE.Text = "";
                txtNombreEscuela.Text = "";
                txtProfesor.Text = "";
                txtEstudiante.Text = "";
                txtFecha.Text = "";
                MessageBox.Show("No existe!");
            }
        }

        private void btnInsertar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);
            if(txtId.Text.Equals(esc.idE))
            {
                DateTime date = Convert.ToDateTime(txtFecha.Text);
                cliEs.editarSW(txtId.Text, txtNombreEscuela.Text, txtProfesor.Text,
                        txtEstudiante.Text, date);
                MessageBox.Show("Actualizado!");
            }
            else
                MessageBox.Show("No existe!");
        }
    }
}
