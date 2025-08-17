# contacts.importedContacts

**Description** : *Info on successfully imported contacts*

**Layer** : 211

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
			user_id : 2425886827277039423,
			client_id : -2486844138100923936,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : -2904510815972572561,
			importers : 66,
		),
	),
	retry_contacts : array(8872012599211326766),
	users : array(
		$client->userEmpty(
			id : 2655757249059954009,
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
			id : -8361419269652654245,
			access_hash : -5227907783377451609,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xlYQdiu4s3freGSM',
					reason : 'ESR6U2wk7gpdaDv8',
					text : 'GfBeI6VjixvyoYzA',
				),
			),
			bot_inline_placeholder : 'MFe5S7RVwfDoUmaX',
			lang_code : 'sPJ0mbFDtBCxIrU2',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 60,
			color : $client->peerColor(
				color : 0,
				background_emoji_id : 1113700197086095322,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 8270857585977071748,
			),
			bot_active_users : 68,
			bot_verification_icon : -3896938618884290781,
			send_paid_messages_stars : 1396864997094911166,
		),
	),
);
```