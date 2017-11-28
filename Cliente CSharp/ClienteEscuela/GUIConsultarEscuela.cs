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
    public partial class GUIConsultarEscuela : Form
    {
        EscuelaCliente.SWEscuelaClient cliEs = new EscuelaCliente.SWEscuelaClient();
        EscuelaCliente.escuela escuela = new EscuelaCliente.escuela();

        public GUIConsultarEscuela()
        {
            InitializeComponent();
        }

        private void btnBuscar_Click(object sender, EventArgs e)
        {
            EscuelaCliente.escuela esc = new EscuelaCliente.escuela();
            esc = cliEs.buscarSW(txtId.Text);
            if(txtId.Text.Equals(esc.idE))
            {

                escuela = cliEs.buscarSW(txtId.Text);
                lblIdE.Text = escuela.idE;
                lblNombre.Text = escuela.nombre;
                lblProfesor.Text = escuela.profesor;
                lblEstudiante.Text = escuela.estudiante;
                lblFecha.Text = Convert.ToString(escuela.fechaCreacion);
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


        private void lblNombre_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void lblProfesor_Click(object sender, EventArgs e)
        {

        }

        private void lblEstudiante_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void lblFecha_Click(object sender, EventArgs e)
        {

        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void txtId_TextChanged(object sender, EventArgs e)
        {

        }

        private void lblIdE_Click(object sender, EventArgs e)
        {

        }

        private void lblId_Click(object sender, EventArgs e)
        {

        }
    }
}
