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
			user_id : 6611931083123191138,
			mutual : true,
		),
	),
	saved_count : 95,
	users : array(
		$client->userEmpty(
			id : 79765862702913196,
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
			id : -938245868098621344,
			access_hash : 1049361469311786007,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'orYUvMy1e30cgDOk',
					reason : 'rAzQBDxO6ymdcl7e',
					text : 'WnymsSrFLiz870MV',
				),
			),
			bot_inline_placeholder : 'VNnd6AIxtEUeHYzp',
			lang_code : 'c5gGKLIwdDV8UmqR',
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
				max_id : 74,
			),
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -6933057351156447295,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -3060303872280844620,
			),
			bot_active_users : 4,
			bot_verification_icon : -6496104584134201802,
			send_paid_messages_stars : -5668272530998378839,
		),
	),
);
```