# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 216

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
			contact_id : -3573089917764145434,
			birthday : $client->birthday(
				day : 83,
				month : 78,
				year : 86,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4934149795373326944,
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
			id : 2044801074307266370,
			access_hash : -8200410141267482741,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Qx4MgKFJBGn7Nhas',
					reason : '7EaIJOcK2lCDmVxw',
					text : 'HmWCMU7Q9S4Kv52x',
				),
			),
			bot_inline_placeholder : '25PlXTcrVt7gY6hK',
			lang_code : 'IUFz4sXWmbrL8ZxM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 100,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 5583380719959925964,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -7393491220278155968,
			),
			bot_active_users : 32,
			bot_verification_icon : 1656759405607383403,
			send_paid_messages_stars : 7993685251191944924,
		),
	),
);
```