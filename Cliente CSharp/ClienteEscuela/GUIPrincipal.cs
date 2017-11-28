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
    public partial class GUIPrincipal : Form
    {
        public GUIPrincipal()
        {
            InitializeComponent();

        }

        private void btn_Insertar_Click(object sender, EventArgs e)
        {
            GUIInsertarEscuela gui = new GUIInsertarEscuela();
            gui.Show();
            
        }

        private void button5_Click(object sender, EventArgs e)
        {
            GUIListarEscuela gui = new GUIListarEscuela();
            gui.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            GUIEliminarEscuela gui = new GUIEliminarEscuela();
            gui.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            GUIConsultarEscuela gui = new GUIConsultarEscuela();
            gui.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            GUIActualizarEscuela gui = new GUIActualizarEscuela();
            gui.Show();
        }
    }
}
