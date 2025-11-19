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
			user_id : 4412423033916775416,
			client_id : 7313270409842234084,
		),
	),
	popular_invites : array(
		$client->popularContact(
			client_id : 5794261652852448909,
			importers : 67,
		),
	),
	retry_contacts : array(2058199651575704744),
	users : array(
		$client->userEmpty(
			id : 2571819470436666514,
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
			id : 7771599200509315083,
			access_hash : 838177339629126782,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1rWMmp7yR9T25eqK',
					reason : 'apcJnY4Z5StsQDUu',
					text : 'tjVPT67nFifE8oGw',
				),
			),
			bot_inline_placeholder : 'pY6OWzlIkGghvyoa',
			lang_code : 'IUsShZXM5cY8afwN',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 4789488644932898799,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 9013816411295260946,
			),
			bot_active_users : 54,
			bot_verification_icon : 8681490852654704801,
			send_paid_messages_stars : -2442403532786142672,
		),
	),
);
```