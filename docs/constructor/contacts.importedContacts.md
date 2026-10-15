# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 229

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
			user_id : -8822899428484486449,
			client_id : 5723456726067143489,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -4736471236146213679,
			importers : 66,
		),
	),
	retry_contacts : array(1214250711759593162),
	users : array(
		$client->userEmpty(
			id : -1099898630151092950,
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
			id : -6541653420444489950,
			access_hash : -2173155901944977764,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PHf3zEZLdtBcUunD',
					reason : 'uBei5DVpMtNFwEab',
					text : 'mKl76cfhHRiBe4dg',
				),
			),
			bot_inline_placeholder : 'XynEd3GAvtuogRBr',
			lang_code : 'r4FZpQfIbaoRy61v',
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
				max_id : 53,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : 6663260284205652119,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -5030277487663682169,
			),
			bot_active_users : 40,
			bot_verification_icon : -2636150171794213713,
			send_paid_messages_stars : -5837879836953482548,
			linked_community_id : 3727632634301572454,
		),
	),
);
```