<?php

class lat_class
{
        protected  $errors;
        public function __construct($config = array())
        {
                $this->title = 'Landini Plugin';
                $this->name = 'plugin';
                if (isset($config['title'])) $this->title = $config['title'];
                if (isset($config['name'])) $this->name = $config['name'];
        }

        public function add_to_file($file_path, $find_function = false, $code, $location = 0)
        {
                /* Check if file exists and is writable */
                $file_code = @file_get_contents($file_path);
                if (filesize($file_path) > 0) {
                        if (!$file_code) return $this->error('add_to_file', 'Unable to access file: ' . $file_path);
                }

                /* Find extra function */
                if ($find_function) {
                        $search = '/(' . $find_function . ')/';
                        preg_match_all($search, $file_code, $matches, PREG_OFFSET_CAPTURE);
                        if (count($matches) < $location + 1) {
                                return $this->error('add_to_file', 'Could not determine correct function location');
                        }
                        /* start position of extra function */
                        $hf_position = $matches[0][$location][1];

                        /* position of next function, or EOF position if this is the last function in the file */
                        $nf_position = strlen($file_code);
                        preg_match_all('/(<!-- group and IP address -->)/', $file_code, $matches, PREG_OFFSET_CAPTURE, $hf_position + 10);
                        if (count($matches)) $nf_position = $matches[0][0][1];
                        /* extras function code */
                        $old_function_code = substr($file_code, $hf_position, $nf_position - $hf_position);
                } else {
                        $old_function_code = substr($file_code, 0);
                }


                /* Checks $code is not already in there */
                if (strpos($old_function_code, $code) !== false) {
                        return $this->error('add_to_file', 'Code already exists');
                }

                /* insert $code and save */
                $code_comment = "/* Inserted by {$this->title} on " . date('Y-m-d h:i:s') . " */";
                $new_code = "\n<?php {$code_comment} ?>\n\t\t{$code}\n<?php /* End of {$this->title} code */ ?>\n";

                $new_function_code = preg_replace(
                        "/" . makeSafe($find_function) . "/",
                        $new_code,
                        $old_function_code,
                        1
                );
                if (!$new_function_code) return $this->error('add_to_file', 'Error while injecting code');
                if ($new_function_code == $old_function_code) return $this->error('add_to_file', 'Nothing changed');

                $file_code = substr_replace($file_code, $new_function_code, 0);
                //$file_code = substr_replace($file_code, $new_function_code,$hf_position + strlen($find_function) ,0);
                if (!@file_put_contents($file_path, $file_code)) return $this->error('add_to_file', 'Could not save changes');

                return true;
        }
        protected function error($method, $msg, $return = false)
        {
                $this->errors[] = array(
                        'method' => $method,
                        'msg' => $msg
                );

                return $return;
        }
}
