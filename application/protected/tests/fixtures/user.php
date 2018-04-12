<?php

use Sil\DevPortal\models\User;

return array(
    'user1'  => array(
        'user_id'       => 1,
        'email'         => 'test@sil.org',
        'first_name'    => 'Tommy',
        'last_name'     => 'Tester',
        'display_name'  => 'Tommy_Tester',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'user2'  => array(
        'user_id'       => 2,
        'email'         => 'test2@sil.org',
        'first_name'    => 'Test',
        'last_name'     => 'User',
        'display_name'  => 'Test User',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithNoPendingKeys' => array(
        'user_id'       => 3,
        'email'         => 'userWithNoPendingKeys@jaars.net',
        'first_name'    => 'With No',
        'last_name'     => 'Pending Keys',
        'display_name'  => '',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithApprovedKey' => array(
        'user_id'       => 4,
        'email'         => 'userWithApprovedKey@jaars.net',
        'first_name'    => 'With Approved',
        'last_name'     => 'Key',
        'display_name'  => 'With Approved Key',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithDeniedKey' => array(
        'user_id'       => 5,
        'email'         => 'userWithDeniedKey@jaars.net',
        'first_name'    => 'With Denied',
        'last_name'     => 'Key',
        'display_name'  => 'With Denied Key',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithPendingKey' => array(
        'user_id'       => 6,
        'email'         => 'userWithPendingKey@jaars.net',
        'first_name'    => 'With Pending',
        'last_name'     => 'Key',
        'display_name'  => 'With Pending Key',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithRevokedKey' => array(
        'user_id'       => 7,
        'email'         => 'userWithRevokedKey@jaars.net',
        'first_name'    => 'With Revoked',
        'last_name'     => 'Key',
        'display_name'  => 'With Revoked Key',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userThatOwnsASingleApi' => array(
        'user_id'       => 8,
        'email'         => 'userThatOwnsASingleApi@jaars.net',
        'first_name'    => 'That Owns',
        'last_name'     => 'A Single API',
        'display_name'  => 'That Owns A Single API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_ADMIN,
        'auth_provider' => 'SAML',
    ),
    'userWithRoleOfUser' => array(
        'user_id'       => 9,
        'email'         => 'userWithRoleOfUser@jaars.net',
        'first_name'    => 'With Role',
        'last_name'     => 'Of User',
        'display_name'  => 'With Role Of User',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithFirstKeyForApiWithTwoKeys' => array(
        'user_id'       => 10,
        'email'         => 'userWithFirstKeyForApiWithTwoKeys@jaars.net',
        'first_name'    => 'With First Key',
        'last_name'     => 'For API With Two Keys',
        'display_name'  => 'With 1st for API with 2',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithSecondKeyForApiWithTwoKeys' => array(
        'user_id'       => 11,
        'email'         => 'userWithSecondKeyForApiWithTwoKeys@jaars.net',
        'first_name'    => 'With Second Key',
        'last_name'     => 'For API With Two Keys',
        'display_name'  => 'With 2nd for API with 2',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWith1stPKForApiWithTwoPendingKeys' => array(
        'user_id'       => 12,
        'email'         => 'userWith1stPKRForApiWithTwoPendingKeys@jaars.net',
        'first_name'    => 'With 1st Pending Key For',
        'last_name'     => 'API With 2 Pending Keys',
        'display_name'  => 'With 1st PK for API with 2',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWith2ndPKForApiWithTwoPendingKeys' => array(
        'user_id'       => 13,
        'email'         => 'userWith2ndPKForApiWithTwoPendingKeys@jaars.net',
        'first_name'    => 'With 2nd Pending Key For',
        'last_name'     => 'API With 2 Pending Keys',
        'display_name'  => 'With 2nd PK for API with 2',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userThatDoesNotOwnAnyApis' => array(
        'user_id'       => 14,
        'email'         => 'userThatDoesNotOwnAnyApis@jaars.net',
        'first_name'    => 'That Does Not',
        'last_name'     => 'Own Any APIs',
        'display_name'  => 'That Does Not Own Any APIs',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_OWNER,
        'auth_provider' => 'SAML',
    ),
    'userWithRoleOfAdmin' => array(
        'user_id'       => 15,
        'email'         => 'userWithRoleOfAdmin@jaars.net',
        'first_name'    => 'With Role',
        'last_name'     => 'Of Admin',
        'display_name'  => 'With Role Of Admin',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_ADMIN,
        'auth_provider' => 'SAML',
    ),
    'userWithRoleOfOwner' => array(
        'user_id'       => 17,
        'email'         => 'userWithRoleOfOwner@jaars.net',
        'first_name'    => 'With Role',
        'last_name'     => 'Of Owner',
        'display_name'  => 'With Role Of Owner',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_OWNER,
        'auth_provider' => 'SAML',
    ),
    'user18' => array(
        'user_id'       => 18,
        'email'         => 'user18@jaars.net',
        'first_name'    => 'Is The Owner',
        'last_name'     => 'Of API 12',
        'display_name'  => 'Is The Owner Of API 12',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_OWNER,
        'auth_provider' => 'SAML',
    ),
    'userWithKeyToApiOwnedByUser18' => array(
        'user_id'       => 19,
        'email'         => 'userWithKeyToApiOwnedByUser18@jaars.net',
        'first_name'    => 'With Key',
        'last_name'     => 'To API Owned By User 18',
        'display_name'  => 'With Key To API Owned By User 18',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithRoleOfAdminButNoKeys' => array(
        'user_id'       => 20,
        'email'         => 'userWithRoleOfAdminButNoKeys@jaars.net',
        'first_name'    => 'With Role Of Admin',
        'last_name'     => 'But No Keys',
        'display_name'  => 'With Role Of Admin But No Keys',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_ADMIN,
        'auth_provider' => 'SAML',
    ),
    'ownerThatDoesNotOwnAnyApisOrKeys' => array(
        'user_id'       => 21,
        'email'         => 'ownerThatDoesNotOwnAnyApisOrKeys@jaars.net',
        'first_name'    => 'Owner That Does Not Own',
        'last_name'     => 'Any APIs Or Keys',
        'display_name'  => 'Owner That Does Not Own Any APIs Or Keys',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_OWNER,
        'auth_provider' => 'SAML',
    ),
    'userWithPendingKeyForApiOwnedByUser18' => array(
        'user_id'       => 22,
        'email'         => 'userWithPendingKeyForApiOwnedByUser18@jaars.net',
        'first_name'    => 'With Pending Key',
        'last_name'     => 'For API Owned By User 18',
        'display_name'  => 'With Pending Key For API Owned By User 18',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userFromSAML' => array(
        'user_id'       => 23,
        'email'         => 'userFromSAML@jaars.net',
        'first_name'    => 'User From',
        'last_name'     => 'SAML',
        'display_name'  => 'User From SAML',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
        'auth_provider_user_identifier' => 'fake-identifier-1462913079',
    ),
    'userFromTrustedAuthProviderLackingIdentifier' => array(
        'user_id'       => 24,
        'email'         => 'userFromTrustedAuthProviderLackingIdentifier@jaars.net',
        'first_name'    => 'User From Trusted Auth Provider',
        'last_name'     => 'Lacking Identifier',
        'display_name'  => 'User From Trusted Auth Provider Lacking Identifier',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
        'auth_provider_user_identifier' => null,
    ),
    'userFromOtherAuthProviderLackingIdentifier' => array(
        'user_id'       => 25,
        'email'         => 'userFromOtherAuthProviderLackingIdentifier@jaars.net',
        'first_name'    => 'User From Other Auth Provider',
        'last_name'     => 'Lacking Identifier',
        'display_name'  => 'User From Other Auth Provider Lacking Identifier',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
    ),
    'userIndividuallyInvitedToSeeApi' => array(
        'user_id'       => 26,
        'email'         => 'userIndividuallyInvitedToSeeApi@jaars.net',
        'first_name'    => 'Individually Invited',
        'last_name'     => 'To See API',
        'display_name'  => 'Individually Invited To See API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:10:20',
        'updated'       => '2016-06-07 10:10:20',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
        'verified_nonprofit' => 0,
    ),
    'userNotIndividuallyInvitedToSeeAnyApi' => array(
        'user_id'       => 27,
        'email'         => 'userNotIndividuallyInvitedToSeeAnyApi@jaars.net',
        'first_name'    => 'Not Individually Invited',
        'last_name'     => 'To See Any API',
        'display_name'  => 'Not Individually Invited To See Any API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:42:48',
        'updated'       => '2016-06-07 10:42:48',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
        'verified_nonprofit' => 0,
    ),
    'userWithEmailDomainNotInvitedToSeeAnyApi' => array(
        'user_id'       => 28,
        'email'         => 'userWithEmailDomainNotInvitedToSeeAnyApi@not-invited-domain.example.com',
        'first_name'    => 'With Email Domain',
        'last_name'     => 'Not Invited To See Any API',
        'display_name'  => 'With Email Domain Not Invited To See Any API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 14:15:08',
        'updated'       => '2016-06-07 14:15:08',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
        'verified_nonprofit' => 0,
    ),
    'userWithEmailDomainInvitedToSeeApi' => array(
        'user_id'       => 29,
        'email'         => 'userWithEmailDomainInvitedToSeeApi@invited-domain.example.com',
        'first_name'    => 'Not Individually Invited',
        'last_name'     => 'To See Any API',
        'display_name'  => 'Not Individually Invited To See Any API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 10:42:48',
        'updated'       => '2016-06-07 10:42:48',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
        'verified_nonprofit' => 0,
    ),
    'userNotInvitedToSeeAnyApi' => array(
        'user_id'       => 30,
        'email'         => 'userNotInvitedToSeeAnyApi@not-invited-domain.example.com',
        'first_name'    => 'Not Invited',
        'last_name'     => 'To See Any API',
        'display_name'  => 'Not Invited To See Any API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
        'auth_provider_user_identifier' => null,
        'verified_nonprofit' => 0,
    ),
    'userWithOneApprovedKeyAndTwoPendingKeys' => array(
        'user_id'       => 31,
        'email'         => 'userWithOneApprovedKeyAndTwoPendingKeys@jaars.net',
        'first_name'    => 'With One Approved Key',
        'last_name'     => 'And Two Pending Keys',
        'display_name'  => 'With One Approved Key And Two Pending Keys',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithDeniedKeyForApiOwnedByUser18' => array(
        'user_id'       => 32,
        'email'         => 'userWithDeniedKeyForApiOwnedByUser18@jaars.net',
        'first_name'    => 'With Denied Key',
        'last_name'     => 'For API Owned By User 18',
        'display_name'  => 'With Denied Key For API Owned By User 18',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithRevokedKeyForApiOwnedByUser18' => array(
        'user_id'       => 33,
        'email'         => 'userWithRevokedKeyForApiOwnedByUser18@jaars.net',
        'first_name'    => 'With Revoked Key',
        'last_name'     => 'For API Owned By User 18',
        'display_name'  => 'With Revoked Key For API Owned By User 18',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'firstUserWithKeyDependentOnAvd3' => array(
        'user_id'       => 34,
        'email'         => 'firstUserWithKeyDependentOnAvd@1469472196.example.com',
        'first_name'    => 'First User With',
        'last_name'     => 'Key Dependent On AVD',
        'display_name'  => 'First User With Key Dependent On AVD',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'secondUserWithKeyDependentOnAvd3' => array(
        'user_id'       => 35,
        'email'         => 'secondUserWithKeyDependentOnAvd@1469472196.example.com',
        'first_name'    => 'Second User With',
        'last_name'     => 'Key Dependent On AVD',
        'display_name'  => 'Second User With Key Dependent On AVD',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithKeyNotDependentOnAvd3' => array(
        'user_id'       => 36,
        'email'         => 'userWithKeyNotDependentOnAvd@1469472196.example.com',
        'first_name'    => 'User With',
        'last_name'     => 'Key Not Dependent On AVD',
        'display_name'  => 'User With Key Not Dependent On AVD',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithDeniedKeyRelatedToAvd3' => array(
        'user_id'       => 37,
        'email'         => 'userWithDeniedKeyRelatedToAvd3@1469472196.example.com',
        'first_name'    => 'User With Denied',
        'last_name'     => 'Key Related To AVD',
        'display_name'  => 'User With Denied Key Related To AVD',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'userWithKeyAllowedByTwoApiVisibilityDomains' => array(
        'user_id'       => 38,
        'email'         => 'userWithKeyAllowedByTwoApiVisibilityDomains@two-avds.example.com',
        'first_name'    => 'User With Key Allowed By',
        'last_name'     => 'Two ApiVisibilityDomains',
        'display_name'  => 'User With Key Allowed By Two ApiVisibilityDomains',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'SAML',
    ),
    'normalUserWithNoKeys' => array(
        'user_id'       => 39,
        'email'         => 'normalUserWithNoKeys@jaars.net',
        'first_name'    => 'Normal User With',
        'last_name'     => 'No Keys',
        'display_name'  => 'Normal User With No Keys',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
    ),
    'userWithKeyToCallableTestApi' => array(
        'user_id'       => 40,
        'email'         => 'userWithKeyToCallableTestApi@jaars.net',
        'first_name'    => 'User With Key',
        'last_name'     => 'To Callable Test API',
        'display_name'  => 'User With Key To Callable Test API',
        'status'        => User::STATUS_ACTIVE,
        'created'       => '2016-06-07 15:44:28',
        'updated'       => '2016-06-07 15:44:28',
        'role'          => User::ROLE_USER,
        'auth_provider' => 'Google',
    ),
);
