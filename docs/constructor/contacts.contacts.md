# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 227

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
			user_id : 221575010037470196,
			mutual : true,
		),
	),
	saved_count : 64,
	users : array(
		$client->userEmpty(
			id : -7361178106658693617,
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
			id : -3564730711124437113,
			access_hash : -9008657227672350658,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DJGXvVOr0jpZKuWk',
					reason : 'xqcX6pI5ksyWTbCr',
					text : 'VYEekM1mTdXj0Kpt',
				),
			),
			bot_inline_placeholder : 'KwXfcBVS5zH1ZtNe',
			lang_code : 'rwSe9Hfi2Yd1mhUs',
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
				color : 97,
				background_emoji_id : 8309390419274150727,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -6380895022084844278,
			),
			bot_active_users : 67,
			bot_verification_icon : 2645138278201034152,
			send_paid_messages_stars : -1626474109924849346,
		),
	),
);
```