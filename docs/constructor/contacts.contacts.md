# contacts.contacts

**Description** : *The current user&#039;s contact list and info on users*

**Layer** : 218

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
			user_id : -8301863718013622128,
			mutual : false,
		),
	),
	saved_count : 78,
	users : array(
		$client->userEmpty(
			id : 2200914885032019639,
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
			id : 4972610527137903903,
			access_hash : 6227343362122024049,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DbWhzc0U69L4V3pe',
					reason : 'MW8QqDhFSPuemlYN',
					text : 'g5wMx0AuKz9NiGad',
				),
			),
			bot_inline_placeholder : 'Oh7osZk9iulL1Y2v',
			lang_code : '5QjLYF4SfhBa10ei',
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
				max_id : 60,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : 7714345208671701314,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : -3472642901844203543,
			),
			bot_active_users : 71,
			bot_verification_icon : 4747360044927818394,
			send_paid_messages_stars : 1088719846207860588,
		),
	),
);
```