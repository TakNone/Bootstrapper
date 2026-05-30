# contacts.contactBirthdays

**Description** : *Birthday information of our contacts*

**Layer** : 222

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
			contact_id : 6996483693331665681,
			birthday : $client->birthday(
				day : 40,
				month : 53,
				year : 98,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1139075168956529994,
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
			id : -4197456961172066759,
			access_hash : -4435788675889156531,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'h2fVF3bcg4z9AaM6',
					reason : 'InPw7x4BUgeiQMCZ',
					text : '8h6BqwIlutWDFJYn',
				),
			),
			bot_inline_placeholder : 'Jw51jYdQ0GCMv3ZB',
			lang_code : 'TmqH2roSi7UJazwl',
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
				max_id : 67,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 9089568533811387523,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 9089196225426542640,
			),
			bot_active_users : 88,
			bot_verification_icon : 2879009613076391360,
			send_paid_messages_stars : 745525671359121965,
		),
	),
);
```