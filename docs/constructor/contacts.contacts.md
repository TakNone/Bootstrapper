# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 233

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
			user_id : -7121406904356999736,
			mutual : false,
		),
	),
	saved_count : 87,
	users : array(
		$client->userEmpty(
			id : -3090745402800765021,
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
			bot_forum_sidebar : true,
			id : -8710641536991013748,
			access_hash : 8453418215662043624,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9aljGIfTODK8Y6ix',
					reason : 'q3pFkSX7Mus5t8Kf',
					text : 'RGyzLUvrIcfuSekQ',
				),
			),
			bot_inline_placeholder : 'B45ALWCHtf6g23Ep',
			lang_code : 'xwBF0V4l7XhCtQT3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 81,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : 2161350560409792405,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : 3701524682675073122,
			),
			bot_active_users : 97,
			bot_verification_icon : 7637284719936617829,
			send_paid_messages_stars : -5463690267140362804,
			linked_community_id : -6919160433958771947,
		),
	),
);
```