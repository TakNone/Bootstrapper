# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 222

```tl
contacts.importedContacts#77d01c3b imported:Vector<ImportedContact> popular_invites:Vector<PopularContact> retry_contacts:Vector<long> users:Vector<User> = contacts.ImportedContacts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>imported</mark> | [`Vector<ImportedContact>`](type/ImportedContact) | List of successfully imported contacts |
| <mark>popular_invites</mark> | [`Vector<PopularContact>`](type/PopularContact) | Popular contacts |
| <mark>retry_contacts</mark> | [`Vector<long>`](type/long) | List of contact ids that could not be imported due to system limitation and will need to be imported at a later date |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.ImportedContacts](type/contacts.ImportedContacts)

---

## Example

```php
$contactsImportedContacts = $client->contacts->importedContacts(
	imported : array(
		$client->importedContact(
			user_id : -6658872643498916700,
			client_id : 9058950264361928392,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 2839334153320623157,
			importers : 51,
		),
	),
	retry_contacts : array(1801836334637479806),
	users : array(
		$client->userEmpty(
			id : -7024648050610945602,
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
			id : -8679138833667414919,
			access_hash : 6679114476527467648,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'X2sGKmnheku6aVdc',
					reason : 'rWk9ZzDCm1VKsL4U',
					text : '7kOEe9LKhUNBH6oD',
				),
			),
			bot_inline_placeholder : 'CGbqMZBEDY3KwAcn',
			lang_code : 'Lk7mn1rEW3HzIjFh',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -8619798394353250321,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : 5063804328019935512,
			),
			bot_active_users : 40,
			bot_verification_icon : 7310277796039344517,
			send_paid_messages_stars : -1510840889560660813,
		),
	),
);
```