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
			user_id : 2402913893825898342,
			client_id : -6270593904841968678,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 1313603433552579839,
			importers : 95,
		),
	),
	retry_contacts : array(4389096367019196412),
	users : array(
		$client->userEmpty(
			id : 3625452985595583172,
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
			id : -9090374258067753010,
			access_hash : -4699863020141999285,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'chj490GOyg8zxUw1',
					reason : 'FyxignvjZwTINHJD',
					text : 'JM3gny5RtHh4A81a',
				),
			),
			bot_inline_placeholder : 'JZSqaUA7CrNEndLl',
			lang_code : 'esZW2L6pE8wxzU3o',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -6653088333445693614,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 7756752448003020398,
			),
			bot_active_users : 5,
			bot_verification_icon : 3337811925085171704,
			send_paid_messages_stars : 4028298179447383303,
		),
	),
);
```