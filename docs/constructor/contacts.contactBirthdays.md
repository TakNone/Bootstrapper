# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 218

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
			contact_id : -4881027622834505062,
			birthday : $client->birthday(
				day : 99,
				month : 77,
				year : 17,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1586434680963814476,
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
			id : 6271342508101562013,
			access_hash : 5918439061766222218,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YfZH0iMFqsXJvrkt',
					reason : 'OBFQ4qsAkhDCtYxp',
					text : 'H5WzsxF7kgZKODja',
				),
			),
			bot_inline_placeholder : '8xKR6o4tLifyjMaA',
			lang_code : 'WC9EkZ6xFMbT13Kg',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : 2497492409875983905,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 6004377766340984873,
			),
			bot_active_users : 66,
			bot_verification_icon : -1115995050212562416,
			send_paid_messages_stars : -1371512536064694857,
		),
	),
);
```