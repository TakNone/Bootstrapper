# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 222

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
		id : -1305196820120088689,
	),
	users : array(
		$client->userEmpty(
			id : 5997152054158741110,
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
			id : -2394438431634180768,
			access_hash : -3244943680288327655,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZD3sYR6PkzijUA7v',
					reason : 'WZQpALOVwlnaD9G3',
					text : 'ExVc4iRU3fJ2I0ja',
				),
			),
			bot_inline_placeholder : 'quMiowRjDxKFbO2H',
			lang_code : 'RoeyIcK3LZsDJi74',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 7713325522066789813,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 4707132576415746245,
			),
			bot_active_users : 16,
			bot_verification_icon : 2375583400383520332,
			send_paid_messages_stars : -6498174037455990459,
		),
	),
);
```