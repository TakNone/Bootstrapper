# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 225

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
			user_id : -4013560592472349982,
			client_id : 6987267755485176518,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -9123044721145507049,
			importers : 16,
		),
	),
	retry_contacts : array(-7723024490296091692),
	users : array(
		$client->userEmpty(
			id : 865160185466833763,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : 5365536554878349955,
			access_hash : 1887554272189055839,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vQ5WKBx2Of4EULVs',
					reason : 'JdKiNwbgaHDp4S51',
					text : '4pgDT1KSxPs6Idal',
				),
			),
			bot_inline_placeholder : 'PFsqHBrxNim42fUY',
			lang_code : 'TqdbnOmFzHVYwyIJ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 23,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -1347084544422581126,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 230358814762680803,
			),
			bot_active_users : 100,
			bot_verification_icon : -5434748533810974958,
			send_paid_messages_stars : -5794419966036117583,
		),
	),
);
```