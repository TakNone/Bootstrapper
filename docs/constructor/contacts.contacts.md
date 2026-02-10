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
			user_id : -6778530738917396806,
			mutual : true,
		),
	),
	saved_count : 72,
	users : array(
		$client->userEmpty(
			id : 7997308137805302895,
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
			id : 1271421109019800031,
			access_hash : -6323261239012718384,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R8ZONLTk1y5WwrQP',
					reason : 'Wg9zu8iPwG5C3N46',
					text : 'gpk9XxEiwHGBbKLO',
				),
			),
			bot_inline_placeholder : 'tboZeTX4wKWI5DkE',
			lang_code : 'oBRH7Fhsf0JxkdAM',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : 5319235971625632790,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -3551568138930010879,
			),
			bot_active_users : 65,
			bot_verification_icon : -6607573252630656910,
			send_paid_messages_stars : 1013929301801266288,
		),
	),
);
```