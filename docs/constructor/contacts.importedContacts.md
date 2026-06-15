# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 227

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
			user_id : -3354215528260634699,
			client_id : 8563233884417403836,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 5194885538642215230,
			importers : 18,
		),
	),
	retry_contacts : array(3575866773932829770),
	users : array(
		$client->userEmpty(
			id : 1227416878099296826,
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
			bot_guard : true,
			id : -925348503921831169,
			access_hash : 1718493793315981107,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tGUoqinOV9PyuaHp',
					reason : 'zetpBTyRNEQ7rP6f',
					text : 'Un2qLG4W3HSsgp8c',
				),
			),
			bot_inline_placeholder : 'RytgNO4lbWAqPu9v',
			lang_code : 'QmeLynda2p6HYlJV',
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
				max_id : 30,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -1498848345853662600,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -8082506199871066436,
			),
			bot_active_users : 46,
			bot_verification_icon : 4543935456727723126,
			send_paid_messages_stars : -6672193851019721210,
		),
	),
);
```