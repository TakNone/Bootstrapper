# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 214

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
			contact_id : 195538780508191576,
			birthday : $client->birthday(
				day : 90,
				month : 50,
				year : 81,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7961113468168074818,
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
			id : 1782982740291726361,
			access_hash : 4646090169353476174,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qZgrnx1XUGspVTNw',
					reason : 'eDXCm2MPbHGjuFYt',
					text : 'OUGzBiLIs0gwK1l6',
				),
			),
			bot_inline_placeholder : 'hSGHkKIBTjJ4YFsq',
			lang_code : 'DPRgskVSNLoGIiMT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 3,
				background_emoji_id : 6883323574784123429,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 8434479573897668162,
			),
			bot_active_users : 40,
			bot_verification_icon : 5671902148786988191,
			send_paid_messages_stars : -5383165796949031054,
		),
	),
);
```