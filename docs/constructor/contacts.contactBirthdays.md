# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 233

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
			contact_id : -8274390602799478742,
			birthday : $client->birthday(
				day : 69,
				month : 95,
				year : 7,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2573935959898642236,
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
			bot_forum_sidebar : true,
			id : 1686361611905907779,
			access_hash : 2704206397653105967,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BL25WviAHKwob9Sg',
					reason : 'P5mcIsVeKlwizj96',
					text : 'Ea0djJtHTb569Bpc',
				),
			),
			bot_inline_placeholder : '1XnVQBOdANSs8jCf',
			lang_code : 'AK3IxSrdsVp0R2Lk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 43,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 2292491958119860523,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 4395910318431868523,
			),
			bot_active_users : 76,
			bot_verification_icon : 393728879099081669,
			send_paid_messages_stars : -4715518480584875399,
			linked_community_id : -2929509930909903494,
		),
	),
);
```