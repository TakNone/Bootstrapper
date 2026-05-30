# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 222

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
			user_id : -6466198408420147,
			mutual : false,
		),
	),
	saved_count : 0,
	users : array(
		$client->userEmpty(
			id : 5402024013651166513,
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
			id : 7573267849022284828,
			access_hash : -2412883365379036054,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 69,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'S1DCYwK79QhRLcfN',
					reason : 'ubl35J64BM80Q1zU',
					text : 'QnhB2TsKNSYtyP1R',
				),
			),
			bot_inline_placeholder : 'yQpD82WKh7sNcuxz',
			lang_code : 'WAo75Fk1VIHwhxRP',
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
				color : 53,
				background_emoji_id : 3891081522056521509,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -2403300173013630189,
			),
			bot_active_users : 82,
			bot_verification_icon : 3998636317277605651,
			send_paid_messages_stars : 2949460427595746663,
		),
	),
);
```