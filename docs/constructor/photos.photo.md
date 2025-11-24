# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 218

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
		id : 2749555308334183663,
	),
	users : array(
		$client->userEmpty(
			id : -5784875284433671068,
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
			id : -3513614836647767774,
			access_hash : 6264355611934693536,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nYmFVIwhjKQyS5Oi',
					reason : 'qIGDwjidMWaNth41',
					text : 'IOuGtzUqvjwBesVK',
				),
			),
			bot_inline_placeholder : 'ulhIzFcJQqsvSaXK',
			lang_code : 'PBZAL12q4XYwOrut',
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
				max_id : 48,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : -512175514319095751,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 3966101640646845097,
			),
			bot_active_users : 10,
			bot_verification_icon : 5680986994237102180,
			send_paid_messages_stars : -5196109013026821778,
		),
	),
);
```