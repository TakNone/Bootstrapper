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
			user_id : 4612840521485731494,
			mutual : true,
		),
	),
	saved_count : 34,
	users : array(
		$client->userEmpty(
			id : 4806314579021155525,
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
			id : 3825528755863989404,
			access_hash : -2162673573166642230,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mQaiNuBEAqDjT3bw',
					reason : 'pRe2PGr7SWzA1ZnT',
					text : 'qoSZKPU9x2tslzCR',
				),
			),
			bot_inline_placeholder : 'Kx9ncpmFAhH4kZa5',
			lang_code : 'Vme08D1rSoyQXvkI',
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
				max_id : 20,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : -734982436652748760,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : 4086518195314809944,
			),
			bot_active_users : 100,
			bot_verification_icon : -4477089046225545513,
			send_paid_messages_stars : 281058725687587936,
		),
	),
);
```