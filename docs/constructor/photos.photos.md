# photos.photos

**Description** : *Full list of photos with auxiliary data*

**Layer** : 218

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
			id : 5523418602195842423,
		),
		$client->photo(
			has_stickers : true,
			id : -2365457855072553556,
			access_hash : 3781860415566284434,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 49,
			sizes : array(
				$client->photoSizeEmpty(
					type : 'saUyhmdKfgxW35cr',
				),
				$client->photoSize(
					type : 'oDZlkx6U7O3mAr1u',
					w : 17,
					h : 55,
					size : 10,
				),
				$client->photoCachedSize(
					type : '8PVidAJg3RTyLEtU',
					w : 46,
					h : 17,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'tmd63bL1u5vglTUD',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1HT5cbFM0yuqPo4n',
					w : 65,
					h : 100,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'rjzf4YbB1uLS6MQW',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_sizes : array(
				$client->videoSize(
					type : 'TlnxpdsvDURPM7fi',
					w : 81,
					h : 9,
					size : 22,
					video_start_ts : 1774263.712890625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2351099899605839586,
					background_colors : array(80),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -6961883878823863921,
					background_colors : array(22),
				),
			),
			dc_id : 88,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5425544935731291701,
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
			id : 2911147060237277454,
			access_hash : -6950307441952726789,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uMFE584phHZdcjoz',
					reason : 'R9YodrgJB7liPWm1',
					text : 'Cq9EcY6DTKR30wVL',
				),
			),
			bot_inline_placeholder : 'rg2fYMtobeCUNDv0',
			lang_code : 'D1McqeAbQg7wLfik',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -550621880205713193,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 8761667601396567465,
			),
			bot_active_users : 62,
			bot_verification_icon : -6353625126151527538,
			send_paid_messages_stars : 14801848939214192,
		),
	),
);
```