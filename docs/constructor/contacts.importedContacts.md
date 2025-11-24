# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 218

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
			user_id : 721145672813905162,
			client_id : -5426182425139562111,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 7355786129487786442,
			importers : 51,
		),
	),
	retry_contacts : array(3369068981471069357),
	users : array(
		$client->userEmpty(
			id : -6124168242033106325,
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
			id : 8204004376482738763,
			access_hash : -3292508765270840001,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PEDVpUyxHgcwtSNL',
					reason : '4OinYRD8mcZCNwMz',
					text : 'ZuJQotXhN2GFAr93',
				),
			),
			bot_inline_placeholder : 'e8QtETg9ODcLIqSV',
			lang_code : 'xpXLe8wq7rRMfDEm',
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
				max_id : 50,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -5459869480885387768,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -3443676139228954800,
			),
			bot_active_users : 61,
			bot_verification_icon : -636256281077109493,
			send_paid_messages_stars : 475245498916873192,
		),
	),
);
```