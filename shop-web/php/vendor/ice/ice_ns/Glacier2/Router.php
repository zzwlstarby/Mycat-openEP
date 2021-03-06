<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Router.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/Router.php';
    require_once 'Glacier2/Session.php';
    require_once 'Glacier2/PermissionsVerifier.php';
}

namespace Glacier2
{
    if(!class_exists('\\Glacier2\\SessionNotExistException'))
    {
        class SessionNotExistException extends \Ice\UserException
        {
            public function __construct()
            {
            }

            public function ice_name()
            {
                return 'Glacier2::SessionNotExistException';
            }

            public function __toString()
            {
                global $Glacier2__t_SessionNotExistException;
                return IcePHP_stringifyException($this, $Glacier2__t_SessionNotExistException);
            }
        }

        $Glacier2__t_SessionNotExistException = IcePHP_defineException('::Glacier2::SessionNotExistException', '\\Glacier2\\SessionNotExistException', false, null, null);
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\Router'))
    {
        interface Router extends \Ice\Router
        {
            public function getCategoryForClient();
            public function createSession($userId, $password);
            public function createSessionFromSecureConnection();
            public function refreshSession();
            public function destroySession();
            public function getSessionTimeout();
        }

        class RouterPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::Router', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::Router', $facet);
            }
        }

        $Glacier2__t_Router = IcePHP_defineClass('::Glacier2::Router', '\\Glacier2\\Router', -1, true, false, $Ice__t_Object, array($Ice__t_Router), null);

        $Glacier2__t_RouterPrx = IcePHP_defineProxy($Glacier2__t_Router);

        IcePHP_defineOperation($Glacier2__t_Router, 'getCategoryForClient', 2, 1, 0, null, null, array($IcePHP__t_string, false, 0), null);
        IcePHP_defineOperation($Glacier2__t_Router, 'createSession', 0, 0, 2, array(array($IcePHP__t_string, false, 0), array($IcePHP__t_string, false, 0)), null, array($Glacier2__t_SessionPrx, false, 0), array($Glacier2__t_PermissionDeniedException, $Glacier2__t_CannotCreateSessionException));
        IcePHP_defineOperation($Glacier2__t_Router, 'createSessionFromSecureConnection', 0, 0, 2, null, null, array($Glacier2__t_SessionPrx, false, 0), array($Glacier2__t_PermissionDeniedException, $Glacier2__t_CannotCreateSessionException));
        IcePHP_defineOperation($Glacier2__t_Router, 'refreshSession', 0, 0, 0, null, null, null, array($Glacier2__t_SessionNotExistException));
        IcePHP_defineOperation($Glacier2__t_Router, 'destroySession', 0, 0, 0, null, null, null, array($Glacier2__t_SessionNotExistException));
        IcePHP_defineOperation($Glacier2__t_Router, 'getSessionTimeout', 2, 1, 0, null, null, array($IcePHP__t_long, false, 0), null);
    }
}
?>
