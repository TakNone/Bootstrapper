# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 211

```tl
contacts.contacts#eae87e42 contacts:Vector<Contact> saved_count:int users:Vector<User> = contacts.Contacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>contacts</mark> | [`Vector<Contact>`](type/Contact) | Contact list |
| <mark>saved_count</mark> | [`int`](type/int) | Number of contacts that were saved successfully |
| <mark>users</mark> | [`Vector<User>`](type/User) | User list |

---

## Type

[contacts.Contacts](type/contacts.Contacts)

---

## Example

```php
$contactsContacts = $client->contacts->contacts(
	contacts : array(
		$client->contact(
			user_id : 2303086536994603434,
			mutual : true,
		),
	),
	saved_count : 82,
	users : array(
		$client->userEmpty(
			id : -2629529529326365742,
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
			id : 6123729858032112585,
			access_hash : -8788291094823112151,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VMGpvgh82dTD5msO',
					reason : '0Raq8jtLsklTCgYm',
					text : 'yWwTOIbAUdHPl8V9',
				),
			),
			bot_inline_placeholder : 'qCmwkoUdthl4Bjif',
			lang_code : 'Xiwn7fgAEDrbFBMs',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 81,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -5302712179330375696,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -1654722764940675602,
			),
			bot_active_users : 98,
			bot_verification_icon : -1033909797205037129,
			send_paid_messages_stars : -3323816722867480660,
		),
	),
);
```