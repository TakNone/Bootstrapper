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
			contact_id : -7435224475810541426,
			birthday : $client->birthday(
				day : 91,
				month : 92,
				year : 41,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -6959726128288079404,
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
			id : 40471072148901256,
			access_hash : -7272588254901515286,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bvZekTnONyIcS0pz',
					reason : 'cCkEKDVr2hULfGTg',
					text : 'sYN8zp3unkmD2AC7',
				),
			),
			bot_inline_placeholder : 'jnGe10alsKtcMVgF',
			lang_code : 'S8oYN47GfOdnmqMD',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 35,
				background_emoji_id : 7535712541787949279,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 3131878962892231169,
			),
			bot_active_users : 96,
			bot_verification_icon : -6980357946564584077,
			send_paid_messages_stars : 5747318202731609213,
		),
	),
);
```