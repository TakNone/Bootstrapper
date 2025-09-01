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
			user_id : 7292880710665584519,
			client_id : 2218299839586018382,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 8340182920835038394,
			importers : 29,
		),
	),
	retry_contacts : array(-8399177639104649568),
	users : array(
		$client->userEmpty(
			id : -4806829106018883339,
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
			id : -2353756409366972748,
			access_hash : -7011643840923180200,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BMkgShbEVspHdZYi',
					reason : 'OAmTcEJpIsbGftrq',
					text : '2KNcTbUumePpsCni',
				),
			),
			bot_inline_placeholder : 'OIY3V8a5gFXK4uPA',
			lang_code : 'voqw0KG5MgNBjn49',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 81,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -8674865901492490098,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -5056293698166213864,
			),
			bot_active_users : 93,
			bot_verification_icon : -389686551161748004,
			send_paid_messages_stars : -1522901409350925239,
		),
	),
);
```