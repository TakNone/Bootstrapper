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
			user_id : -7899368722032341093,
			mutual : true,
		),
	),
	saved_count : 85,
	users : array(
		$client->userEmpty(
			id : -5599561684666033266,
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
			id : -4323594558052123121,
			access_hash : 4046390788396727482,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dm0n1xNtFUKGc4ho',
					reason : '5MzkhvdjaILYKZPt',
					text : 'FDq6ZTPVx7JQ3lOt',
				),
			),
			bot_inline_placeholder : 'uRrMnfXyKcb8ldsZ',
			lang_code : 'V5MdjET7qOuiImnA',
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
				color : 69,
				background_emoji_id : -7521593812940258655,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 436592735521123310,
			),
			bot_active_users : 78,
			bot_verification_icon : 2016805616843125671,
			send_paid_messages_stars : -2922102775587314588,
		),
	),
);
```