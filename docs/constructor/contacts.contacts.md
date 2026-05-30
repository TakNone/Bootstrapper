# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 225

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
			user_id : 5490505075515828158,
			mutual : false,
		),
	),
	saved_count : 95,
	users : array(
		$client->userEmpty(
			id : -2107990259597468121,
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
			id : 8467099957154617886,
			access_hash : -3180694313512662443,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sCcvzZRkG1uwSL9V',
					reason : 'i5ZF0kuCKrltnWXT',
					text : '5msIJStXo94EkiKL',
				),
			),
			bot_inline_placeholder : 'Y5KhLWVvG8N037id',
			lang_code : 'kPecxmv0EGL5hNqT',
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
				max_id : 89,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -6246463922528656016,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : -3300753914230668872,
			),
			bot_active_users : 91,
			bot_verification_icon : 5681150770966461408,
			send_paid_messages_stars : 8993035455066707197,
		),
	),
);
```