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
			user_id : 5152033469616498659,
			mutual : false,
		),
	),
	saved_count : 94,
	users : array(
		$client->userEmpty(
			id : -3481494163083668728,
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
			id : -6533083405969953829,
			access_hash : -2495427178820241270,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'j7yCNbD5WgZ3dYnB',
					reason : 'VaUZmlg5BAN1sS94',
					text : 'P2zSauqXCvKlfgZT',
				),
			),
			bot_inline_placeholder : 'HlkbUNezE1F7COTD',
			lang_code : 'Ld8PU9jJEwYrZxAh',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 100,
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -5570359338425566145,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -1095041121137593875,
			),
			bot_active_users : 45,
			bot_verification_icon : 1000661940039350460,
			send_paid_messages_stars : 6315483215322574406,
		),
	),
);
```