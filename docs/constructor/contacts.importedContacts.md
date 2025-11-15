# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 216

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
			user_id : 1129060219386964817,
			client_id : 7882192376606629666,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 8869529557540416079,
			importers : 19,
		),
	),
	retry_contacts : array(6874163256696128879),
	users : array(
		$client->userEmpty(
			id : -6399267224056023945,
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
			bot_forum_view : true,
			id : 4984153998410936075,
			access_hash : -7015847058645850068,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DhrnjXgkKvPAFUYi',
					reason : '1OEKa97pSHb3zGvy',
					text : '9RLlzt2Sx3faENTn',
				),
			),
			bot_inline_placeholder : 'fRZMrTP9FsAI2yjz',
			lang_code : 'GvskIS0hwgRTnpUr',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 85,
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 1943375733401000830,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -6766888391056555781,
			),
			bot_active_users : 38,
			bot_verification_icon : 5251182154006368970,
			send_paid_messages_stars : -3164035179358913917,
		),
	),
);
```