# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 229

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
			user_id : -8109343288827157200,
			mutual : true,
		),
	),
	saved_count : 54,
	users : array(
		$client->userEmpty(
			id : -3597080465881301781,
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
			id : 5344127992080291163,
			access_hash : -3076296903676170058,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VJ5eLEgq2KdwlhGR',
					reason : 'tSC73glGynQpTcvs',
					text : '8jF9UYH5IVduqBQ7',
				),
			),
			bot_inline_placeholder : 'aeupBS58g1tiYhmQ',
			lang_code : 'lNW46qTiaIH7z03n',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : 8521436740742529679,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -4507928189767767103,
			),
			bot_active_users : 75,
			bot_verification_icon : 8180434456988687074,
			send_paid_messages_stars : -2736246853433535450,
			linked_community_id : 1601579659507166057,
		),
	),
);
```