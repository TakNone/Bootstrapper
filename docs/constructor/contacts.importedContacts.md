# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 233

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
			user_id : 1646830889922157988,
			client_id : -5343141104339557083,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 5555844751404866571,
			importers : 34,
		),
	),
	retry_contacts : array(4266505282380748126),
	users : array(
		$client->userEmpty(
			id : -7538252836322789773,
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
			bot_forum_sidebar : true,
			id : 5214863167321438325,
			access_hash : 8003170905170295777,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Y3ItlqRLrdGhvcWw',
					reason : 'YNKnZ7BftHsCQGax',
					text : 'c4ub72yqpWgoM9Ls',
				),
			),
			bot_inline_placeholder : '9eQzNAscb87CDOtL',
			lang_code : '7OIF1BrC60ZcsPEH',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 55,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 3760352618260793754,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -3634575856337644302,
			),
			bot_active_users : 9,
			bot_verification_icon : 6715078725622067862,
			send_paid_messages_stars : 2309518325699249367,
			linked_community_id : -1868833705298965117,
		),
	),
);
```