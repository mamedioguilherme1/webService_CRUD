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
    public partial class GUIListarEscuela : Form
    {
        EscuelaCliente.SWEscuelaClient cliEs = new EscuelaCliente.SWEscuelaClient();
        public GUIListarEscuela()
        {
            InitializeComponent();

        }
        
        private void Listar_Load(object sender, EventArgs e)
        {
            gridDatos.AutoGenerateColumns = false;
            gridDatos.DataSource = cliEs.listarEscuela();
        }

        private void btnListar_Click(object sender, EventArgs e)
        {
            gridDatos.DataSource = cliEs.listarEscuela();
        }
    }
}
