# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 214

```tl
contacts.importedContacts#77d01c3b imported:Vector<ImportedContact> popular_invites:Vector<PopularContact> retry_contacts:Vector<long> users:Vector<User> = contacts.ImportedContacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>imported</mark> | [`Vector<ImportedContact>`](type/ImportedContact) | List of successfully imported contacts |
| <mark>popular_invites</mark> | [`Vector<PopularContact>`](type/PopularContact) | Popular contacts |
| <mark>retry_contacts</mark> | [`Vector<long>`](type/long) | List of contact ids that could not be imported due to system limitation and will need to be imported at a later date |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.ImportedContacts](type/contacts.ImportedContacts)

---

## Example

```php
$contactsImportedContacts = $client->contacts->importedContacts(
	imported : array(
		$client->importedContact(
			user_id : -3514588199125738454,
			client_id : -1783577380159057072,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -3073411563058076271,
			importers : 100,
		),
	),
	retry_contacts : array(-985356899571929092),
	users : array(
		$client->userEmpty(
			id : -8331343979107546220,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : -760287760527851781,
			access_hash : 5579013691731363566,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zy5gxrh7Vdu2se8c',
					reason : '0aGVwXkeJzAfpvxO',
					text : 'pIMm2kOaH7FDVtBX',
				),
			),
			bot_inline_placeholder : 'UDNPdF9Qn1RJWl3X',
			lang_code : 'eL1iozCOuFHWQd6j',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 54,
				background_emoji_id : 8605181887482860919,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 7979119509222486917,
			),
			bot_active_users : 98,
			bot_verification_icon : -1569413431480848016,
			send_paid_messages_stars : 5303834540446772140,
		),
	),
);
```