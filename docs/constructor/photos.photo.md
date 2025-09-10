# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 214

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
		id : -547588854958175968,
	),
	users : array(
		$client->userEmpty(
			id : -2619309533769893705,
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
			id : -7112090296280752435,
			access_hash : 4096939174850631867,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Pv9sduITQL17fkwq',
					reason : 'SCFycRZgmn7lOHpW',
					text : 'TjvmbeDBRxrolqzg',
				),
			),
			bot_inline_placeholder : '7VRzsfv1QhrFt9nD',
			lang_code : 'Q8qoKAvlEX54pkLn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 2,
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 136802859642138465,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 5821203022321310891,
			),
			bot_active_users : 0,
			bot_verification_icon : 875338321701190657,
			send_paid_messages_stars : -9054855719628033011,
		),
	),
);
```