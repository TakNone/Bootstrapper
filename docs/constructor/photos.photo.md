# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 227

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
		id : 8170169146132071955,
	),
	users : array(
		$client->userEmpty(
			id : 5450637239343494728,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 2380160554269439208,
			access_hash : -192774430678002386,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GvEByUX3bikR50uA',
					reason : 'uowG8Y9DnJCZF23z',
					text : 'YK0aZl1N4smWRQDp',
				),
			),
			bot_inline_placeholder : 'uiIh1ZTz90brS6D3',
			lang_code : 'oOwqreUTYc4JLfS7',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : -1111078113797722103,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 2492077310277552732,
			),
			bot_active_users : 44,
			bot_verification_icon : -316974918144968683,
			send_paid_messages_stars : 4796609669769117232,
		),
	),
);
```