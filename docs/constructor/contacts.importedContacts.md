# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 211

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
			user_id : 6876579679947278329,
			client_id : -4812444662181472643,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 6045309133712038259,
			importers : 67,
		),
	),
	retry_contacts : array(-5818886381978098999),
	users : array(
		$client->userEmpty(
			id : -1010296435303275774,
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
			id : 1869285405678340635,
			access_hash : -538720151252159036,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EoYqMzOtRDUHC7WI',
					reason : 'uCj0l8PJL6bK2hd9',
					text : '2Qh8uDECjxN9rXld',
				),
			),
			bot_inline_placeholder : 'UYiFHqZbvEAJrWIj',
			lang_code : 'nwRyoXkHr13OzG06',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 10,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -3022561686905176386,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 4013352016457503920,
			),
			bot_active_users : 17,
			bot_verification_icon : -323000205898969053,
			send_paid_messages_stars : 4917092769269335024,
		),
	),
);
```