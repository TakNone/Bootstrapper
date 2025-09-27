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
			contact_id : -8678620906457209929,
			birthday : $client->birthday(
				day : 3,
				month : 66,
				year : 24,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 9051812406565615683,
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
			id : -6548992662904562299,
			access_hash : 5109056625915413799,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ANbF6rXU71uRJQpn',
					reason : 'pO32FYXUA7tZwaEc',
					text : 'Av94yRUZLY6eolsJ',
				),
			),
			bot_inline_placeholder : 'YgCBl1jpzGniqAKy',
			lang_code : 'Q7a1yEhOVltevzqR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 24,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -3699473193440778449,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -5593298955137317961,
			),
			bot_active_users : 90,
			bot_verification_icon : -9209652381965861859,
			send_paid_messages_stars : 8780309732265698589,
		),
	),
);
```