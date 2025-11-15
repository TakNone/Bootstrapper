# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 216

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
			user_id : -1020142837313328359,
			mutual : true,
		),
	),
	saved_count : 58,
	users : array(
		$client->userEmpty(
			id : 9000075594725296578,
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
			id : -3112582415257498966,
			access_hash : 1986600577672583683,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'd1UxB7FfvAoEbSni',
					reason : 'rQB5T8tLUcj4xKCb',
					text : 'u5ZxPHwi4lD2XE3s',
				),
			),
			bot_inline_placeholder : 'we16MHRumFtqh4IE',
			lang_code : 'JZkdOYrqLPybH78a',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 94,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 8692227246103941784,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : 8981027767246388745,
			),
			bot_active_users : 62,
			bot_verification_icon : -1346761528670311563,
			send_paid_messages_stars : 3566499028954499908,
		),
	),
);
```