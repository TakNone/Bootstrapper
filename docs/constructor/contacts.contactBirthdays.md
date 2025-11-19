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
			contact_id : 6727005725160538333,
			birthday : $client->birthday(
				day : 9,
				month : 74,
				year : 68,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4778154563443089919,
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
			id : -8273753388292652096,
			access_hash : -528231480287755943,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oT715mac2Qehsxu0',
					reason : 'xe9dquUjCF6VzQvH',
					text : 'tzKLEsAr9hQY5W6o',
				),
			),
			bot_inline_placeholder : 'g0763hYK4nwuOtU2',
			lang_code : 'hpXKBHScdaQ76CsI',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 4993535348344014084,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 1546094976906845859,
			),
			bot_active_users : 67,
			bot_verification_icon : -5218984509824825002,
			send_paid_messages_stars : 534961120577041851,
		),
	),
);
```