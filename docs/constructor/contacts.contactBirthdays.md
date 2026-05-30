# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 225

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
			contact_id : 5813231369014823972,
			birthday : $client->birthday(
				day : 63,
				month : 22,
				year : 23,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4454269264424740996,
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
			id : 443805635278133990,
			access_hash : 6059203723277730165,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dPa5n6pStrjyocC1',
					reason : 'nHKpM8TOjJQ5NasR',
					text : 'A9NxpDyBsq5b2iuU',
				),
			),
			bot_inline_placeholder : 'lOdXAs2hLPj613vu',
			lang_code : '9Qg1Bzn2jX8ovbKi',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 97,
				background_emoji_id : -6490385617854742676,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : -5100338848612358322,
			),
			bot_active_users : 62,
			bot_verification_icon : -3860363519353289946,
			send_paid_messages_stars : -2414006561291304218,
		),
	),
);
```