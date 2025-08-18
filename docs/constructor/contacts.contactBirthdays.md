# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 211

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
			contact_id : 6174142587219727510,
			birthday : $client->birthday(
				day : 49,
				month : 86,
				year : 36,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4036460237891284982,
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
			id : 9219304613260106622,
			access_hash : 1851316998375319492,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fj6ADKhJtyUEFsVk',
					reason : 'q87hjJbQ4F1MGr29',
					text : '2Yk9LGR5XSFwdjMl',
				),
			),
			bot_inline_placeholder : 'sFgCW7UOqpARGoZd',
			lang_code : 'aX7nJ2ZCxYp9bhtO',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -3246928439676429774,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 5480701329811968311,
			),
			bot_active_users : 99,
			bot_verification_icon : -5969431836714918929,
			send_paid_messages_stars : -3913717216462786995,
		),
	),
);
```