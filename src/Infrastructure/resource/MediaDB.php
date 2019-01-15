<?php
namespace Infrastructure\Resource;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * AirMediaDB Class exists in the Api\Models namespace
 * A Model interacts with database, and return the results to a Controller
 *
 * @category Model
 */
class MediaDB
{
    public $emMedia;

    /**
     * Connect to database in constructor
     */
    public function __construct()
    {
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(
            [__DIR__ . "./../../core/domain/media/"],
            $isDevMode
        );
        // or if you prefer yaml or XML
        $config = Setup::createXMLMetadataConfiguration(
            [__DIR__ . "./../config/xml/media/"],
            $isDevMode
        );
        //$config = Setup::createYAMLMetadataConfiguration(
        // [__DIR__."/config/yaml"],
        //  $isDevMode
        // );

        // obtaining the entity manager
        $this->emMedia = EntityManager::create(
            ['url' => 'mysql://root:glory@localhost/airMediaDB'],
            $config
        );
        $this->onInit();
    }

    /**
     * OnInit()
     *
     * @return void
     */
    public function onInit()
    {
    }

    /**
     * For Debugging, this class returns the recent sql statement queried
     *
     * @return string
     */
    public function getSQL(): string
    {
        return $this->airMediaDB->sql;
    }

    /**
     * Get Last Inserted ID
     *
     * @return integer
     */
    public function getLastId(): int
    {
        return $this->airMediaDB->postId;
    }
}