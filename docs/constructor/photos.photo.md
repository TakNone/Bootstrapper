# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 211

```tl
photos.photo#20212ca8 photo:Photo users:Vector<User> = photos.Photo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photo</mark> | [`Photo`](type/Photo) | Photo |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[photos.Photo](type/photos.Photo)

---

## Example

```php
$photosPhoto = $client->photos->photo(
	photo : $client->photoEmpty(
		id : 1431710340886436683,
	),
	users : array(
		$client->userEmpty(
			id : 5535483400983876605,
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
			id : 5057582962650152813,
			access_hash : -5024586823912445456,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5HTqpdSknW3ZFLRa',
					reason : 'AYIsLBRXHD3jS1Ka',
					text : 'MRLW4znl0UjP7vNf',
				),
			),
			bot_inline_placeholder : 'ZiuWGACwVhYganJI',
			lang_code : 'YEmho0NaHbiDGxLU',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 77,
				background_emoji_id : 2393178715660233172,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 5037263458498371570,
			),
			bot_active_users : 68,
			bot_verification_icon : 9187117955287684191,
			send_paid_messages_stars : 2013374341121924847,
		),
	),
);
```