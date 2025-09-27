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
			user_id : -3043910879532679037,
			client_id : -4304377258733171485,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -4093814897689664911,
			importers : 59,
		),
	),
	retry_contacts : array(-5553857768182342280),
	users : array(
		$client->userEmpty(
			id : -586323957645277274,
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
			id : -8561813162824193633,
			access_hash : 6339850086491196656,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yuoNfP4gL62hUCm9',
					reason : 'O2KqUPAmthZi8y1N',
					text : 'XhboGaxil381zSLY',
				),
			),
			bot_inline_placeholder : 'U19mIGAY8fH6nxcN',
			lang_code : '9oi4d2El1pDnsk0T',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 99,
			color : $client->peerColor(
				color : 76,
				background_emoji_id : 9049707512932817697,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 6471563492733143621,
			),
			bot_active_users : 9,
			bot_verification_icon : -4140145370813383528,
			send_paid_messages_stars : -8811043860316037791,
		),
	),
);
```