# contacts.contacts

**Description** : *The current user's contact list and info on users*

**Layer** : 211

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
			user_id : 3265195726563860262,
			mutual : $client->boolFalse(),
		),
	),
	saved_count : 59,
	users : array(
		$client->userEmpty(
			id : 6145058271956271012,
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
			id : -3669428390197757848,
			access_hash : 6409748968595555517,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9klyunGKT7Uijho8',
					reason : 'ZTfA2OgVN1jHL9Ds',
					text : 'imyvscYQozTpKCd3',
				),
			),
			bot_inline_placeholder : 'LGVdk9xlzimFuSnq',
			lang_code : 'aos6AKObNIyinBT4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 6065440058961682096,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -7874134636650773724,
			),
			bot_active_users : 27,
			bot_verification_icon : 1739878063930307650,
			send_paid_messages_stars : 7380367663674822376,
		),
	),
);
```