# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 229

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
			contact_id : 4891041623214466331,
			birthday : $client->birthday(
				day : 82,
				month : 59,
				year : 32,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8270208249552485885,
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
			id : 8199459610701928563,
			access_hash : 519975570580827091,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3xiqbUQYLDhaKc6I',
					reason : 'hEB940Ww2m3AfRIi',
					text : 'u7Ue3Z8KEJohPtVv',
				),
			),
			bot_inline_placeholder : '8bnSOztiJ9Vpwdx7',
			lang_code : 'mSZe9kTqiG1E0wWl',
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
				max_id : 53,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 7450918277220282151,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : 234322035909372758,
			),
			bot_active_users : 79,
			bot_verification_icon : -537533580213026353,
			send_paid_messages_stars : 3716427244225619534,
			linked_community_id : 6672491869805738499,
		),
	),
);
```