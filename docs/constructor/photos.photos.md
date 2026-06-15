# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 227

```tl
photos.photos#8dca6aa5 photos:Vector<Photo> users:Vector<User> = photos.Photos;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photos</mark> | [`Vector<Photo>`](type/Photo) | List of photos |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of mentioned users |

---

## Type

[photos.Photos](type/photos.Photos)

---

## Example

```php
$photosPhotos = $client->photos->photos(
	photos : array(
		$client->photoEmpty(
			id : -8136959725864163935,
		),
		$client->photo(
			has_stickers : true,
			id : -5123510587468498655,
			access_hash : -8339948908362005619,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 16,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'ZJrnqVoA2W3RCwmi',
				),
				$client->photoSize(
					type : 'hUDv93Snc7ZlzBmw',
					w : 55,
					h : 64,
					size : 33,
				),
				$client->photoCachedSize(
					type : 'xPKLTcU7vN6YD5rQ',
					w : 89,
					h : 46,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'AEq09QgIGuv3LPas',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'LRYhUQIsgK8prdv1',
					w : 81,
					h : 49,
					sizes : array(45),
				),
				$client->photoPathSize(
					type : 'b7O4F1KPR6eMcYQa',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'EuslzIXUFfLyPeNw',
					w : 75,
					h : 40,
					size : 74,
					video_start_ts : 150725.23046875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -7847466498962435990,
					background_colors : array(74),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6816797860356814115,
					background_colors : array(59),
				),
			),
			dc_id : 40,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4440735355127924902,
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
			id : -7184114184955720203,
			access_hash : -8667541547672359395,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'agIeGRC9BHkyPWnj',
					reason : 'Vg9yHURsCrpcQM8a',
					text : 'ZIRAGVLNvTFks0j9',
				),
			),
			bot_inline_placeholder : 'aUlJ6NFOSnZMuyQe',
			lang_code : 'n8oibdJ3L2mHAKht',
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
				max_id : 90,
			),
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -1045624587295848779,
			),
			profile_color : $client->peerColor(
				color : 69,
				background_emoji_id : -2229034216880609756,
			),
			bot_active_users : 30,
			bot_verification_icon : -197688165134505177,
			send_paid_messages_stars : 3434989139059320427,
		),
	),
);
```