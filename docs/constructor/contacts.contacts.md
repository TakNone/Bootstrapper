# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 214

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
			user_id : 3206996575726167410,
			mutual : false,
		),
	),
	saved_count : 8,
	users : array(
		$client->userEmpty(
			id : 645573342409174451,
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
			id : -464627474694663018,
			access_hash : 102173852719904115,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6lQO427NhyfbPgei',
					reason : 'TuVkgPFvLrjoJ1SQ',
					text : 'I9dQVCYb4LU56wAu',
				),
			),
			bot_inline_placeholder : 'QhfeJuEGFnBcaRNZ',
			lang_code : 'SgAOb35xpYwelJ7s',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 23,
			color : $client->peerColor(
				color : 79,
				background_emoji_id : -1025020403197418244,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 2005926351453244407,
			),
			bot_active_users : 45,
			bot_verification_icon : 725904182677198709,
			send_paid_messages_stars : -4926999574023931965,
		),
	),
);
```