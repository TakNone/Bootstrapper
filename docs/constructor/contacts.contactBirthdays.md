# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 227

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
			contact_id : -7227525373661335019,
			birthday : $client->birthday(
				day : 84,
				month : 90,
				year : 38,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2062918485943071326,
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
			id : -6627060662812374079,
			access_hash : -2159170518330997816,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PqZEFOscNwH72nKi',
					reason : 'Lo2KUZJiCW4QPum0',
					text : 'wj15mzEbikfK2Iu8',
				),
			),
			bot_inline_placeholder : '0ybtS5mn9oMwiKBR',
			lang_code : 'ko0beaqLlUtTmIyP',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 3809951890790481964,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : 3864685903090803401,
			),
			bot_active_users : 19,
			bot_verification_icon : 9110366580189526142,
			send_paid_messages_stars : -1980111717951719664,
		),
	),
);
```