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
		id : -8619488523680415402,
	),
	users : array(
		$client->userEmpty(
			id : -3530681851680402088,
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
			id : -6843458114667641641,
			access_hash : -8111204320023785309,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '83LiRH09DpAWcJrP',
					reason : 'BXnAzINdoxs2mufW',
					text : 'u25aFBMYik61x4bE',
				),
			),
			bot_inline_placeholder : 'z6MLRe7jmxkWgaE5',
			lang_code : 'poaPSLIXH7sQJYc8',
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
				max_id : 41,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -7682282579409210247,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 5599927788182123494,
			),
			bot_active_users : 8,
			bot_verification_icon : -6653578029184722915,
			send_paid_messages_stars : -546298897328113369,
		),
	),
);
```