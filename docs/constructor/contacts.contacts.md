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
			user_id : 4183105445673857722,
			mutual : false,
		),
	),
	saved_count : 77,
	users : array(
		$client->userEmpty(
			id : 953636709456598804,
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
			id : 1727275117989842821,
			access_hash : 1711825109921881118,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GzKYJLQsVR4jptZu',
					reason : 'gym3vUIXozWZTGBF',
					text : '6KFluaGkyPmsQ2IZ',
				),
			),
			bot_inline_placeholder : 'S3q65Ioni0pRXZQF',
			lang_code : 'dA5MrQJb6YCqLIex',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 63,
			color : $client->peerColor(
				color : 82,
				background_emoji_id : -2644846016496098557,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 1058999396653896387,
			),
			bot_active_users : 33,
			bot_verification_icon : -6243785612039559767,
			send_paid_messages_stars : 1423092733411826774,
		),
	),
);
```