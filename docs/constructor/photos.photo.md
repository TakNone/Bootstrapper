# photos.photo

**Description** : *Photo with auxiliary data*

**Layer** : 216

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
		id : 3376809987610038260,
	),
	users : array(
		$client->userEmpty(
			id : 5644209678603147418,
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
			id : -8062208800566910283,
			access_hash : -7713282191611010214,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Cmpr6DIyLFjcQKVi',
					reason : 'WbP0B4MAFVc5n9fK',
					text : '2LfBF6JzeHRWq4C9',
				),
			),
			bot_inline_placeholder : 'ZdWowb6GQxYIODsP',
			lang_code : 'Yp36XTznrxWsBy7O',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 87,
			color : $client->peerColor(
				color : 76,
				background_emoji_id : -2462419865898983615,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 7311647233259795304,
			),
			bot_active_users : 44,
			bot_verification_icon : 979747558315494042,
			send_paid_messages_stars : -2930068481487139293,
		),
	),
);
```