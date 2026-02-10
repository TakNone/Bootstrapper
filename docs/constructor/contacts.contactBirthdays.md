# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 222

```tl
contacts.contactBirthdays#114ff30d contacts:Vector<ContactBirthday> users:Vector<User> = contacts.ContactBirthdays;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contacts</mark> | [`Vector<ContactBirthday>`](type/ContactBirthday) | Birthday info |
| <mark>users</mark> | [`Vector<User>`](type/User) | User information |

---

## Type

[contacts.ContactBirthdays](type/contacts.ContactBirthdays)

---

## Example

```php
$contactsContactBirthdays = $client->contacts->contactBirthdays(
	contacts : array(
		$client->contactBirthday(
			contact_id : -4194330064216849967,
			birthday : $client->birthday(
				day : 46,
				month : 44,
				year : 79,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 845711231059126851,
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
			id : -1097062535147313028,
			access_hash : -2923301437710313414,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DzRkZIc3NQgmjawM',
					reason : 'vGSoEOj5FA1KHpMP',
					text : 'oJ5ETsqxzb8eg70L',
				),
			),
			bot_inline_placeholder : 'ktv2ZhNi9Vbj0pPD',
			lang_code : 'BxvFf2PqJNhRKYIO',
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
				max_id : 90,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 1946008651433791079,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -119325691429546091,
			),
			bot_active_users : 24,
			bot_verification_icon : -6818863034704082247,
			send_paid_messages_stars : -6445275176682839273,
		),
	),
);
```