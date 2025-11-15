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
			contact_id : -5474249646064827271,
			birthday : $client->birthday(
				day : 7,
				month : 72,
				year : 17,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8591855488613905494,
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
			id : -3767739354177680802,
			access_hash : -6248621861995097303,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1FL02eDN7CucqQz6',
					reason : 'Bk86R7I1eYmpADcn',
					text : 'PwK3e1NkLbhZSpxQ',
				),
			),
			bot_inline_placeholder : 'fLqFb8ypEnBGaNtH',
			lang_code : 'p3hEuerqo6M2j7Gd',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : 5664319854764751379,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -4331557685984432373,
			),
			bot_active_users : 31,
			bot_verification_icon : 1284399752102950744,
			send_paid_messages_stars : -5245146789509983664,
		),
	),
);
```