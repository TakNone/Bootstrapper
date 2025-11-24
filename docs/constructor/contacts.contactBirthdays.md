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
			contact_id : -3962734991507590209,
			birthday : $client->birthday(
				day : 30,
				month : 26,
				year : 44,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 5919147217353446770,
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
			id : 4358934210572912386,
			access_hash : 8470692083234179956,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'r4zlE7qXAxnTCvH6',
					reason : '8WaOoG3QwbcyjYfl',
					text : 'WyGXPCBh386ZJvEn',
				),
			),
			bot_inline_placeholder : '8NGLpDWl64k9VtE5',
			lang_code : 'Upxzm48AcJe27CyK',
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
				max_id : 65,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 8349973730128429593,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 1037968199034483048,
			),
			bot_active_users : 45,
			bot_verification_icon : 3780529625579507188,
			send_paid_messages_stars : 7380092688287373984,
		),
	),
);
```