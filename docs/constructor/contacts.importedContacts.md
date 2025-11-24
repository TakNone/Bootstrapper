# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 218

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
			user_id : -130452463580674079,
			client_id : 7843083431766861633,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -2780425331082444783,
			importers : 71,
		),
	),
	retry_contacts : array(2587685344000485576),
	users : array(
		$client->userEmpty(
			id : 6937811755427819305,
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
			id : -2179065769589765841,
			access_hash : -8978473863577847402,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gbF2Cd89VIenyjsh',
					reason : 'q2Wto0pnLucfMmKw',
					text : 'r9nZ7sVxPX5I1mGt',
				),
			),
			bot_inline_placeholder : 'GJbwUjqzE9enLZkM',
			lang_code : 'RbGl35dcIQTtYZP8',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 1,
				background_emoji_id : 8646699677463228973,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 5081940026868429378,
			),
			bot_active_users : 46,
			bot_verification_icon : -1757066592509344835,
			send_paid_messages_stars : -6402598962234862075,
		),
	),
);
```