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
			contact_id : 9216173497486426343,
			birthday : $client->birthday(
				day : 60,
				month : 77,
				year : 43,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -5607153290281603234,
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
			id : 1886788060613270740,
			access_hash : -7304602957895307988,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hYAqJVP28BKtFrpH',
					reason : 'bUOvBd0ykJNX8HY6',
					text : 'uBf4pXo8WzEbv1Hj',
				),
			),
			bot_inline_placeholder : 'pK47wFAigJ9s3ZDq',
			lang_code : 'mFyJW5hBHj6Ziv4a',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 2543941557180346778,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : 8691029020777955588,
			),
			bot_active_users : 20,
			bot_verification_icon : -6480599103263532040,
			send_paid_messages_stars : -2026122861448052517,
		),
	),
);
```