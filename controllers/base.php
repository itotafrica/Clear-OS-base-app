<?php

/**
 * Base controller.
 *
 * @category   apps
 * @package    base
 * @subpackage controllers
 * @author     ClearFoundation <developer@clearfoundation.com>
 * @copyright  2011-2018 ClearFoundation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License version 3 or later
 * @link       http://www.clearfoundation.com/docs/developer/apps/base/
 */


class Base extends ClearOS_Controller
{
    function upload() {
        $this->page->view_form("upload_view");
    }
    
    function image() {
        $this->load->view("image");
    }
    

    function save_logo() {
        
        // Load helper
        // -----------
        $this->load->helper(array('form', 'url'));
        
        //exec("sudo chmod -R 777 /home/");
        exec("sudo chmod -R 777 /usr/clearos/apps/base/");

        
        // Setup configuration
        // -------------------
    	$config['upload_path']   = "/usr/clearos/apps/base/";
        $config['allowed_types'] = 'png';
        $config['max_size']      = 1000;
        $config['max_width']     = 800;
        $config['max_height']    = 800;

        //echo base_url().'uploads/';

        // Loading library
        // ---------------
        $this->load->library('upload', $config);

        // Trying upload
        // -------------
        if (!$this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->page->view_form('error_upload_view', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            // Le nouveau nom du fichier a telecharger
            $newName = $data['upload_data']['file_path'] .'image' . $data['upload_data']['file_ext'];

            // Renomage du fichier a telecharger
            rename($data['upload_data']['full_path'], $newName);
            $this->page->view_form('success_upload_view');
        }
    }

    function index()
    {
        // Load libraries
        //---------------

        $this->lang->load('base');
	
        // Load views
        //-----------

        if (clearos_library_installed('language/Locale') || clearos_app_installed('certificate_manager'))
            $views = array('base/settings', 'base/theme', 'base/shutdown');
        else
            $views = array('base/theme', 'base/shutdown');

        $this->page->view_forms($views, lang('base_app_name'));
    }

    function language()
    {
        redirect('/base');
    }
}
