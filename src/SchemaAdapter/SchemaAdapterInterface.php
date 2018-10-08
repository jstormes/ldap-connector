<?php
/**
 * Created by PhpStorm.
 * User: jstormes
 * Date: 10/5/2018
 * Time: 1:29 PM
 */

namespace JStormes\Ldap\SchemaAdapter;


use JStormes\Ldap\Connector\ConnectorInterface;
use JStormes\Ldap\Entity\UserEntity;

interface SchemaAdapterInterface
{
    public function __construct($serverString);

    /**
     * Get the DNS name or IP address of the LDAP server;
     *
     * @return mixed
     */
    public function getServer();

    /**
     * Get the RDN syntax for the User Name to connect to the LDAP server.
     *
     * @param $username
     * @return mixed
     */
    public function getRdn($username);

    /**
     * Get the Raw user details from the LDAP server.
     *
     * @param ConnectorInterface $connector
     * @return mixed
     */
    public function getUserDetails(ConnectorInterface $connector);

    /**
     * Hydrate the Raw user details into a UserEntity.
     *
     * @param UserEntity $userEntity
     * @param array $results
     * @return mixed
     */
    public function hydrateUserEntity(UserEntity $userEntity, array $results);

}