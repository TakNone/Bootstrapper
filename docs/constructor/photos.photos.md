# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 225

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
			id : -7290526553544379861,
		),
		$client->photo(
			has_stickers : true,
			id : 7425289901865092584,
			access_hash : -2764217590344469804,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 78,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'gzn4A38Pt9rNdFBS',
				),
				$client->photoSize(
					type : 'HlWFx4kbJ1dSzKfI',
					w : 61,
					h : 82,
					size : 85,
				),
				$client->photoCachedSize(
					type : 'aPmZvIqpk8rOT2jM',
					w : 52,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '8wz2Dr3kBvpIdAfK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'E32kb9VycTmZ6YQl',
					w : 96,
					h : 17,
					sizes : array(74),
				),
				$client->photoPathSize(
					type : '1v4FpqwfxVKEoblS',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'rTVt91BKv0S82us6',
					w : 48,
					h : 54,
					size : 14,
					video_start_ts : 274271.4765625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4725245952088320825,
					background_colors : array(74),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2029820362059422137,
					background_colors : array(1),
				),
			),
			dc_id : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3603556723349573711,
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
			id : 5083087187312481059,
			access_hash : 4858328630014302154,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ypcHVfEk40sO6wN7',
					reason : '1umRwXCYQ4A9TvWG',
					text : '9XnZrakQNtfbzu2w',
				),
			),
			bot_inline_placeholder : 'miwFJx3RHoV7bh9C',
			lang_code : 'cjBsJYaiHzKyQmtN',
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
				max_id : 56,
			),
			color : $client->peerColor(
				color : 85,
				background_emoji_id : 669870877958762545,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : -973240342157557540,
			),
			bot_active_users : 7,
			bot_verification_icon : -8390702597823304696,
			send_paid_messages_stars : 6050230472714499297,
		),
	),
);
```