<?php
ini_set('display_startup_errors', true);
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

define('CRMLDNRS', 'COM');
define('VERTION', 'XYZ');
define('BUDROMA', 'COM');
define('USID', 'STORE');
define('YTBE', 'LINK');

define('INI', '/');
define('ONT', '.');
define('ISI', ',');
define('ASI', ':');
define('ASP', ';');
define('EQL', '=');
define('EMT', ' ');

$radix = new class(__FILE__) extends SplFileInfo {
    private ArrayObject $tense;

    public function php(SplFileInfo $file_info)
    {
        return require($file_info->getRealPath());
    }

    public function load(string $class_name)
    {
        $tense = mb_split(ISI, spl_autoload_extensions(), -1);
        if($tense !== false)
        {
            do
            {
                $extense = array_shift($tense);
                if(is_null($extense) === false)
                {
                    $file_name = $class_name . $extense;
                    $file_info = new SplFileInfo($file_name);
                    if($file_info->isFile())
                    {
                        $extension = $file_info->getExtension();
                        if(method_exists($this, $extension))
                        {
                            return $this->$extension($file_info);
                        }
                    }
                    else
                    {
                        $file_path = mime_content_type($this->getRealPath());
                        $file_info = new SplFileInfo(join(INI, [
                            $this->getPath(),
                            $file_path,
                            $file_name
                        ]));
                        if($file_info->isFile())
                        {
                            ob_start();
                            $file_object = $file_info->openFile('r', false, null);
                            $file_object->rewind();
                            $file_object->fpassthru();
                            $contents = ob_get_clean();
                            $file_evaluation = eval($contents);
                            return $file_evaluation;
                        }
                    }
                }
            }
            while(empty($tense) === false);
        }
    }

    public function register_autoload()
    {
        spl_autoload_register([
            $this,
            'load'
        ]);
    }

    public function register_extension(SplFileInfo $file_info)
    {
        // Let tense be a file loadings extensible name.
        $tense = $file_info->getExtension();
        // Assert unencountered extensible.
        if(isset($this->tense->$tense) === false)
        {
            // Let extension list be empty.
            spl_autoload_extensions('');
            // Let tense be extended uniquely.
            $this->tense->append($tense);
            // Let tense be iterated.
            $iterator = $this->tense->getIterator();
            // Be kind, rewind.
            $iterator->rewind();
            do
            {
                // Let tense be an item of a property.
                $tense = $iterator->current();
                // Let extense be a strung list of tense items.
                $extense = spl_autoload_extensions();
                // Let a tense item be strung infinitely.
                $extense = join(ISI . ONT, [
                    $extense,
                    $tense
                ]);
                // Assert an extense is strung.
                spl_autoload_extensions($extense);
                $iterator->next();
            }
            while($iterator->valid());
        }
    }

    public function __construct(string $file_name)
    {
        parent::__construct($file_name);
        $this->tense = new ArrayObject();
        $this->tense->setFlags(ArrayObject::ARRAY_AS_PROPS);
        $this->register_extension($this);
        $this->register_autoload();
        new configure('application/json/configure');
        $locale = new locale();
        $route = new route();
        echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);
        out::put();
    }

    public function __destruct()
    {
        out::get();
    }
};

/*
*   Header & HTTP, Dynamic Global, Server Management
*/
/*
*   Define Constants
*/

/*
*   Onloading & Initialization
*/

/*
*   Configuration
*/
//

/*
*   User Session Management
*/

/*
*   File System, Input, Cache, Compression, Output
*/

//https://ftp.gnu.org/gnu/aspell/dict/0index.html

//class zero

//mb ob stuff
//ob_start("mb_output_handler");
//header("Content-Type: text/html; charset=" . mb_preferred_mime_name(LANGSET));

//$seed = new seed();
//$radix = new radix();


/*
*   Header & HTTP, Dynamic Global, Server Management
*/
/*
*   Define Constants
*/

/*
*   Onloading & Initialization
*/

/*
*   Configuration
*/
//

/*
*   User Session Management
*/

/*
*   File System, Input, Cache, Compression, Output
*/

//https://ftp.gnu.org/gnu/aspell/dict/0index.html

//class zero

//mb ob stuff
//ob_start("mb_output_handler");
//header("Content-Type: text/html; charset=" . mb_preferred_mime_name(LANGSET));

//$seed = new seed();
//$radix = new radix();